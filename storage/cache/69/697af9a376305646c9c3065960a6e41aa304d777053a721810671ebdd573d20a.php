<?php

/* __string_template__0a7f1c0fa31341822c403c3272334b1974aeb40b70533a48b33c54806c2ced84 */
class __TwigTemplate_ed10382e52a35fa01e07acdd3c2edcd7d14cfcc8a58ea844a4222b102dd06914 extends Twig_Template
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
<link href=\"catalog/view/theme/ardbeater/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/ardbeater/stylesheet/style.css\" rel=\"stylesheet\">
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
  <div id=\"notify_me\" class=\"modal fade\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 46
        echo (isset($context["notify_heading"]) ? $context["notify_heading"] : null);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <form id=\"notify_me\" onclick=\"return false;\">
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"product_id\">
            <div class=\"form-group\">
              <label>";
        // line 52
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" value=\"";
        // line 53
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"Name\">
            </div>
            <div class=\"form-group\">
              <label>";
        // line 56
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" value=\"";
        // line 57
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"E-Mail Address\">
            </div>
            <div class=\"form-group\">
              <button type=\"button\" id=\"submit\"  data-loading-text=\"";
        // line 60
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-paper-plane-o\"></i> ";
        echo (isset($context["button_notify_send"]) ? $context["button_notify_send"] : null);
        echo "</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<body>
<header class=\"container\">
  <div>
    <div class=\"row\" style=\"margin-top:20px; margin-bottom:15px\">
      <div class=\"col-sm-5\">
        <div id=\"logo\"><a href=\"";
        // line 72
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" alt=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"img-responsive\" /></a>
        </div>
      </div>
      <div class=\"col-sm-13\" style=\"text-align:center\">";
        // line 75
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
\t\t<div id=\"top-links\" class=\"nav\">
\t\t  <ul class=\"list-inline\">
\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 78
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" style=\"font-size:18px\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span> <span class=\"caret\" style=\"font-size:18px\"></span></a>
\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t";
        // line 80
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 81
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 82
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 83
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 84
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 85
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"";
            // line 88
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 90
        echo "\t\t\t  </ul>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 92
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\" style=\"font-size:18px\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
\t\t\t<li><a href=\"";
        // line 93
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\" style=\"font-size:18px\"></i> <span class=\"hidden-xs hidden-sm hidden-md\"></span></a></li>
\t\t  </ul>
\t\t</div>
    </div>
  </div>
</header>
";
        // line 99
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0a7f1c0fa31341822c403c3272334b1974aeb40b70533a48b33c54806c2ced84";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 99,  277 => 93,  271 => 92,  267 => 90,  260 => 88,  253 => 87,  246 => 85,  240 => 84,  234 => 83,  228 => 82,  221 => 81,  219 => 80,  212 => 78,  206 => 75,  194 => 72,  177 => 60,  171 => 57,  167 => 56,  161 => 53,  157 => 52,  148 => 46,  140 => 40,  132 => 38,  128 => 37,  117 => 35,  113 => 34,  110 => 33,  101 => 31,  97 => 30,  84 => 28,  80 => 27,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
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
/* <link href="catalog/view/theme/ardbeater/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/ardbeater/stylesheet/style.css" rel="stylesheet">*/
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
/*   <div id="notify_me" class="modal fade">*/
/*     <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*           <h4 class="modal-title"><i class="fa fa-info-circle"></i> {{notify_heading}}</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <form id="notify_me" onclick="return false;">*/
/*             <input type="hidden" name="product_id" value="" id="product_id">*/
/*             <div class="form-group">*/
/*               <label>{{entry_name}}</label>*/
/*               <input type="text" name="name" id="name" class="form-control" value="{{name}}" placeholder="Name">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label>{{entry_email}}</label>*/
/*               <input type="text" name="email" id="email" class="form-control" value="{{email}}" placeholder="E-Mail Address">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <button type="button" id="submit"  data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i> {{button_notify_send}}</button>*/
/*             </div>*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <body>*/
/* <header class="container">*/
/*   <div>*/
/*     <div class="row" style="margin-top:20px; margin-bottom:15px">*/
/*       <div class="col-sm-5">*/
/*         <div id="logo"><a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-13" style="text-align:center">{{ search }}</div>*/
/* 		<div id="top-links" class="nav">*/
/* 		  <ul class="list-inline">*/
/* 			<li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="font-size:18px"></i> <span class="hidden-xs hidden-sm hidden-md"></span> <span class="caret" style="font-size:18px"></span></a>*/
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
/* 			<li><a href="{{ wishlist }}" id="wishlist-total" data-toggle="tooltip" title="{{ text_wishlist }}"><i class="fa fa-heart" style="font-size:18px"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/* 			<li><a href="{{ shopping_cart }}" data-toggle="tooltip" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart" style="font-size:18px"></i> <span class="hidden-xs hidden-sm hidden-md"></span></a></li>*/
/* 		  </ul>*/
/* 		</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
