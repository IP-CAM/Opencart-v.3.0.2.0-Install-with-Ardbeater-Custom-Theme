<?php

/* extension/payment/snap.twig */
class __TwigTemplate_6a6e4f8a7f019339b6acc1b84f38d53a8dcda75f653c311214dd4d4a77d0457a extends Twig_Template
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
        <button type=\"submit\" form=\"form-midtrans-snap\" data-toggle=\"tooltip\" title=\"";
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
        echo "       </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-midtrans-snap\" class=\"form-horizontal\">
          <div class=\"form-group required sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-display-name\">";
        // line 29
        echo (isset($context["entry_display_name"]) ? $context["entry_display_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_snap_display_name\" value=\"";
        // line 31
        echo (isset($context["payment_snap_display_name"]) ? $context["payment_snap_display_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_display_name"]) ? $context["payment_snap_display_name"] : null);
        echo "\" id=\"input-display-name\" class=\"form-control\"/>
              ";
        // line 32
        if ((isset($context["error_display_name"]) ? $context["error_display_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_display_name"]) ? $context["error_display_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant-id\">";
        // line 38
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_snap_merchant_id\" value=\"";
        // line 40
        echo (isset($context["payment_snap_merchant_id"]) ? $context["payment_snap_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_merchant_id"]) ? $context["payment_snap_merchant_id"] : null);
        echo "\" id=\"input-merchant-id\" class=\"form-control\"/>
              ";
        // line 41
        if ((isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 47
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" id=\"input-mode\" name=\"payment_snap_environment\">
                ";
        // line 50
        if (((isset($context["payment_snap_environment"]) ? $context["payment_snap_environment"] : null) == "sandbox")) {
            // line 51
            echo "                <option selected=\"selected\" value=\"sandbox\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                <option value=\"sandbox\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
                ";
        }
        // line 55
        echo "                ";
        if (((isset($context["payment_snap_environment"]) ? $context["payment_snap_environment"] : null) == "production")) {
            // line 56
            echo "                <option selected=\"selected\" value=\"production\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        } else {
            // line 58
            echo "                <option value=\"production\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                ";
        }
        // line 60
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-client-key\">";
        // line 64
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_snap_client_key\" value=\"";
        // line 66
        echo (isset($context["payment_snap_client_key"]) ? $context["payment_snap_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_client_key"]) ? $context["payment_snap_client_key"] : null);
        echo "\" id=\"input-client-key\" class=\"form-control\"/>
              ";
        // line 67
        if ((isset($context["error_client_key"]) ? $context["error_client_key"] : null)) {
            // line 68
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_client_key"]) ? $context["error_client_key"] : null);
            echo "</div>
              ";
        }
        // line 70
        echo "            </div>
          </div>
          <div class=\"form-group required sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-server-key\">";
        // line 73
        echo (isset($context["entry_server_key"]) ? $context["entry_server_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_snap_server_key\" value=\"";
        // line 75
        echo (isset($context["payment_snap_server_key"]) ? $context["payment_snap_server_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_server_key"]) ? $context["payment_snap_server_key"] : null);
        echo "\" id=\"input-server-key\" class=\"form-control\"/>
              ";
        // line 76
        if ((isset($context["error_server_key"]) ? $context["error_server_key"] : null)) {
            // line 77
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_server_key"]) ? $context["error_server_key"] : null);
            echo "</div>
              ";
        }
        // line 79
        echo "            </div>
          </div>
          <div class=\"form-group sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-save-card\"><span data-toggle=\"tooltip\" title=\"";
        // line 82
        echo (isset($context["help_savecard"]) ? $context["help_savecard"] : null);
        echo "\">";
        echo (isset($context["entry_savecard"]) ? $context["entry_savecard"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" id=\"input-save-card\" name=\"payment_snap_oneclick\">
                ";
        // line 85
        if ((isset($context["payment_snap_oneclick"]) ? $context["payment_snap_oneclick"] : null)) {
            // line 86
            echo "                <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 87
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 89
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option selected=\"selected\" value=\"0\">";
            // line 90
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 92
        echo "              </select>
            </div>
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10\"><span>Leave it disabled if you are not sure!</span></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-redirect\"><span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["help_redirect"]) ? $context["help_redirect"] : null);
        echo "\">";
        echo (isset($context["entry_redirect"]) ? $context["entry_redirect"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" id=\"input-redirect\" name=\"payment_snap_redirect\">
                ";
        // line 101
        if ((isset($context["payment_snap_redirect"]) ? $context["payment_snap_redirect"] : null)) {
            // line 102
            echo "                <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 103
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 105
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option selected=\"selected\" value=\"0\">";
            // line 106
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 108
        echo "              </select>
            </div>
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10\"> <span>Leave it disabled for default!</span></div>
          </div>
          <div class=\"form-group sensitive\">
            <label class=\"col-sm-2 control-label\" for=\"input-expiry\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo (isset($context["help_expiry"]) ? $context["help_expiry"] : null);
        echo "\">";
        echo (isset($context["entry_expiry"]) ? $context["entry_expiry"] : null);
        echo "</span></label>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"payment_snap_expiry_duration\" placeholder=\"filled with number\" value=\"";
        // line 116
        echo (isset($context["payment_snap_expiry_duration"]) ? $context["payment_snap_expiry_duration"] : null);
        echo "\" id=\"input-expiry\" class=\"form-control\"/>
              <span>Leave it blank for default.</span>
            </div>
            <div class=\"col-sm-3\">
              <select class=\"form-control\" id=\"input-expiry\" name=\"payment_snap_expiry_unit\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiry"]) ? $context["expiry"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["expire"]) {
            // line 122
            echo "                  ";
            if (($this->getAttribute($context["expire"], "unit", array()) == (isset($context["payment_snap_expiry_unit"]) ? $context["payment_snap_expiry_unit"] : null))) {
                // line 123
                echo "                  <option value=\"";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "</option>
                  ";
            } else {
                // line 125
                echo "                  <option value=\"";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "\">";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "</option>
                  ";
            }
            // line 127
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo (isset($context["help_custom_field"]) ? $context["help_custom_field"] : null);
        echo "\">";
        echo (isset($context["entry_custom_field"]) ? $context["entry_custom_field"] : null);
        echo "</span></label>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"payment_snap_custom_field1\" value=\"";
        // line 134
        echo (isset($context["payment_snap_custom_field1"]) ? $context["payment_snap_custom_field1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_custom_field1"]) ? $context["payment_snap_custom_field1"] : null);
        echo "\" class=\"form-control\"/>
            </div>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"payment_snap_custom_field2\" value=\"";
        // line 137
        echo (isset($context["payment_snap_custom_field2"]) ? $context["payment_snap_custom_field2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_custom_field2"]) ? $context["payment_snap_custom_field2"] : null);
        echo "\" class=\"form-control\"/>
            </div>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"payment_snap_custom_field3\" value=\"";
        // line 140
        echo (isset($context["payment_snap_custom_field3"]) ? $context["payment_snap_custom_field3"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_custom_field3"]) ? $context["payment_snap_custom_field3"] : null);
        echo "\" class=\"form-control\"/>
            </div>
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10\"><span>Leave it blank if you are not sure!</span></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-mixpanel\">";
        // line 146
        echo (isset($context["entry_mixpanel"]) ? $context["entry_mixpanel"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" id=\"input-mixpanel\" name=\"payment_snap_mixpanel\">
                ";
        // line 149
        if ((isset($context["payment_snap_mixpanel"]) ? $context["payment_snap_mixpanel"] : null)) {
            // line 150
            echo "                <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 151
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 153
            echo "                <option value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                <option selected=\"selected\" value=\"0\">";
            // line 154
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 156
        echo "              </select>
              <span>Leave it enabled for default.</span>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-success-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo (isset($context["help_success_mapping"]) ? $context["help_success_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_success_mapping"]) ? $context["entry_success_mapping"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" name=\"payment_snap_status_success\">
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 165
            echo "                <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snap_status_success"]) ? $context["payment_snap_status_success"] : null))) {
                echo " selected ";
            }
            echo " value=\"";
            echo $this->getAttribute($context["order_status"], "order_status_id", array());
            echo "\">";
            echo $this->getAttribute($context["order_status"], "name", array());
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-pending-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 171
        echo (isset($context["help_pending_mapping"]) ? $context["help_pending_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_pending_mapping"]) ? $context["entry_pending_mapping"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" name=\"payment_snap_status_pending\">
                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 175
            echo "                <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snap_status_pending"]) ? $context["payment_snap_status_pending"] : null))) {
                echo " selected ";
            }
            echo " value=\"";
            echo $this->getAttribute($context["order_status"], "order_status_id", array());
            echo "\">";
            echo $this->getAttribute($context["order_status"], "name", array());
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-failure-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 181
        echo (isset($context["help_failure_mapping"]) ? $context["help_failure_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_failure_mapping"]) ? $context["entry_failure_mapping"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" name=\"payment_snap_status_failure\">
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 185
            echo "                <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snap_status_failure"]) ? $context["payment_snap_status_failure"] : null))) {
                echo " selected ";
            }
            echo " value=\"";
            echo $this->getAttribute($context["order_status"], "order_status_id", array());
            echo "\">";
            echo $this->getAttribute($context["order_status"], "name", array());
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 191
        echo (isset($context["entry_currency_conversion"]) ? $context["entry_currency_conversion"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_snap_currency_conversion\" value=\"";
        // line 193
        echo (isset($context["payment_snap_currency_conversion"]) ? $context["payment_snap_currency_conversion"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_currency_conversion"]) ? $context["payment_snap_currency_conversion"] : null);
        echo "\" class=\"form-control\"/>
              <span>Set to 1 if your default currency is IDR.</span>
              ";
        // line 195
        if ((isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null)) {
            // line 196
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null);
            echo "</div>
              ";
        }
        // line 198
        echo "            </div>                        
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 201
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" name=\"payment_snap_geo_zone_id\">
                <option value=\"0\">";
        // line 204
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 206
            echo "                  ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_snap_geo_zone_id"]) ? $context["payment_snap_geo_zone_id"] : null))) {
                // line 207
                echo "                  <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 209
                echo "                  <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                  ";
            }
            // line 211
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 216
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"form-control\" id=\"input-status\" name=\"payment_snap_status\">
                ";
        // line 219
        if ((isset($context["payment_snap_status"]) ? $context["payment_snap_status"] : null)) {
            // line 220
            echo "                <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 221
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 223
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option selected=\"selected\" value=\"0\">";
            // line 224
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 226
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 230
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input size=\"1\" type=\"text\" name=\"payment_snap_sort_order\" value=\"";
        // line 232
        echo (isset($context["payment_snap_sort_order"]) ? $context["payment_snap_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snap_sort_order"]) ? $context["payment_snap_sort_order"] : null);
        echo "\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 240
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/snap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 240,  629 => 232,  624 => 230,  618 => 226,  613 => 224,  608 => 223,  603 => 221,  598 => 220,  596 => 219,  590 => 216,  584 => 212,  578 => 211,  570 => 209,  562 => 207,  559 => 206,  555 => 205,  551 => 204,  545 => 201,  540 => 198,  534 => 196,  532 => 195,  525 => 193,  520 => 191,  514 => 187,  499 => 185,  495 => 184,  487 => 181,  481 => 177,  466 => 175,  462 => 174,  454 => 171,  448 => 167,  433 => 165,  429 => 164,  421 => 161,  414 => 156,  409 => 154,  404 => 153,  399 => 151,  394 => 150,  392 => 149,  386 => 146,  375 => 140,  367 => 137,  359 => 134,  352 => 132,  346 => 128,  340 => 127,  332 => 125,  324 => 123,  321 => 122,  317 => 121,  309 => 116,  302 => 114,  294 => 108,  289 => 106,  284 => 105,  279 => 103,  274 => 102,  272 => 101,  264 => 98,  256 => 92,  251 => 90,  246 => 89,  241 => 87,  236 => 86,  234 => 85,  226 => 82,  221 => 79,  215 => 77,  213 => 76,  207 => 75,  202 => 73,  197 => 70,  191 => 68,  189 => 67,  183 => 66,  178 => 64,  172 => 60,  166 => 58,  160 => 56,  157 => 55,  151 => 53,  145 => 51,  143 => 50,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-midtrans-snap" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*        </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i>{{ error_warning }}*/
/*       <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i>{{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-midtrans-snap" class="form-horizontal">*/
/*           <div class="form-group required sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-display-name">{{ entry_display_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_snap_display_name" value="{{ payment_snap_display_name }}" placeholder="{{ payment_snap_display_name }}" id="input-display-name" class="form-control"/>*/
/*               {% if error_display_name %}*/
/*               <div class="text-danger">{{error_display_name}}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-merchant-id">{{ entry_merchant_id }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_snap_merchant_id" value="{{ payment_snap_merchant_id }}" placeholder="{{ payment_snap_merchant_id }}" id="input-merchant-id" class="form-control"/>*/
/*               {% if error_merchant_id %}*/
/*               <div class="text-danger">{{error_merchant_id}}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-mode">{{ entry_environment }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" id="input-mode" name="payment_snap_environment">*/
/*                 {% if payment_snap_environment == 'sandbox' %}*/
/*                 <option selected="selected" value="sandbox">{{ text_sandbox }}</option>*/
/*                 {% else %}*/
/*                 <option value="sandbox">{{ text_sandbox }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_snap_environment == 'production' %}*/
/*                 <option selected="selected" value="production">{{ text_live }}</option>*/
/*                 {% else %}*/
/*                 <option value="production">{{ text_live }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-client-key">{{ entry_client_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_snap_client_key" value="{{ payment_snap_client_key }}" placeholder="{{ payment_snap_client_key }}" id="input-client-key" class="form-control"/>*/
/*               {% if error_client_key %}*/
/*               <div class="text-danger">{{error_client_key}}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-server-key">{{ entry_server_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_snap_server_key" value="{{ payment_snap_server_key }}" placeholder="{{ payment_snap_server_key }}" id="input-server-key" class="form-control"/>*/
/*               {% if error_server_key %}*/
/*               <div class="text-danger">{{error_server_key}}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-save-card"><span data-toggle="tooltip" title="{{ help_savecard }}">{{ entry_savecard }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" id="input-save-card" name="payment_snap_oneclick">*/
/*                 {% if payment_snap_oneclick %}*/
/*                 <option selected="selected" value="1">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option selected="selected" value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="col-sm-2"></div>*/
/*             <div class="col-sm-10"><span>Leave it disabled if you are not sure!</span></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-redirect"><span data-toggle="tooltip" title="{{ help_redirect }}">{{ entry_redirect }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" id="input-redirect" name="payment_snap_redirect">*/
/*                 {% if payment_snap_redirect %}*/
/*                 <option selected="selected" value="1">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option selected="selected" value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="col-sm-2"></div>*/
/*             <div class="col-sm-10"> <span>Leave it disabled for default!</span></div>*/
/*           </div>*/
/*           <div class="form-group sensitive">*/
/*             <label class="col-sm-2 control-label" for="input-expiry"><span data-toggle="tooltip" title="{{ help_expiry }}">{{ entry_expiry }}</span></label>*/
/*             <div class="col-sm-3">*/
/*               <input type="text" name="payment_snap_expiry_duration" placeholder="filled with number" value="{{ payment_snap_expiry_duration }}" id="input-expiry" class="form-control"/>*/
/*               <span>Leave it blank for default.</span>*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               <select class="form-control" id="input-expiry" name="payment_snap_expiry_unit">*/
/*                 {% for expire in expiry  %}*/
/*                   {% if expire.unit == payment_snap_expiry_unit %}*/
/*                   <option value="{{ expire.unit }}" selected="selected">{{ expire.unit }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ expire.unit }}">{{ expire.unit }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field"><span data-toggle="tooltip" title="{{ help_custom_field }}">{{ entry_custom_field }}</span></label>*/
/*             <div class="col-sm-3">*/
/*               <input type="text" name="payment_snap_custom_field1" value="{{ payment_snap_custom_field1 }}" placeholder="{{ payment_snap_custom_field1 }}" class="form-control"/>*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               <input type="text" name="payment_snap_custom_field2" value="{{ payment_snap_custom_field2 }}" placeholder="{{ payment_snap_custom_field2 }}" class="form-control"/>*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               <input type="text" name="payment_snap_custom_field3" value="{{ payment_snap_custom_field3 }}" placeholder="{{ payment_snap_custom_field3 }}" class="form-control"/>*/
/*             </div>*/
/*             <div class="col-sm-2"></div>*/
/*             <div class="col-sm-10"><span>Leave it blank if you are not sure!</span></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-mixpanel">{{ entry_mixpanel }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" id="input-mixpanel" name="payment_snap_mixpanel">*/
/*                 {% if payment_snap_mixpanel %}*/
/*                 <option selected="selected" value="1">{{ text_disabled }}</option>*/
/*                 <option value="0">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_disabled }}</option>*/
/*                 <option selected="selected" value="0">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*               <span>Leave it enabled for default.</span>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-success-status"><span data-toggle="tooltip" title="{{ help_success_mapping }}">{{ entry_success_mapping }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" name="payment_snap_status_success">*/
/*                 {% for order_status in order_statuses  %}*/
/*                 <option {% if order_status.order_status_id == payment_snap_status_success %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-pending-status"><span data-toggle="tooltip" title="{{ help_pending_mapping }}">{{ entry_pending_mapping }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" name="payment_snap_status_pending">*/
/*                 {% for order_status in order_statuses  %}*/
/*                 <option {% if order_status.order_status_id == payment_snap_status_pending %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-failure-status"><span data-toggle="tooltip" title="{{ help_failure_mapping }}">{{ entry_failure_mapping }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" name="payment_snap_status_failure">*/
/*                 {% for order_status in order_statuses  %}*/
/*                 <option {% if order_status.order_status_id == payment_snap_status_failure %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-currency">{{entry_currency_conversion}}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_snap_currency_conversion" value="{{ payment_snap_currency_conversion }}" placeholder="{{ payment_snap_currency_conversion }}" class="form-control"/>*/
/*               <span>Set to 1 if your default currency is IDR.</span>*/
/*               {% if error_currency_conversion %}*/
/*               <div class="text-danger">{{ error_currency_conversion }}</div>*/
/*               {% endif %}*/
/*             </div>                        */
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{entry_geo_zone}}</label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" name="payment_snap_geo_zone_id">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones  %}*/
/*                   {% if geo_zone.geo_zone_id == payment_snap_geo_zone_id %}*/
/*                   <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-mode">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select class="form-control" id="input-status" name="payment_snap_status">*/
/*                 {% if payment_snap_status %}*/
/*                 <option selected="selected" value="1">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option selected="selected" value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input size="1" type="text" name="payment_snap_sort_order" value="{{ payment_snap_sort_order }}" placeholder="{{ payment_snap_sort_order }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
