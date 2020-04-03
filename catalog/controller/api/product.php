<?php
class ControllerApiProduct extends Controller{
    
    public function index(){

        $this->load->language('api/product');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $json = array();

        if (!isset($this->session->data['api_id'])) {
            header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
        } else {
            if (isset($this->request->get['page'])) {
                $page = $this->request->get['page'];
            } else {
                $page = 1;
            }
    
            $url = '';

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $filter_data = array(
                'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
                'limit'           => $this->config->get('config_limit_admin')
            );

            $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

		    $results = $this->model_catalog_product->getProducts($filter_data);

            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                }
                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }
                if ((float) $result['special']) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }
                if ($this->config->get('config_tax')) {
                    $tax = $this->currency->format((float) $result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
                } else {
                    $tax = false;
                }
                if ($this->config->get('config_review_status')) {
                    $rating = (int) $result['rating'];
                } else {
                    $rating = false;
                }
                $data[] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'name' => $result['name'],
                    'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price' => $price,
                    'special' => $special,
                    'tax' => $tax,
                    'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'rating' => $result['rating'],
                    'href' => $this->url->link('product/product&product_id=' . $result['product_id']),
                );
            }
            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $pagination = new Pagination();
		    $pagination->total = $product_total;
		    $pagination->page = $page;
		    $pagination->limit = $this->config->get('config_limit_admin');
            $pagination->url = $this->url->link('api/product', 'user_token=' . $url . '&page={page}', true);
            
            $total_halaman = ceil($product_total/$this->config->get('config_limit_admin'));

            header('HTTP/1.1 200 OK');
            $json['status_code'] = '200';
            $json['limit'] = $this->config->get('config_limit_admin');
            $json['results'] = $data;
            if ($page == 1) {
                $next = $page + 1;
                $json['next'] = $this->url->link('api/product&api_token=' . $this->request->get['api_token'] . '&page=' . $next .'');
            } 
            if (($page > 1) && ($page < $total_halaman)) {
                $next = $page + 1;
                $previous = $page - 1;
                $json['next'] = $this->url->link('api/product&api_token=' . $this->request->get['api_token'] . '&page=' . $next .'');
                $json['previous'] = $this->url->link('api/product&api_token=' . $this->request->get['api_token'] . '&page=' . $previous.'');
            } 
            if ($page == $total_halaman) {
                $previous = $page - 1;
                $json['previous'] = $this->url->link('api/product&api_token=' . $this->request->get['api_token'] . '&page=' . $previous .'');
            }

		    $json['page'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));

        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function getById(){

        $this->load->language('api/product');
        $this->load->model('api/product');
        $json = array();

        if (!isset($this->session->data['api_id'])) {
			header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->get['product_id'])) {
                $product_info = $this->model_api_product->getProduct($this->request->get['product_id']);
                if ($product_info) {
                    header('HTTP/1.1 200 OK');
                    $json['status_code'] = '200';
                    $json['success']['results'] = $product_info;

			    } else {
                    header('HTTP/1.1 404 Not Found');
                    $json['status_code'] = '404';
                    $json['error']['massage'] = $this->language->get('error_get_id');
                }
            } else {
                header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['massage'] = $this->language->get('error_empty');
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function add(){

        $this->load->language('api/product');
        $this->load->model('api/product');

        // Delete past product in case there is an error
		unset($this->session->data['product']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
		} else {
			// Add keys for missing post vars
			$keys = array(
				'name' ,
                'description' ,
                'meta_title' ,
                'meta_description' ,
                'meta_keyword' ,
                'tag' ,
                'language_id' ,
                'model' ,
                'sku' ,
                'upc' ,
                'ean' ,
                'jan' ,
                'isbn' ,
                'mpn' ,
                'location' ,
                'quantity' ,
                'minimum' ,
                'subtract' ,
                'stock_status_id' ,
                'store_id' ,
                'date_available' ,
                'manufacturer_id' ,
                'shipping' ,
                'price' ,
                'points' ,
                'weight' ,
                'weight_class_id' ,
                'length' ,
                'width' ,
                'height' ,
                'length_class_id' ,
                'status' ,
                'tax_class_id' ,
                'sort_order' ,
                'image' ,
                'product_category' ,
			);

			foreach ($keys as $key) {
				if (!isset($this->request->post[$key])) {
					$this->request->post[$key] = '';
				}
            }
            
            $manufacturer = $this->model_api_product->getManufacturer($data = array());
            $stock_status = $this->model_api_product->getStockStatus($data = array());

			if ((utf8_strlen(trim($this->request->post['name'])) < 1) || (utf8_strlen(trim($this->request->post['name'])) > 32)) {
                header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['name'] = $this->language->get('error_product_name');
			}
            
            if ((utf8_strlen(trim($this->request->post['description'])) < 5)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['description'] = $this->language->get('error_product_description');
			}
            
            if ((utf8_strlen(trim($this->request->post['meta_title'])) < 1) || (utf8_strlen(trim($this->request->post['meta_title'])) > 32)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['meta_title'] = $this->language->get('error_product_meta_title');
			}
            
            if ((utf8_strlen(trim($this->request->post['model'])) < 1) || (utf8_strlen(trim($this->request->post['model'])) > 32)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['model'] = $this->language->get('error_model');
			}
            
            if ((utf8_strlen($this->request->post['quantity']) < 1) || (utf8_strlen($this->request->post['quantity']) > 5)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['quantity'] = $this->language->get('error_quantity');
            }

			if ((utf8_strlen($this->request->post['minimum']) < 1) || (utf8_strlen($this->request->post['minimum']) > 5)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['minimum'] = $this->language->get('error_minimum');
            }

			if ((utf8_strlen($this->request->post['stock_status_id']) < 1) || (utf8_strlen($this->request->post['stock_status_id']) > 5)) {
                header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['stock_status_id'] = $this->language->get('error_stock_status_id');
            }

			if ((utf8_strlen($this->request->post['manufacturer_id']) < 1) || (utf8_strlen($this->request->post['manufacturer_id']) > 5)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['manufacturer_id'] = $this->language->get('error_manufacturer_id');
            }
            
            if ((utf8_strlen($this->request->post['price']) < 1) || (utf8_strlen($this->request->post['price']) > 32)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['price'] = $this->language->get('error_price');
            }
            
            if ((utf8_strlen($this->request->post['points']) < 1) || (utf8_strlen($this->request->post['points']) > 32)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['points'] = $this->language->get('error_points');
            }

			if ((utf8_strlen($this->request->post['weight']) < 1) || (utf8_strlen($this->request->post['weight']) > 10)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['weight'] = $this->language->get('error_weight');
            }
            
            if ((utf8_strlen($this->request->post['length']) < 1) || (utf8_strlen($this->request->post['length']) > 10)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['length'] = $this->language->get('error_length');
            }

			if ((utf8_strlen($this->request->post['width']) < 1) || (utf8_strlen($this->request->post['width']) > 10)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['width'] = $this->language->get('error_width');
            }
            
            if ((utf8_strlen($this->request->post['height']) < 1) || (utf8_strlen($this->request->post['height']) > 10)) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['height'] = $this->language->get('error_height');
            } 
            
            if ($this->request->files['image'] < 1) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['image'] = $this->language->get('error_image');
            }else {
                // Make sure we have the correct directory
		        $directory = rtrim(DIR_IMAGE . 'catalog/demo/');

		        // Check its a directory
		        if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			        header('HTTP/1.1 404 Not Found');
                    $json['status_code'] = '404';
                    $json['error']['message'] = $this->language->get('error_directory');
                }

		        if (is_uploaded_file($this->request->files['image']['tmp_name'])) {
				
				    $filename = basename(html_entity_decode($this->request->files['image']['name'], ENT_QUOTES, 'UTF-8'));

				    // Validate the filename length
                    if ((utf8_strlen($filename) < 6) || (utf8_strlen($filename) > 255)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['message'] = $this->language->get('error_filename');
                    }

                    // Allowed file extension types
					$allowed = array(
						'jpg',
						'jpeg',
						'gif',
						'png'
                    );
                    
                    $file_extension = pathinfo($this->request->files['image']['name'], PATHINFO_EXTENSION);

					if (! in_array($file_extension, $allowed)) {
						header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['message'] = $this->language->get('error_filetype');
					}
                
                    if (! move_uploaded_file($this->request->files['image']['tmp_name'],$directory.$filename)) {
                        header('HTTP/1.1 500 Internal Server Error');
                        $json['status_code'] = '500';
                        $json['error']['message'] = $this->language->get('error_upload');
                    }

                    if (!is_file(DIR_IMAGE . 'catalog/demo/' . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . 'catalog/demo/' . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
                        header('HTTP/1.1 404 Not Found');
                        $json['status_code'] = '404';
                        $json['error']['message'] = $this->language->get('error_file_image');
                    }

                    $wxh = ["8", "16", "32"];
                    foreach ($wxh as $value) {
                        $width = $value;
                        $height = $value;
                        $filenames = $this->request->files['image']['name'];
                        $extension = pathinfo($filenames, PATHINFO_EXTENSION);
            
                        $image_old = 'catalog/demo/' .$filenames;
                        $image_new = 'catalog/splitter/' . utf8_substr($filenames, 0, utf8_strrpos($filenames, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;
            
                        if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
                            list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
                             
                            if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) { 
                                return DIR_IMAGE . $image_old;
                            }
                                    
                            $path = '';
            
                            $directories = explode('/', dirname($image_new));
            
                            foreach ($directories as $directory) {
                                $path = $path . '/' . $directory;
            
                                if (!is_dir(DIR_IMAGE . $path)) {
                                    @mkdir(DIR_IMAGE . $path, 0777);
                                }
                            }
            
                            if ($width_orig != $width || $height_orig != $height) {
                                $image = new Image(DIR_IMAGE . $image_old);
                                $image->resize($width, $height);
                                $image->save(DIR_IMAGE . $image_new);
                            } else {
                                copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
                            }
                        }
                    }
                
                } else {
                    header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['message'] = $this->language->get('error_image_file');
                }
            }
            $extension = pathinfo($this->request->files['image']['name'], PATHINFO_EXTENSION);
            $filename  = $this->request->files['image']['name'];
            $filenames = 'catalog/demo/' . $this->request->files['image']['name'];
            $img_split_8x8 = 'catalog/splitter/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-8x8.' . $extension;
            $img_split_16x16 = 'catalog/splitter/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-16x16.' . $extension;
            $img_split_32x32 = 'catalog/splitter/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-32x32.' . $extension;

			if (!$json) {
				$this->session->data['product'] = array(
					'name'              => $this->request->post['name'],
					'description'       => $this->request->post['description'],
					'meta_title'        => $this->request->post['meta_title'],
					'meta_description'  => '',
					'meta_keyword'      => '',
					'tag'               => '',
					'language_id'       => '2',
					'model'             => $this->request->post['model'],
					'sku'               => '',
					'upc'               => '',
					'ean'               => '',
					'jan'               => '',
					'isbn'              => '',
					'mpn'               => '',
					'location'          => '',
					'quantity'          => $this->request->post['quantity'],
					'minimum'           => $this->request->post['minimum'],
					'subtract'          => '1',
					'stock_status_id'   => $this->request->post['stock_status_id'],
					'store_id'          => '0',
					'manufacturer_id'   => $this->request->post['manufacturer_id'],
					'shipping'          => '1',
					'price'             => $this->request->post['price'],
					'points'            => $this->request->post['points'],
					'weight'            => $this->request->post['weight'],
					'weight_class_id'   => "1",
					'length'            => $this->request->post['length'],
					'width'             => $this->request->post['width'],
					'height'            => $this->request->post['height'],
					'length_class_id'   => '1',
					'status'            => '1',
					'tax_class_id'      => '0',
					'sort_order'        => '0',
					'product_category'  => '24'
                );

                $this->session->data['image'] = array(
					'image' => $filenames,
					'8x8'   => $img_split_8x8,
					'16x16' => $img_split_16x16,
					'32x32' => $img_split_32x32,
                );

                $this->model_api_product->addProduct($this->session->data['product'], $this->session->data['image']);
                header('HTTP/1.1 200 OK');
                $json['status_code'] = '200';
                $json['success']['massage'] = $this->language->get('text_success_add');
                $json['success']['results'] = $this->session->data['product'];
                $json['success']['image'] = $this->session->data['image'];
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
    
    public function edit(){

        $this->load->language('api/product');
        $this->load->model('api/product');

        // Delete past product in case there is an error
		unset($this->session->data['product']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
		} else {
            if (isset($this->request->post['product_id'])) {
                $product_info = $this->model_api_product->getProduct($this->request->post['product_id']);
                if ($product_info) {
			        // Add keys for missing post vars
			        $keys = array(
				        'name' ,
                        'description' ,
                        'meta_title' ,
                        'meta_description' ,
                        'meta_keyword' ,
                        'tag' ,
                        'language_id' ,
                        'model' ,
                        'sku' ,
                        'upc' ,
                        'ean' ,
                        'jan' ,
                        'isbn' ,
                        'mpn' ,
                        'location' ,
                        'quantity' ,
                        'minimum' ,
                        'subtract' ,
                        'stock_status_id' ,
                        'store_id' ,
                        'date_available' ,
                        'manufacturer_id' ,
                        'shipping' ,
                        'price' ,
                        'points' ,
                        'weight' ,
                        'weight_class_id' ,
                        'length' ,
                        'width' ,
                        'height' ,
                        'length_class_id' ,
                        'status' ,
                        'tax_class_id' ,
                        'sort_order' ,
                        'image' ,
                        'product_category' ,
			        );

			        foreach ($keys as $key) {
				        if (!isset($this->request->post[$key])) {
					        $this->request->post[$key] = '';
				        }
			        }
            
                    $manufacturer = $this->model_api_product->getManufacturer($data = array());
                    $stock_status = $this->model_api_product->getStockStatus($data = array());

			        if ((utf8_strlen(trim($this->request->post['name'])) < 1) || (utf8_strlen(trim($this->request->post['name'])) > 32)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['name'] = $this->language->get('error_product_name');
                    }
                    
                    if ((utf8_strlen(trim($this->request->post['description'])) < 5)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['description'] = $this->language->get('error_product_description');
                    }
                    
                    if ((utf8_strlen(trim($this->request->post['meta_title'])) < 1) || (utf8_strlen(trim($this->request->post['meta_title'])) > 32)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['meta_title'] = $this->language->get('error_product_meta_title');
                    }
                    
                    if ((utf8_strlen(trim($this->request->post['model'])) < 1) || (utf8_strlen(trim($this->request->post['model'])) > 32)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['model'] = $this->language->get('error_model');
                    }
                    
                    if ((utf8_strlen($this->request->post['quantity']) < 1) || (utf8_strlen($this->request->post['quantity']) > 5)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['quantity'] = $this->language->get('error_quantity');
                    }
        
                    if ((utf8_strlen($this->request->post['minimum']) < 1) || (utf8_strlen($this->request->post['minimum']) > 5)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['minimum'] = $this->language->get('error_minimum');
                    }
        
                    if ((utf8_strlen($this->request->post['stock_status_id']) < 1) || (utf8_strlen($this->request->post['stock_status_id']) > 5)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['stock_status_id'] = $this->language->get('error_stock_status_id');
                    }
        
                    if ((utf8_strlen($this->request->post['manufacturer_id']) < 1) || (utf8_strlen($this->request->post['manufacturer_id']) > 5)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['manufacturer_id'] = $this->language->get('error_manufacturer_id');
                    }
                    
                    if ((utf8_strlen($this->request->post['price']) < 1) || (utf8_strlen($this->request->post['price']) > 32)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['price'] = $this->language->get('error_price');
                    }
                    
                    if ((utf8_strlen($this->request->post['points']) < 1) || (utf8_strlen($this->request->post['points']) > 32)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['points'] = $this->language->get('error_points');
                    }
        
                    if ((utf8_strlen($this->request->post['weight']) < 1) || (utf8_strlen($this->request->post['weight']) > 10)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['weight'] = $this->language->get('error_weight');
                    }
                    
                    if ((utf8_strlen($this->request->post['length']) < 1) || (utf8_strlen($this->request->post['length']) > 10)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['length'] = $this->language->get('error_length');
                    }
        
                    if ((utf8_strlen($this->request->post['width']) < 1) || (utf8_strlen($this->request->post['width']) > 10)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['width'] = $this->language->get('error_width');
                    }
                    
                    if ((utf8_strlen($this->request->post['height']) < 1) || (utf8_strlen($this->request->post['height']) > 10)) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['height'] = $this->language->get('error_height');
                    } 
            
                    if ($this->request->files['image'] < 1) {
                        header('HTTP/1.1 400 Bad Request');
                        $json['status_code'] = '400';
                        $json['error']['details']['image'] = $this->language->get('error_image');
                    }else {
                        // Make sure we have the correct directory
                        $directory = rtrim(DIR_IMAGE . 'catalog/demo/');
        
                        // Check its a directory
                        if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
                            header('HTTP/1.1 404 Not Found');
                            $json['status_code'] = '404';
                            $json['error']['message'] = $this->language->get('error_directory');
                        }
        
                        if (is_uploaded_file($this->request->files['image']['tmp_name'])) {
                        
                            $filename = basename(html_entity_decode($this->request->files['image']['name'], ENT_QUOTES, 'UTF-8'));
        
                            // Validate the filename length
                            if ((utf8_strlen($filename) < 6) || (utf8_strlen($filename) > 255)) {
                                header('HTTP/1.1 400 Bad Request');
                                $json['status_code'] = '400';
                                $json['error']['message'] = $this->language->get('error_filename');
                            }
        
                            // Allowed file extension types
                            $allowed = array(
                                'jpg',
                                'jpeg',
                                'gif',
                                'png'
                            );
                            
                            $file_extension = pathinfo($this->request->files['image']['name'], PATHINFO_EXTENSION);
        
                            if (! in_array($file_extension, $allowed)) {
                                header('HTTP/1.1 400 Bad Request');
                                $json['status_code'] = '400';
                                $json['error']['message'] = $this->language->get('error_filetype');
                            }
                        
                            if (! move_uploaded_file($this->request->files['image']['tmp_name'],$directory.$filename)) {
                                header('HTTP/1.1 500 Internal Server Error');
                                $json['status_code'] = '500';
                                $json['error']['message'] = $this->language->get('error_upload');
                            }

                            if (!is_file(DIR_IMAGE . 'catalog/demo/' . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . 'catalog/demo/' . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
                                header('HTTP/1.1 404 Not Found');
                                $json['status_code'] = '404';
                                $json['error']['message'] = $this->language->get('error_file_image');
                            }
        
                            $wxh = ["8", "16", "32"];
                            foreach ($wxh as $value) {
                                $width = $value;
                                $height = $value;
                                $filenames = $this->request->files['image']['name'];
                                $extension = pathinfo($filenames, PATHINFO_EXTENSION);
                    
                                $image_old = 'catalog/demo/' .$filenames;
                                $image_new = 'catalog/splitter/' . utf8_substr($filenames, 0, utf8_strrpos($filenames, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $extension;
                    
                                if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
                                    list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
                                     
                                    if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) { 
                                        return DIR_IMAGE . $image_old;
                                    }
                                            
                                    $path = '';
                    
                                    $directories = explode('/', dirname($image_new));
                    
                                    foreach ($directories as $directory) {
                                        $path = $path . '/' . $directory;
                    
                                        if (!is_dir(DIR_IMAGE . $path)) {
                                            @mkdir(DIR_IMAGE . $path, 0777);
                                        }
                                    }
                    
                                    if ($width_orig != $width || $height_orig != $height) {
                                        $image = new Image(DIR_IMAGE . $image_old);
                                        $image->resize($width, $height);
                                        $image->save(DIR_IMAGE . $image_new);
                                    } else {
                                        copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
                                    }
                                }
                            }
                        
                        } else {
                            header('HTTP/1.1 400 Bad Request');
                                $json['status_code'] = '400';
                                $json['error']['message'] = $this->language->get('error_image_file');
                        }
                    }

			        if (!$json) {
                        $filename = basename(html_entity_decode($this->request->files['image']['name'], ENT_QUOTES, 'UTF-8'));
                        $this->session->data['product'] = array(
                            'name'              => $this->request->post['name'],
                            'description'       => $this->request->post['description'],
                            'meta_title'        => $this->request->post['meta_title'],
                            'meta_description'  => '',
                            'meta_keyword'      => '',
                            'tag'               => '',
                            'language_id'       => '2',
                            'model'             => $this->request->post['model'],
                            'sku'               => '',
                            'upc'               => '',
                            'ean'               => '',
                            'jan'               => '',
                            'isbn'              => '',
                            'mpn'               => '',
                            'location'          => '',
                            'quantity'          => $this->request->post['quantity'],
                            'minimum'           => $this->request->post['minimum'],
                            'subtract'          => '1',
                            'stock_status_id'   => $this->request->post['stock_status_id'],
                            'store_id'          => '0',
                            'manufacturer_id'   => $this->request->post['manufacturer_id'],
                            'shipping'          => '1',
                            'price'             => $this->request->post['price'],
                            'points'            => $this->request->post['points'],
                            'weight'            => $this->request->post['weight'],
                            'weight_class_id'   => "1",
                            'length'            => $this->request->post['length'],
                            'width'             => $this->request->post['width'],
                            'height'            => $this->request->post['height'],
                            'length_class_id'   => '1',
                            'status'            => '1',
                            'tax_class_id'      => '0',
                            'sort_order'        => '0',
                            'image'             => $filename,
                            'product_category'  => '24'
                        );
                        $this->model_api_product->editProduct($this->request->post['product_id'],$this->session->data['product']);
                        header('HTTP/1.1 200 OK');
                    $json['status_code'] = '200';
                    $json['success']['massage'] = $this->language->get('text_success_edit');
                    $json['success']['results'] = $this->session->data['product'];
			        }
                } else {
                    header('HTTP/1.1 404 Not Found');
                    $json['status_code'] = '404';
                    $json['error']['massage'] = $this->language->get('error_get_id');
                }
            } else {
                header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['massage'] = $this->language->get('error_empty');
            }
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function delete(){

        $this->load->language('api/product');
        $this->load->model('api/product');
        $json = array();

        if (!isset($this->session->data['api_id'])) {
            header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
        } else {
			if (isset($this->request->get['product_id'])) {
                $product_info = $this->model_api_product->getProduct($this->request->get['product_id']);
                if ($product_info) {
                    $this->model_api_product->deleteProduct($this->request->get['product_id']);
                    header('HTTP/1.1 200 OK');
                    $json['status_code'] = '200';
                    $json['success']['massage'] = $this->language->get('text_success_delete');
                } else {
                    header('HTTP/1.1 404 Not Found');
                    $json['status_code'] = '404';
                    $json['error']['massage'] = $this->language->get('error_get_id');
                }
                
            } else {
                header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['massage'] = $this->language->get('error_empty');
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}