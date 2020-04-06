<?php

/* __string_template__4fcf7f404726127b6cb2963687911a48b7199b35512c540c1fb499ef3cb9a7a9 */
class __TwigTemplate_e16f92516bc8d407bd55dc8922a6433a88c09b3aac771da59fb73ae1f9120bae extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/style.css\" rel=\"stylesheet\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
    <div id=\"notify_when_available\" class=\"modal fade\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">";
        // line 46
        echo (isset($context["notify_heading"]) ? $context["notify_heading"] : null);
        echo "</h4>
          </div>
          <div class=\"modal-body\">
            <form id=\"notify_when_available\" onclick=\"return false;\">
              <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"product_id\">
              <div class=\"form-group\">
                <label>";
        // line 52
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" value=\"";
        // line 53
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\">
              </div>
              <div class=\"form-group\">
                <label>";
        // line 56
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" value=\"";
        // line 57
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">
              </div>
              <div class=\"form-group\">
                <button type=\"button\" id=\"submit\"  data-loading-text=\"";
        // line 60
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_notify_send"]) ? $context["button_notify_send"] : null);
        echo "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<body>
<nav id=\"top\">
  <div class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"top-links\" class=\"nav\">
\t\t  <ul class=\"list-inline\">
\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 73
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span> <span class=\"caret\"></span></a>
\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t";
        // line 75
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 76
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 77
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 78
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 79
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 80
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 83
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t  </ul>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 87
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
\t\t\t<li><a href=\"";
        // line 88
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
\t\t  </ul>
\t\t</div>
\t  </div>
\t</div>
  <div class=\"container\">
   <hr class=\"gradient-divider\"></hr>
  </div>
</nav>
<header class=\"container\">
  <div style=\"position: relative;\">
    <div class=\"row\">
      <div class=\"col-sm-5\">
        <div id=\"logo\">";
        // line 101
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 102
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 103
        echo "</div>
      </div>
    </div>
  </div>
</header>
\t  <div class=\"col-sm-11\">";
        // line 108
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
";
        // line 109
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__4fcf7f404726127b6cb2963687911a48b7199b35512c540c1fb499ef3cb9a7a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 109,  305 => 108,  298 => 103,  290 => 102,  278 => 101,  260 => 88,  254 => 87,  250 => 85,  243 => 83,  236 => 82,  229 => 80,  223 => 79,  217 => 78,  211 => 77,  204 => 76,  202 => 75,  195 => 73,  177 => 60,  171 => 57,  167 => 56,  161 => 53,  157 => 52,  148 => 46,  140 => 40,  132 => 38,  128 => 37,  117 => 35,  113 => 34,  110 => 33,  101 => 31,  97 => 30,  84 => 28,  80 => 27,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/style.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/*     <div id="notify_when_available" class="modal fade">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*             <h4 class="modal-title">{{notify_heading}}</h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             <form id="notify_when_available" onclick="return false;">*/
/*               <input type="hidden" name="product_id" value="" id="product_id">*/
/*               <div class="form-group">*/
/*                 <label>{{entry_name}}</label>*/
/*                 <input type="text" name="name" id="name" class="form-control" value="{{name}}">*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label>{{entry_email}}</label>*/
/*                 <input type="text" name="email" id="email" class="form-control" value="{{email}}">*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <button type="button" id="submit"  data-loading-text="{{ text_loading }}" class="btn btn-primary">{{button_notify_send}}</button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">*/
/* 	<div class="row">*/
/* 		<div id="top-links" class="nav">*/
/* 		  <ul class="list-inline">*/
/* 			<li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"></span> <span class="caret"></span></a>*/
/* 			  <ul class="dropdown-menu">*/
/* 				{% if logged %}*/
/* 				<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 				<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 				<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 				<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 				<li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/* 				{% else %}*/
/* 				<li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* 				<li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* 				{% endif %}*/
/* 			  </ul>*/
/* 			</li>*/
/* 			<li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/* 			<li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/* 		  </ul>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/*   <div class="container">*/
/*    <hr class="gradient-divider"></hr>*/
/*   </div>*/
/* </nav>*/
/* <header class="container">*/
/*   <div style="position: relative;">*/
/*     <div class="row">*/
/*       <div class="col-sm-5">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* 	  <div class="col-sm-11">{{ search }}</div>*/
/* {{ menu }}*/
/* */
