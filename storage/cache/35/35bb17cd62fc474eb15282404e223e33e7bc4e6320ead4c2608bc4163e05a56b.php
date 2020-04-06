<?php

/* extension/shipping/fee_ongkir.twig */
class __TwigTemplate_12c2a6522b7efb112a164759389c0ad52519db8ff633b1472930336fe2f9defb extends Twig_Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-apikey\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo (isset($context["help_tampilan_api_key"]) ? $context["help_tampilan_api_key"] : null);
        echo "\">";
        echo (isset($context["entry_api_key"]) ? $context["entry_api_key"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fee_ongkir_api_key\" value=\"";
        // line 31
        echo (isset($context["shipping_fee_ongkir_api_key"]) ? $context["shipping_fee_ongkir_api_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_key"]) ? $context["entry_api_key"] : null);
        echo "\" id=\"input-apikey\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-origin\">";
        // line 35
        echo (isset($context["entry_indo_origin"]) ? $context["entry_indo_origin"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fee_ongkir_origins\" id=\"input-origin\" class=\"form-control\">
                <option value=\"0\">";
        // line 38
        echo (isset($context["text_pilih_kota"]) ? $context["text_pilih_kota"] : null);
        echo "</option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["origins"]) ? $context["origins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asal"]) {
            // line 40
            echo "                ";
            if (($this->getAttribute($context["asal"], "city_id", array()) == (isset($context["shipping_fee_ongkir_origins"]) ? $context["shipping_fee_ongkir_origins"] : null))) {
                // line 41
                echo "                  ";
                if (($this->getAttribute($context["asal"], "type", array()) == "Kabupaten")) {
                    // line 42
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["asal"], "city_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["asal"], "city_name", array());
                    echo " - Kabupaten</option>
                  ";
                } else {
                    // line 44
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["asal"], "city_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["asal"], "city_name", array());
                    echo " - Kota</option>
                  ";
                }
                // line 46
                echo "                ";
            } else {
                // line 47
                echo "                  ";
                if (($this->getAttribute($context["asal"], "type", array()) == "Kabupaten")) {
                    // line 48
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["asal"], "city_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["asal"], "city_name", array());
                    echo " - Kabupaten</option>
                  ";
                } else {
                    // line 50
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["asal"], "city_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["asal"], "city_name", array());
                    echo " - Kota</option>
                  ";
                }
                // line 52
                echo "                ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 59
        echo (isset($context["entry_service"]) ? $context["entry_service"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 62
        $context["services"] = array(0 => "jne", 1 => "tiki", 2 => "pos");
        // line 63
        echo "\t\t\t\t        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 64
            echo "                <div class=\"checkbox\">
                  <label>
                  ";
            // line 66
            if (twig_in_filter($context["service"], (isset($context["shipping_fee_ongkir_services"]) ? $context["shipping_fee_ongkir_services"] : null))) {
                // line 67
                echo "                    <input type=\"checkbox\" name=\"shipping_fee_ongkir_services[]\" value=\"";
                echo $context["service"];
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t        ";
                // line 68
                if (($context["service"] == "jne")) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/jne.png\">
\t\t\t\t\t\t        ";
                } elseif ((                // line 70
$context["service"] == "tiki")) {
                    echo " 
\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/tiki.png\">
\t\t\t\t\t\t        ";
                } else {
                    // line 72
                    echo " 
\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/pos.png\">
\t\t\t\t\t\t        ";
                }
                // line 75
                echo "\t\t\t\t\t        ";
            } else {
                // line 76
                echo "                    <input type=\"checkbox\" name=\"shipping_fee_ongkir_services[]\" value=\"";
                echo $context["service"];
                echo "\" />
\t\t\t\t\t\t        ";
                // line 77
                if (($context["service"] == "jne")) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/jne.png\">
\t\t\t\t\t\t        ";
                } elseif ((                // line 79
$context["service"] == "tiki")) {
                    echo " 
\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/tiki.png\">
\t\t\t\t\t\t        ";
                } else {
                    // line 81
                    echo " 
\t\t\t\t\t\t\t\t    <img src=\"../image/catalog/shipping/rajaongkir/pos.png\">
\t\t\t\t\t\t        ";
                }
                // line 84
                echo "                  ";
            }
            // line 85
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </div>
              <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">Select All</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">Uncheck All</a></div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-free-status\">";
        // line 93
        echo (isset($context["entry_free_status"]) ? $context["entry_free_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fee_ongkir_free_status\" id=\"input-free-status\" class=\"form-control\">
                ";
        // line 96
        if ((isset($context["shipping_fee_ongkir_free_status"]) ? $context["shipping_fee_ongkir_free_status"] : null)) {
            // line 97
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 98
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 100
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 101
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 103
        echo "              </select>
            </div>
          </div>

\t\t      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 108
        echo (isset($context["entry_free_wilayah"]) ? $context["entry_free_wilayah"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 200px; overflow: auto;\">
\t\t\t\t        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wilayah_free_ongkir"]) ? $context["wilayah_free_ongkir"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_fee_ongkir_free"]) {
            // line 112
            echo "                <div class=\"checkbox\">
                  <label>
                  ";
            // line 114
            if (twig_in_filter($this->getAttribute($context["shipping_fee_ongkir_free"], "province_id", array()), (isset($context["shipping_fee_ongkir_free_wilayah"]) ? $context["shipping_fee_ongkir_free_wilayah"] : null))) {
                // line 115
                echo "                    <input type=\"checkbox\" name=\"shipping_fee_ongkir_free_wilayah[]\" value=\"";
                echo $this->getAttribute($context["shipping_fee_ongkir_free"], "province_id", array());
                echo "\" checked=\"checked\" /> &nbsp;";
                echo $this->getAttribute($context["shipping_fee_ongkir_free"], "province", array());
                echo "
\t\t\t\t\t        ";
            } else {
                // line 117
                echo "                    <input type=\"checkbox\" name=\"shipping_fee_ongkir_free_wilayah[]\" value=\"";
                echo $this->getAttribute($context["shipping_fee_ongkir_free"], "province_id", array());
                echo "\" /> &nbsp;";
                echo $this->getAttribute($context["shipping_fee_ongkir_free"], "province", array());
                echo "
                  ";
            }
            // line 119
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_fee_ongkir_free'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "              </div>
              <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">Select All</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">Uncheck All</a></div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 127
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fee_ongkir_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 130
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 132
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_fee_ongkir_tax_class_id"]) ? $context["shipping_fee_ongkir_tax_class_id"] : null))) {
                // line 133
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 135
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 137
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 142
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fee_ongkir_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 145
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 147
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_fee_ongkir_geo_zone_id"]) ? $context["shipping_fee_ongkir_geo_zone_id"] : null))) {
                // line 148
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 150
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 152
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 157
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fee_ongkir_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 160
        if ((isset($context["shipping_fee_ongkir_status"]) ? $context["shipping_fee_ongkir_status"] : null)) {
            // line 161
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 162
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 164
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 165
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 167
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 171
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fee_ongkir_sort_order\" value=\"";
        // line 173
        echo (isset($context["shipping_fee_ongkir_sort_order"]) ? $context["shipping_fee_ongkir_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 181
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/shipping/fee_ongkir.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 181,  472 => 173,  467 => 171,  461 => 167,  456 => 165,  451 => 164,  446 => 162,  441 => 161,  439 => 160,  433 => 157,  427 => 153,  421 => 152,  413 => 150,  405 => 148,  402 => 147,  398 => 146,  394 => 145,  388 => 142,  382 => 138,  376 => 137,  368 => 135,  360 => 133,  357 => 132,  353 => 131,  349 => 130,  343 => 127,  336 => 122,  328 => 119,  320 => 117,  312 => 115,  310 => 114,  306 => 112,  302 => 111,  296 => 108,  289 => 103,  284 => 101,  279 => 100,  274 => 98,  269 => 97,  267 => 96,  261 => 93,  254 => 88,  246 => 85,  243 => 84,  238 => 81,  232 => 79,  229 => 78,  227 => 77,  222 => 76,  219 => 75,  214 => 72,  208 => 70,  205 => 69,  203 => 68,  198 => 67,  196 => 66,  192 => 64,  187 => 63,  185 => 62,  179 => 59,  172 => 54,  166 => 53,  163 => 52,  155 => 50,  147 => 48,  144 => 47,  141 => 46,  133 => 44,  125 => 42,  122 => 41,  119 => 40,  115 => 39,  111 => 38,  105 => 35,  96 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-apikey"><span data-toggle="tooltip" title="{{ help_tampilan_api_key }}">{{ entry_api_key }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fee_ongkir_api_key" value="{{ shipping_fee_ongkir_api_key }}" placeholder="{{ entry_api_key }}" id="input-apikey" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-origin">{{ entry_indo_origin }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fee_ongkir_origins" id="input-origin" class="form-control">*/
/*                 <option value="0">{{ text_pilih_kota }}</option>*/
/*                 {% for asal in origins %}*/
/*                 {% if asal.city_id == shipping_fee_ongkir_origins %}*/
/*                   {% if asal.type == 'Kabupaten' %}*/
/*                   <option value="{{ asal.city_id }}" selected="selected">{{ asal.city_name }} - Kabupaten</option>*/
/*                   {% else %}*/
/*                   <option value="{{ asal.city_id }}" selected="selected">{{ asal.city_name }} - Kota</option>*/
/*                   {% endif %}*/
/*                 {% else %}*/
/*                   {% if asal.type == 'Kabupaten' %}*/
/*                   <option value="{{ asal.city_id }}">{{ asal.city_name }} - Kabupaten</option>*/
/*                   {% else %}*/
/*                   <option value="{{ asal.city_id }}">{{ asal.city_name }} - Kota</option>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 		  */
/* 		      <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_service }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% set services = ["jne", "tiki", "pos"] %}*/
/* 				        {% for service in services %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                   {% if service in shipping_fee_ongkir_services %}*/
/*                     <input type="checkbox" name="shipping_fee_ongkir_services[]" value="{{ service }}" checked="checked" />*/
/* 						        {% if service == "jne" %}*/
/* 								    <img src="../image/catalog/shipping/rajaongkir/jne.png">*/
/* 						        {% elseif service == "tiki" %} */
/* 								    <img src="../image/catalog/shipping/rajaongkir/tiki.png">*/
/* 						        {% else %} */
/* 								    <img src="../image/catalog/shipping/rajaongkir/pos.png">*/
/* 						        {% endif %}*/
/* 					        {% else %}*/
/*                     <input type="checkbox" name="shipping_fee_ongkir_services[]" value="{{ service }}" />*/
/* 						        {% if service == "jne" %}*/
/* 								    <img src="../image/catalog/shipping/rajaongkir/jne.png">*/
/* 						        {% elseif service == "tiki" %} */
/* 								    <img src="../image/catalog/shipping/rajaongkir/tiki.png">*/
/* 						        {% else %} */
/* 								    <img src="../image/catalog/shipping/rajaongkir/pos.png">*/
/* 						        {% endif %}*/
/*                   {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">Select All</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">Uncheck All</a></div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-free-status">{{ entry_free_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fee_ongkir_free_status" id="input-free-status" class="form-control">*/
/*                 {% if shipping_fee_ongkir_free_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* */
/* 		      <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_free_wilayah }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 200px; overflow: auto;">*/
/* 				        {% for shipping_fee_ongkir_free in wilayah_free_ongkir %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                   {% if shipping_fee_ongkir_free.province_id in shipping_fee_ongkir_free_wilayah %}*/
/*                     <input type="checkbox" name="shipping_fee_ongkir_free_wilayah[]" value="{{ shipping_fee_ongkir_free.province_id }}" checked="checked" /> &nbsp;{{ shipping_fee_ongkir_free.province }}*/
/* 					        {% else %}*/
/*                     <input type="checkbox" name="shipping_fee_ongkir_free_wilayah[]" value="{{ shipping_fee_ongkir_free.province_id }}" /> &nbsp;{{ shipping_fee_ongkir_free.province }}*/
/*                   {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">Select All</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">Uncheck All</a></div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fee_ongkir_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_fee_ongkir_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fee_ongkir_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_fee_ongkir_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fee_ongkir_status" id="input-status" class="form-control">*/
/*                 {% if shipping_fee_ongkir_status %}*/
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
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_fee_ongkir_sort_order" value="{{ shipping_fee_ongkir_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
