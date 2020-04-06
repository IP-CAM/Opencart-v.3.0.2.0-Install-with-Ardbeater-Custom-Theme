<?php

/* extension/module/notify/notify_me.twig */
class __TwigTemplate_81b9e0220cc199d7ab2ee927ff8f5dc3afc6dc995bb579fd449de42d214609e9 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3><span class=\"badge badge-danger pull-right\" style=\"font-size:10px;font-weight:normal !important;\">";
        echo (isset($context["new_version_notification"]) ? $context["new_version_notification"] : null);
        echo "</span>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab_notify_product\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_notify_product"]) ? $context["tab_notify_product"] : null);
        echo "</a></li>
            <li><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-email\" id=\"tab3\"  data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_email"]) ? $context["tab_email"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">

    <div class=\"tab-pane active\" id=\"tab_notify_product\">
      <div class=\"row\">
       <div class=\"col-lg-12\" id=\"product_body\"></div>
      </div>
    </div>

    <div class=\"tab-pane\" id=\"tab-general\">
      <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"module_notify_me_status\">";
        // line 48
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"module_notify_me_status\" id=\"module_notify_me_status\" class=\"form-control\">
            ";
        // line 51
        if ((isset($context["module_notify_me_status"]) ? $context["module_notify_me_status"] : null)) {
            // line 52
            echo "              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
              <option value=\"0\">";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
            ";
        } else {
            // line 55
            echo "              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 56
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
            ";
        }
        // line 58
        echo "          </select>
        </div>
      </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"module_notify_me_stock\">";
        // line 62
        echo (isset($context["entry_out_of_stock"]) ? $context["entry_out_of_stock"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_notify_me_stock\" id=\"module_notify_me_stock\" class=\"form-control\">
                 ";
        // line 65
        if ((isset($context["module_notify_me_stock"]) ? $context["module_notify_me_stock"] : null)) {
            // line 66
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 67
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 69
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 70
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 72
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"module_notify_me_notify\">";
        // line 76
        echo (isset($context["entry_notify_button"]) ? $context["entry_notify_button"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_notify_me_notify\" id=\"module_notify_me_notify\" class=\"form-control\">
                 ";
        // line 79
        if ((isset($context["module_notify_me_notify"]) ? $context["module_notify_me_notify"] : null)) {
            // line 80
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 81
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 83
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 84
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 86
        echo "              </select>
            </div>
          </div>
        </div>
          
          <div class=\"tab-pane\" id=\"tab-email\">
            <ul class=\"nav nav-tabs\" id=\"mobule_nwa\">
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            echo "                <li><a href=\"#notify_language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </ul>
            <div class=\"tab-content\">
              ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 99
            echo "              <div class=\"tab-pane\" id=\"notify_language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"module_notify_me_email_subject";
            // line 101
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                <span data-toggle=\"tooltip\" title=\"";
            // line 102
            echo (isset($context["help_email_subject"]) ? $context["help_email_subject"] : null);
            echo "\">";
            echo (isset($context["entry_email_subject"]) ? $context["entry_email_subject"] : null);
            echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_notify_me_email_subject[";
            // line 104
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][subject]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_notify_me_email_subject"]) ? $context["module_notify_me_email_subject"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "subject", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_wallet_email_subject"]) ? $context["entry_wallet_email_subject"] : null);
            echo "\" id=\"module_notify_me_email_subject";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                ";
            // line 105
            if ($this->getAttribute((isset($context["error_module_notify_me_email_subject"]) ? $context["error_module_notify_me_email_subject"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 106
                echo "                  <span class=\"error text-danger\">";
                echo $this->getAttribute((isset($context["error_module_notify_me_email_subject"]) ? $context["error_module_notify_me_email_subject"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>
                ";
            }
            // line 108
            echo "              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"module_notify_me_email_body";
            // line 112
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_email_body"]) ? $context["help_email_body"] : null);
            echo "\">";
            echo (isset($context["entry_email_body"]) ? $context["entry_email_body"] : null);
            echo "</span>
              <span class=\"pre\"><br><br>
                Below are the cheat code of dynamic value
                <p>{name} - Nama<br>
                {product_url} - URL Produk<br>
                {product_name} - Nama Produk<br></p>
              </span>
              </label>
            <div class=\"col-sm-10\">
              <textarea name=\"module_notify_me_email_body[";
            // line 121
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][body]\" id=\"module_notify_me_email_body";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\" >";
            echo $this->getAttribute($this->getAttribute((isset($context["module_notify_me_email_body"]) ? $context["module_notify_me_email_body"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "body", array());
            echo "</textarea>
              ";
            // line 122
            if ($this->getAttribute((isset($context["error_module_notify_me_email_body"]) ? $context["error_module_notify_me_email_body"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 123
                echo "                <span class=\"error text-danger\">";
                echo $this->getAttribute((isset($context["error_module_notify_me_email_body"]) ? $context["error_module_notify_me_email_body"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>
              ";
            }
            // line 125
            echo "            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "      </div>
    </div>
    </div>
    </form>
    </div>
  </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#tab_notify_product').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#product_body').load(this.href);
  });

  \$('#product_body').load('index.php?route=extension/module/notify_me/products&user_token=";
        // line 144
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
  //--></script> 
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 

<script type=\"text/javascript\"><!--
\$('#mobule_nwa a:first').tab('show');
\$('#mobule_nwa_admin a:first').tab('show');
//--></script>

";
        // line 161
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/notify/notify_me.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 161,  360 => 144,  343 => 129,  334 => 125,  328 => 123,  326 => 122,  316 => 121,  300 => 112,  294 => 108,  288 => 106,  286 => 105,  276 => 104,  269 => 102,  265 => 101,  259 => 99,  255 => 98,  251 => 96,  234 => 94,  230 => 93,  221 => 86,  216 => 84,  211 => 83,  206 => 81,  201 => 80,  199 => 79,  193 => 76,  187 => 72,  182 => 70,  177 => 69,  172 => 67,  167 => 66,  165 => 65,  159 => 62,  153 => 58,  148 => 56,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  125 => 48,  110 => 36,  106 => 35,  102 => 34,  97 => 32,  89 => 29,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3><span class="badge badge-danger pull-right" style="font-size:10px;font-weight:normal !important;">{{new_version_notification}}</span>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab_notify_product" data-toggle="tab">{{tab_notify_product}}</a></li>*/
/*             <li><a href="#tab-general" data-toggle="tab">{{tab_general}}</a></li>*/
/*             <li><a href="#tab-email" id="tab3"  data-toggle="tab">{{tab_email}}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/* */
/*     <div class="tab-pane active" id="tab_notify_product">*/
/*       <div class="row">*/
/*        <div class="col-lg-12" id="product_body"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="tab-pane" id="tab-general">*/
/*       <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="module_notify_me_status">{{ entry_status }}</label>*/
/*         <div class="col-sm-10">*/
/*           <select name="module_notify_me_status" id="module_notify_me_status" class="form-control">*/
/*             {% if module_notify_me_status %}*/
/*               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*               <option value="0">{{ text_disabled }}</option>*/
/*             {% else %}*/
/*               <option value="1">{{ text_enabled }}</option>*/
/*               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*             {% endif %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="module_notify_me_stock">{{ entry_out_of_stock }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_notify_me_stock" id="module_notify_me_stock" class="form-control">*/
/*                  {% if module_notify_me_stock %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="module_notify_me_notify">{{ entry_notify_button }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_notify_me_notify" id="module_notify_me_notify" class="form-control">*/
/*                  {% if module_notify_me_notify %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*           */
/*           <div class="tab-pane" id="tab-email">*/
/*             <ul class="nav nav-tabs" id="mobule_nwa">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#notify_language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*               {% for language in languages %}*/
/*               <div class="tab-pane" id="notify_language{{ language.language_id }}">*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="module_notify_me_email_subject{{language.language_id}}">*/
/*                 <span data-toggle="tooltip" title="{{help_email_subject}}">{{entry_email_subject}}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="module_notify_me_email_subject[{{language.language_id}}][subject]" value="{{module_notify_me_email_subject[language.language_id].subject}}" placeholder="{{entry_wallet_email_subject}}" id="module_notify_me_email_subject{{language.language_id}}" class="form-control" />*/
/*                 {% if error_module_notify_me_email_subject[language.language_id] %}*/
/*                   <span class="error text-danger">{{error_module_notify_me_email_subject[language.language_id]}}</span>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="module_notify_me_email_body{{language.language_id}}"><span data-toggle="tooltip" title="{{help_email_body}}">{{entry_email_body}}</span>*/
/*               <span class="pre"><br><br>*/
/*                 Below are the cheat code of dynamic value*/
/*                 <p>{name} - Nama<br>*/
/*                 {product_url} - URL Produk<br>*/
/*                 {product_name} - Nama Produk<br></p>*/
/*               </span>*/
/*               </label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="module_notify_me_email_body[{{language.language_id}}][body]" id="module_notify_me_email_body{{language.language_id}}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control" >{{module_notify_me_email_body[language.language_id].body}}</textarea>*/
/*               {% if error_module_notify_me_email_body[language.language_id] %}*/
/*                 <span class="error text-danger">{{error_module_notify_me_email_body[language.language_id]}}</span>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*     </form>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#tab_notify_product').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#product_body').load(this.href);*/
/*   });*/
/* */
/*   $('#product_body').load('index.php?route=extension/module/notify_me/products&user_token={{ user_token }}');*/
/*   //--></script> */
/*     <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $('#mobule_nwa a:first').tab('show');*/
/* $('#mobule_nwa_admin a:first').tab('show');*/
/* //--></script>*/
/* */
/* {{ footer }}*/
