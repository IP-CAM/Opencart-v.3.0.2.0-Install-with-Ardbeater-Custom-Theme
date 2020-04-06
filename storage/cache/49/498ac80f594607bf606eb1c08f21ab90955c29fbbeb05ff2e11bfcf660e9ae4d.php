<?php

/* __string_template__9edc6f6f4af9ceb9f95a63bf65f61fce93bb8a0659feb040df69eafa615e7185 */
class __TwigTemplate_bbbb80b19356067174a75fb79f25349fdb414159a505348593d605d404e3dd7e extends Twig_Template
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
  <div class=\"row\">
  \t<div id=\"owl-featured\" class=\"owl-carousel\">
\t ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "\t <div class=\"item\">
\t  <div class=\"col-xs-12\">
\t  \t<div class=\"product-thumb transition\">
\t\t  <div class=\"nd-wrap nd-style-1\">
\t\t\t";
            // line 10
            if ((($this->getAttribute($context["product"], "quantity", array()) <= 0) && (isset($context["out_of_stock_show"]) ? $context["out_of_stock_show"] : null))) {
                // line 11
                echo "  \t\t\t\t<span class=\"ribbon3\">";
                echo (isset($context["out_of_stock"]) ? $context["out_of_stock"] : null);
                echo "</span>
        \t";
            }
            // line 13
            echo "\t\t\t<center><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
\t\t\t  <img src=\"";
            // line 14
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
            // line 19
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></span></h4>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t";
            // line 21
            if (($this->getAttribute($context["product"], "quantity", array()) > 0)) {
                // line 22
                echo "\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"></span>
\t\t\t\t\t\t";
            } else {
                // line 24
                echo "            \t\t\t\t";
                if ((isset($context["out_of_stock_notify"]) ? $context["out_of_stock_notify"] : null)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["text_notify_button"]) ? $context["text_notify_button"] : null);
                    echo "\" onclick=\"notify_me('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"></span>
\t\t\t\t\t\t\t";
                }
                // line 27
                echo "            \t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-heart fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 30
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nd-icon\">
\t\t\t\t\t\t\t<span class=\"fa fa-exchange fa-fw\" data-toggle=\"tooltip\" title=\"";
            // line 33
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
            // line 40
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
\t\t\t";
            // line 41
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 42
                echo "\t\t\t<div class=\"rating\">
\t\t\t  ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "\t\t\t  ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 45
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    } else {
                        // line 47
                        echo "\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                    }
                    // line 49
                    echo "\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 52
            echo "\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 53
                echo "\t\t\t<p class=\"price\">
\t\t\t  ";
                // line 54
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 55
                    echo "\t\t\t  ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t  ";
                } else {
                    // line 57
                    echo "\t\t\t  <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>
              <p><span class=\"price-old\">";
                    // line 58
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span></p>
\t\t\t  ";
                }
                // line 60
                echo "\t\t\t</p>
\t\t\t";
            }
            // line 62
            echo "\t\t  </div>
\t\t</div>
  \t  </div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t  
\t</div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#owl-featured').owlCarousel({ 
\t  items: 4,
\t  autoplay: true,
      autoplayTimeout: 2000,
\t  autoplayHoverPause: true,
\t  loop: true,
\t  nav: true,
      dots: false,
\t  navText: ['<span class=\"fa-stack\"><i style=\"font-size:35px\" class=\"fa fa-chevron-left fa-stack-1x\"></i></span>','<span class=\"fa-stack\"><i style=\"font-size:35px\" class=\"fa fa-chevron-right fa-stack-1x\"></i></span>'],
});
</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__9edc6f6f4af9ceb9f95a63bf65f61fce93bb8a0659feb040df69eafa615e7185";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  181 => 62,  177 => 60,  172 => 58,  167 => 57,  161 => 55,  159 => 54,  156 => 53,  153 => 52,  149 => 50,  143 => 49,  139 => 47,  135 => 45,  132 => 44,  128 => 43,  125 => 42,  123 => 41,  117 => 40,  105 => 33,  97 => 30,  93 => 28,  90 => 27,  82 => 25,  79 => 24,  71 => 22,  69 => 21,  62 => 19,  50 => 14,  45 => 13,  39 => 11,  37 => 10,  31 => 6,  27 => 5,  19 => 1,);
    }
}
/* <div class="heading"><h3>{{ heading_title }}</h3><hr class="gradient-divider"></hr></div>*/
/* <div class="product-content">*/
/*   <div class="row">*/
/*   	<div id="owl-featured" class="owl-carousel">*/
/* 	 {% for product in products %}*/
/* 	 <div class="item">*/
/* 	  <div class="col-xs-12">*/
/* 	  	<div class="product-thumb transition">*/
/* 		  <div class="nd-wrap nd-style-1">*/
/* 			{% if product.quantity <= 0 and out_of_stock_show %}*/
/*   				<span class="ribbon3">{{ out_of_stock }}</span>*/
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
/* 								<span class="fa fa-shopping-cart fa-fw" data-toggle="tooltip" title="{{ text_notify_button }}" onclick="notify_me('{{ product.product_id }}');"></span>*/
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
/*   	  </div>*/
/* 	</div>*/
/* 	{% endfor %}*/
/* 	  */
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#owl-featured').owlCarousel({ */
/* 	  items: 4,*/
/* 	  autoplay: true,*/
/*       autoplayTimeout: 2000,*/
/* 	  autoplayHoverPause: true,*/
/* 	  loop: true,*/
/* 	  nav: true,*/
/*       dots: false,*/
/* 	  navText: ['<span class="fa-stack"><i style="font-size:35px" class="fa fa-chevron-left fa-stack-1x"></i></span>','<span class="fa-stack"><i style="font-size:35px" class="fa fa-chevron-right fa-stack-1x"></i></span>'],*/
/* });*/
/* </script>*/
