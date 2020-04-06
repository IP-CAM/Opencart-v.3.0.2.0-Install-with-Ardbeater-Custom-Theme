<?php

/* __string_template__70ee387b0b4123f2341596099740d9fbbb8947db6b156046d0c95d28bb97b597 */
class __TwigTemplate_337fc589f9c2f8be5c94fa293ce0d125125ce9e2337574271aa9f9113f09b0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"heading\"><h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3><hr class=\"gradient-divider\"></hr></div>
<div class=\"product-content\">
\t<div class=\"row\">
\t ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "\t  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"product-thumb transition\">
\t\t  <div class=\"nd-wrap nd-style-1\">
\t\t\t";
            // line 8
            if ((($this->getAttribute($context["product"], "quantity", array()) <= 0) && (isset($context["out_of_stock_show"]) ? $context["out_of_stock_show"] : null))) {
                // line 9
                echo "            \t<span class='out_of_stock'>";
                echo (isset($context["out_of_stock"]) ? $context["out_of_stock"] : null);
                echo "</span>
        \t";
            }
            // line 11
            echo "\t\t\t<center><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
\t\t\t  <img src=\"";
            // line 12
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" />
\t\t\t</a></center>
\t\t\t<div class=\"nd-content\">
\t\t\t\t<div class=\"nd-content_inner\">
\t\t\t\t\t<div class=\"nd-content_inner1\">
\t\t\t\t\t\t<h4 class=\"nd-title\"><span><a href=\"";
            // line 17
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></span></h4>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t";
            // line 19
            if (($this->getAttribute($context["product"], "quantity", array()) > 0)) {
                // line 20
                echo "\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"></span>
\t\t\t\t\t\t";
            } else {
                // line 22
                echo "            \t\t\t\t";
                if ((isset($context["out_of_stock_notify"]) ? $context["out_of_stock_notify"] : null)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["text_notify_button"]) ? $context["text_notify_button"] : null);
                    echo "\" onclick=\"notify_when_available('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"></span>
\t\t\t\t\t\t\t";
                }
                // line 25
                echo "            \t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-heart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 28
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-exchange fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"caption\">
      \t\t<h4 class=\"product-name\"><a href=\"";
            // line 38
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
\t\t\t";
            // line 39
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 40
                echo "\t\t\t<div class=\"rating\">
\t\t\t  ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "\t\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 43
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    } else {
                        // line 45
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    }
                    // line 47
                    echo "\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 50
            echo "\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 51
                echo "\t\t\t<p class=\"price\">
\t\t\t  ";
                // line 52
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 53
                    echo "\t\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t  ";
                } else {
                    // line 55
                    echo "\t\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>
              <p><span class=\"price-old\">";
                    // line 56
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span></p>
\t\t\t  ";
                }
                // line 58
                echo "\t\t\t</p>
\t\t\t";
            }
            // line 60
            echo "\t\t  </div>
\t\t</div>
\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t  
\t  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "\t\t  <div class=\"product-layout-col\">
\t\t   <div class=\"product-thumb transition\">
\t\t\t<div class=\"col-sm-4\">
\t\t\t  <div class=\"image\"><a href=\"";
            // line 69
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <div class=\"caption\">
\t\t\t\t<h4><a href=\"";
            // line 73
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
\t\t\t\t";
            // line 74
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 75
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t  ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 77
                    echo "\t\t\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 78
                        echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t  ";
                    } else {
                        // line 80
                        echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t  ";
                    }
                    // line 82
                    echo "\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 86
                echo "\t\t\t\t<p class=\"price\">
\t\t\t\t  ";
                // line 87
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 88
                    echo "\t\t\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t\t  ";
                } else {
                    // line 90
                    echo "\t\t\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t  ";
                }
                // line 92
                echo "\t\t\t\t  ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 93
                    echo "\t\t\t\t  <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t  ";
                }
                // line 95
                echo "\t\t\t\t</p>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t  </div>
\t\t\t </div>
\t\t   </div>
\t\t  </div>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t  
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__70ee387b0b4123f2341596099740d9fbbb8947db6b156046d0c95d28bb97b597";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 102,  286 => 97,  282 => 95,  274 => 93,  271 => 92,  263 => 90,  257 => 88,  255 => 87,  252 => 86,  249 => 85,  245 => 83,  239 => 82,  235 => 80,  231 => 78,  228 => 77,  224 => 76,  221 => 75,  219 => 74,  213 => 73,  200 => 69,  195 => 66,  191 => 65,  188 => 64,  179 => 60,  175 => 58,  170 => 56,  165 => 55,  159 => 53,  157 => 52,  154 => 51,  151 => 50,  147 => 48,  141 => 47,  137 => 45,  133 => 43,  130 => 42,  126 => 41,  123 => 40,  121 => 39,  115 => 38,  103 => 31,  95 => 28,  91 => 26,  88 => 25,  80 => 23,  77 => 22,  69 => 20,  67 => 19,  60 => 17,  48 => 12,  43 => 11,  37 => 9,  35 => 8,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* <div class="heading"><h3>{{ heading_title }}</h3><hr class="gradient-divider"></hr></div>*/
/* <div class="product-content">*/
/* 	<div class="row">*/
/* 	 {% for product in products %}*/
/* 	  <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/* 		<div class="product-thumb transition">*/
/* 		  <div class="nd-wrap nd-style-1">*/
/* 			{% if product.quantity <= 0 and out_of_stock_show %}*/
/*             	<span class='out_of_stock'>{{ out_of_stock }}</span>*/
/*         	{% endif %}*/
/* 			<center><a href="{{ product.href }}">*/
/* 			  <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 			</a></center>*/
/* 			<div class="nd-content">*/
/* 				<div class="nd-content_inner">*/
/* 					<div class="nd-content_inner1">*/
/* 						<h4 class="nd-title"><span><a href="{{ product.href }}">{{ product.name }}</a></span></h4>*/
/* 						<span class="nd-icon">*/
/* 						{% if product.quantity > 0 %}*/
/* 							<span class="fa fa-shopping-cart fa-fw" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"></span>*/
/* 						{% else %}*/
/*             				{% if out_of_stock_notify %}*/
/* 								<span class="fa fa-shopping-cart fa-fw" data-toggle="tooltip" title="{{ text_notify_button }}" onclick="notify_when_available('{{ product.product_id }}');"></span>*/
/* 							{% endif %}*/
/*             			{% endif %}*/
/* 						</span>*/
/* 						<span class="nd-icon">*/
/* 							<span class="fa fa-heart fa-fw" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"></span>*/
/* 						</span>*/
/* 						<span class="nd-icon">*/
/* 							<span class="fa fa-exchange fa-fw" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"></span>*/
/* 					</span>*/
/* 					</div>					*/
/* 				</div>				*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="caption">*/
/*       		<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 			{% if product.rating %}*/
/* 			<div class="rating">*/
/* 			  {% for i in 5 %}*/
/* 			  {% if product.rating < i %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% else %}*/
/* 			  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			  {% endif %}*/
/* 			  {% endfor %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			{% if product.price %}*/
/* 			<p class="price">*/
/* 			  {% if not product.special %}*/
/* 			  {{ product.price }}*/
/* 			  {% else %}*/
/* 			  <span class="price-new">{{ product.special }}</span>*/
/*               <p><span class="price-old">{{ product.price }}</span></p>*/
/* 			  {% endif %}*/
/* 			</p>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  {% endfor %}*/
/* 	  */
/* 	  {% for product in products %}*/
/* 		  <div class="product-layout-col">*/
/* 		   <div class="product-thumb transition">*/
/* 			<div class="col-sm-4">*/
/* 			  <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/* 			</div>*/
/* 			<div class="col-sm-8">*/
/* 			  <div class="caption">*/
/* 				<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 				{% if product.rating %}*/
/* 				<div class="rating">*/
/* 				  {% for i in 5 %}*/
/* 				  {% if product.rating < i %}*/
/* 				  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 				  {% else %}*/
/* 				  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 				  {% endif %}*/
/* 				  {% endfor %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				{% if product.price %}*/
/* 				<p class="price">*/
/* 				  {% if not product.special %}*/
/* 				  {{ product.price }}*/
/* 				  {% else %}*/
/* 				  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 				  {% endif %}*/
/* 				  {% if product.tax %}*/
/* 				  <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 				  {% endif %}*/
/* 				</p>*/
/* 				{% endif %}*/
/* 			  </div>*/
/* 			 </div>*/
/* 		   </div>*/
/* 		  </div>*/
/* 	  {% endfor %}*/
/* 	  */
/* 	</div>*/
/* </div>*/
/* */
