<?php
class ControllerApiImageSplitter extends Controller{
    
    public function index(){

        $this->load->language('api/image_splitter');
        $this->load->model('tool/image');
        $json = array();

        if (!isset($this->session->data['api_id'])) {
			header('HTTP/1.1 401 Unauthorized');
            $json['status_code'] = '401';
            $json['error']['massage'] = $this->language->get('error_permission');
		} else {
			// Add keys for missing post vars
			$keys = array(
                'image' ,
            );
            
			foreach ($keys as $key) {
				if (!isset($this->request->post[$key])) {
					$this->request->post[$key] = '';
				}
            }

            if ($this->request->files['image'] < 1) {
				header('HTTP/1.1 400 Bad Request');
                $json['status_code'] = '400';
                $json['error']['details']['image'] = $this->language->get('error_image');
            }else {
                // Make sure we have the correct directory
		        $directory = rtrim(DIR_IMAGE . 'catalog/splitter/');

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

                    if (!is_file(DIR_IMAGE . 'catalog/splitter/' . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . 'catalog/splitter/' . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
                        header('HTTP/1.1 500 Internal Server Error');
                        $json['status_code'] = '1000';
                        $json['error']['message'] = $this->language->get('error_upload');
                    }

                    $wxh = ["8", "16", "32", "64", "138"];
                    foreach ($wxh as $value) {
                        $width = $value;
                        $height = $value;
                        $filenames = $this->request->files['image']['name'];
                        $extension = pathinfo($filenames, PATHINFO_EXTENSION);
            
                        $image_old = 'catalog/splitter/' .$filenames;
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
					'image'             => $filename,
                );
                header('HTTP/1.1 200 OK');
                $json['status_code'] = '200';
                $json['success']['massage'] = $this->language->get('text_success_add');
                $json['success']['results'] = $this->session->data['product'];
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}