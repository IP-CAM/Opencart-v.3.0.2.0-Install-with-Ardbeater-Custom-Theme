<?php

/* extension/payment/snapinst.twig */
class __TwigTemplate_e5eec8cde99b542760cd631d5052f3007116f21712476b6055cd6cce8c481bca extends Twig_Template
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
        // line 30
        echo (isset($context["entry_display_name"]) ? $context["entry_display_name"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_display_name\" value=\"";
        // line 32
        echo (isset($context["payment_snapinst_display_name"]) ? $context["payment_snapinst_display_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_display_name"]) ? $context["payment_snapinst_display_name"] : null);
        echo "\" id=\"input-display-name\" class=\"form-control\"/>
                            ";
        // line 33
        if ((isset($context["error_display_name"]) ? $context["error_display_name"] : null)) {
            // line 34
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 35
            echo (isset($context["error_display_name"]) ? $context["error_display_name"] : null);
            echo "
                                </div>
                            ";
        }
        // line 38
        echo "                        </div>
                    </div>
                    <!-- Display name -->

                    <div class=\"form-group required sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-merchant-id\">";
        // line 43
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_merchant_id\" value=\"";
        // line 45
        echo (isset($context["payment_snapinst_merchant_id"]) ? $context["payment_snapinst_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_merchant_id"]) ? $context["payment_snapinst_merchant_id"] : null);
        echo "\" id=\"input-merchant-id\" class=\"form-control\"/>
                            ";
        // line 46
        if ((isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null)) {
            // line 47
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 48
            echo (isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null);
            echo "
                                </div>
                            ";
        }
        // line 51
        echo "                        </div>
                    </div>
                    <!-- Merchant Id (v2-specific) -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 56
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mode\" name=\"payment_snapinst_environment\">
                                ";
        // line 59
        if (((isset($context["payment_snapinst_environment"]) ? $context["payment_snapinst_environment"] : null) == "sandbox")) {
            // line 60
            echo "                                    <option selected=\"selected\" value=\"sandbox\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
                                ";
        } else {
            // line 62
            echo "                                    <option value=\"sandbox\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
                                ";
        }
        // line 64
        echo "                                ";
        if (((isset($context["payment_snapinst_environment"]) ? $context["payment_snapinst_environment"] : null) == "production")) {
            // line 65
            echo "                                    <option selected=\"selected\" value=\"production\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                                ";
        } else {
            // line 67
            echo "                                    <option value=\"production\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                                ";
        }
        // line 69
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Environment (v2-specific) -->

                    <div class=\"form-group required sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-client-key\">";
        // line 75
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_client_key\" value=\"";
        // line 77
        echo (isset($context["payment_snapinst_client_key"]) ? $context["payment_snapinst_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_client_key"]) ? $context["payment_snapinst_client_key"] : null);
        echo "\" id=\"input-client-key\" class=\"form-control\"/>
                            ";
        // line 78
        if ((isset($context["error_client_key"]) ? $context["error_client_key"] : null)) {
            // line 79
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 80
            echo (isset($context["error_client_key"]) ? $context["error_client_key"] : null);
            echo "
                                </div>
                            ";
        }
        // line 83
        echo "                        </div>
                    </div>
                    <!-- Client Key (v2-specific) -->

                    <div class=\"form-group required sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-server-key\">";
        // line 88
        echo (isset($context["entry_server_key"]) ? $context["entry_server_key"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_server_key\" value=\"";
        // line 90
        echo (isset($context["payment_snapinst_server_key"]) ? $context["payment_snapinst_server_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_server_key"]) ? $context["payment_snapinst_server_key"] : null);
        echo "\" id=\"input-server-key\" class=\"form-control\"/>
                            ";
        // line 91
        if ((isset($context["error_server_key"]) ? $context["error_server_key"] : null)) {
            // line 92
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 93
            echo (isset($context["error_server_key"]) ? $context["error_server_key"] : null);
            echo "
                                </div>
                            ";
        }
        // line 96
        echo "                        </div>
                    </div>
                    <!-- Server Key (v2-specific) -->

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-min-txn\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 102
        echo (isset($context["help_min"]) ? $context["help_min"] : null);
        echo "\">";
        echo (isset($context["entry_min_txn"]) ? $context["entry_min_txn"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_min_txn\" value=\"";
        // line 105
        echo (isset($context["payment_snapinst_min_txn"]) ? $context["payment_snapinst_min_txn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_min_txn"]) ? $context["payment_snapinst_min_txn"] : null);
        echo "\" class=\"form-control\"/>
                            ";
        // line 106
        if ((isset($context["error_min_txn"]) ? $context["error_min_txn"] : null)) {
            // line 107
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 108
            echo (isset($context["error_min_txn"]) ? $context["error_min_txn"] : null);
            echo "
                                </div>
                            ";
        }
        // line 111
        echo "                        </div>
                    </div>
                    <!-- Min Txn -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-redirect\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 117
        echo (isset($context["help_redirect"]) ? $context["help_redirect"] : null);
        echo "\">";
        echo (isset($context["entry_redirect"]) ? $context["entry_redirect"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-redirect\" name=\"payment_snapinst_redirect\">
                                ";
        // line 121
        if ((isset($context["payment_snapinst_redirect"]) ? $context["payment_snapinst_redirect"] : null)) {
            // line 122
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 123
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 125
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 126
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 128
        echo "                            </select>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Leave it disabled for default!</span>
                        </div>
                    </div>
                    <!-- Redirect Page -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo (isset($context["help_custom_field"]) ? $context["help_custom_field"] : null);
        echo "\">";
        echo (isset($context["entry_custom_field"]) ? $context["entry_custom_field"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapinst_custom_field1\" value=\"";
        // line 142
        echo (isset($context["payment_snapinst_custom_field1"]) ? $context["payment_snapinst_custom_field1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_custom_field1"]) ? $context["payment_snapinst_custom_field1"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapinst_custom_field2\" value=\"";
        // line 145
        echo (isset($context["payment_snapinst_custom_field2"]) ? $context["payment_snapinst_custom_field2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_custom_field2"]) ? $context["payment_snapinst_custom_field2"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapinst_custom_field3\" value=\"";
        // line 148
        echo (isset($context["payment_snapinst_custom_field3"]) ? $context["payment_snapinst_custom_field3"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_custom_field3"]) ? $context["payment_snapinst_custom_field3"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Leave it blank if you are not sure!</span>
                        </div>
                    </div>
                    <!-- Custom Field -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-mixpanel\">";
        // line 158
        echo (isset($context["entry_mixpanel"]) ? $context["entry_mixpanel"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mixpanel\" name=\"payment_snapinst_mixpanel\">
                                ";
        // line 161
        if ((isset($context["payment_snapinst_mixpanel"]) ? $context["payment_snapinst_mixpanel"] : null)) {
            // line 162
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 163
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 165
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 166
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        }
        // line 168
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Mixpanel -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-success-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 175
        echo (isset($context["help_success_mapping"]) ? $context["help_success_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_success_mapping"]) ? $context["entry_success_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapinst_status_success\">
                                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 180
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapinst_status_success"]) ? $context["payment_snapinst_status_success"] : null))) {
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
        // line 182
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Success Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-pending-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 189
        echo (isset($context["help_pending_mapping"]) ? $context["help_pending_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_pending_mapping"]) ? $context["entry_pending_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapinst_status_pending\">
                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 194
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapinst_status_pending"]) ? $context["payment_snapinst_status_pending"] : null))) {
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
        // line 196
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Pending Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-failure-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 203
        echo (isset($context["help_failure_mapping"]) ? $context["help_failure_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_failure_mapping"]) ? $context["entry_failure_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapinst_status_failure\">
                                ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 208
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapinst_status_failure"]) ? $context["payment_snapinst_status_failure"] : null))) {
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
        // line 210
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Failure Order Status -->

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 216
        echo (isset($context["entry_currency_conversion"]) ? $context["entry_currency_conversion"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapinst_currency_conversion\" value=\"";
        // line 218
        echo (isset($context["payment_snapinst_currency_conversion"]) ? $context["payment_snapinst_currency_conversion"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_currency_conversion"]) ? $context["payment_snapinst_currency_conversion"] : null);
        echo "\" class=\"form-control\"/>
                            <span>Set to 1 if your default currency is IDR.</span>
                            ";
        // line 220
        if ((isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null)) {
            // line 221
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 222
            echo (isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null);
            echo "
                                </div>
                            ";
        }
        // line 225
        echo "                        </div>
                    </div>
                    <!-- Currency -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 230
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapinst_geo_zone_id\">
                                <option value=\"0\">";
        // line 233
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                                ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 235
            echo "                                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_snapinst_geo_zone_id"]) ? $context["payment_snapinst_geo_zone_id"] : null))) {
                // line 236
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 238
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            }
            // line 240
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Geo Zone -->
                    
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">
                            ";
        // line 248
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-status\" name=\"payment_snapinst_status\">

                                ";
        // line 253
        if ((isset($context["payment_snapinst_status"]) ? $context["payment_snapinst_status"] : null)) {
            // line 254
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 255
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 257
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 258
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 260
        echo "
                            </select>
                        </div>
                    </div>
                    <!-- Status -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 267
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input size=\"1\" type=\"text\" name=\"payment_snapinst_sort_order\" value=\"";
        // line 269
        echo (isset($context["payment_snapinst_sort_order"]) ? $context["payment_snapinst_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapinst_sort_order"]) ? $context["payment_snapinst_sort_order"] : null);
        echo "\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 277
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/snapinst.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 277,  635 => 269,  630 => 267,  621 => 260,  616 => 258,  611 => 257,  606 => 255,  601 => 254,  599 => 253,  591 => 248,  582 => 241,  576 => 240,  568 => 238,  560 => 236,  557 => 235,  553 => 234,  549 => 233,  543 => 230,  536 => 225,  530 => 222,  527 => 221,  525 => 220,  518 => 218,  513 => 216,  505 => 210,  490 => 208,  486 => 207,  477 => 203,  468 => 196,  453 => 194,  449 => 193,  440 => 189,  431 => 182,  416 => 180,  412 => 179,  403 => 175,  394 => 168,  389 => 166,  384 => 165,  379 => 163,  374 => 162,  372 => 161,  366 => 158,  351 => 148,  343 => 145,  335 => 142,  327 => 139,  314 => 128,  309 => 126,  304 => 125,  299 => 123,  294 => 122,  292 => 121,  283 => 117,  275 => 111,  269 => 108,  266 => 107,  264 => 106,  258 => 105,  250 => 102,  242 => 96,  236 => 93,  233 => 92,  231 => 91,  225 => 90,  220 => 88,  213 => 83,  207 => 80,  204 => 79,  202 => 78,  196 => 77,  191 => 75,  183 => 69,  177 => 67,  171 => 65,  168 => 64,  162 => 62,  156 => 60,  154 => 59,  148 => 56,  141 => 51,  135 => 48,  132 => 47,  130 => 46,  124 => 45,  119 => 43,  112 => 38,  106 => 35,  103 => 34,  101 => 33,  95 => 32,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-midtrans-snap" class="form-horizontal">*/
/* */
/*                     <div class="form-group required sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-display-name">{{ entry_display_name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_display_name" value="{{ payment_snapinst_display_name }}" placeholder="{{ payment_snapinst_display_name }}" id="input-display-name" class="form-control"/>*/
/*                             {% if error_display_name %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_display_name }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Display name -->*/
/* */
/*                     <div class="form-group required sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-merchant-id">{{ entry_merchant_id }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_merchant_id" value="{{ payment_snapinst_merchant_id }}" placeholder="{{ payment_snapinst_merchant_id }}" id="input-merchant-id" class="form-control"/>*/
/*                             {% if error_merchant_id %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_merchant_id }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Merchant Id (v2-specific) -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-mode">{{ entry_environment }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-mode" name="payment_snapinst_environment">*/
/*                                 {% if payment_snapinst_environment == 'sandbox' %}*/
/*                                     <option selected="selected" value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if payment_snapinst_environment == 'production' %}*/
/*                                     <option selected="selected" value="production">{{ text_live }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="production">{{ text_live }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Environment (v2-specific) -->*/
/* */
/*                     <div class="form-group required sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-client-key">{{ entry_client_key }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_client_key" value="{{ payment_snapinst_client_key }}" placeholder="{{ payment_snapinst_client_key }}" id="input-client-key" class="form-control"/>*/
/*                             {% if error_client_key %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_client_key }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Client Key (v2-specific) -->*/
/* */
/*                     <div class="form-group required sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-server-key">{{ entry_server_key }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_server_key" value="{{ payment_snapinst_server_key }}" placeholder="{{ payment_snapinst_server_key }}" id="input-server-key" class="form-control"/>*/
/*                             {% if error_server_key %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_server_key }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Server Key (v2-specific) -->*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-min-txn">*/
/*                             <span data-toggle="tooltip" title="{{ help_min }}">{{ entry_min_txn }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_min_txn" value="{{ payment_snapinst_min_txn }}" placeholder="{{ payment_snapinst_min_txn }}" class="form-control"/>*/
/*                             {% if error_min_txn %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_min_txn }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Min Txn -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-redirect">*/
/*                             <span data-toggle="tooltip" title="{{ help_redirect }}">{{ entry_redirect }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-redirect" name="payment_snapinst_redirect">*/
/*                                 {% if payment_snapinst_redirect %}*/
/*                                     <option selected="selected" value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option selected="selected" value="0">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-sm-2"></div>*/
/*                         <div class="col-sm-10">*/
/*                             <span>Leave it disabled for default!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Redirect Page -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field">*/
/*                             <span data-toggle="tooltip" title="{{ help_custom_field }}">{{ entry_custom_field }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapinst_custom_field1" value="{{ payment_snapinst_custom_field1 }}" placeholder="{{ payment_snapinst_custom_field1 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapinst_custom_field2" value="{{ payment_snapinst_custom_field2 }}" placeholder="{{ payment_snapinst_custom_field2 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapinst_custom_field3" value="{{ payment_snapinst_custom_field3 }}" placeholder="{{ payment_snapinst_custom_field3 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-2"></div>*/
/*                         <div class="col-sm-10">*/
/*                             <span>Leave it blank if you are not sure!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Custom Field -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-mixpanel">{{ entry_mixpanel }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-mixpanel" name="payment_snapinst_mixpanel">*/
/*                                 {% if payment_snapinst_mixpanel %}*/
/*                                     <option selected="selected" value="1">{{ text_disabled }}</option>*/
/*                                     <option value="0">{{ text_enabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_disabled }}</option>*/
/*                                     <option selected="selected" value="0">{{ text_enabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Mixpanel -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2" for="input-success-status">*/
/*                             <span data-toggle="tooltip" title="{{ help_success_mapping }}">{{ entry_success_mapping }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" name="payment_snapinst_status_success">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapinst_status_success %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Success Order Status -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2" for="input-pending-status">*/
/*                             <span data-toggle="tooltip" title="{{ help_pending_mapping }}">{{ entry_pending_mapping }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" name="payment_snapinst_status_pending">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapinst_status_pending %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Pending Order Status -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2" for="input-failure-status">*/
/*                             <span data-toggle="tooltip" title="{{ help_failure_mapping }}">{{ entry_failure_mapping }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" name="payment_snapinst_status_failure">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapinst_status_failure %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Failure Order Status -->*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-currency">{{entry_currency_conversion}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapinst_currency_conversion" value="{{ payment_snapinst_currency_conversion }}" placeholder="{{ payment_snapinst_currency_conversion }}" class="form-control"/>*/
/*                             <span>Set to 1 if your default currency is IDR.</span>*/
/*                             {% if error_currency_conversion %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_currency_conversion }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Currency -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-geo-zone">{{entry_geo_zone}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" name="payment_snapinst_geo_zone_id">*/
/*                                 <option value="0">{{ text_all_zones }}</option>*/
/*                                 {% for geo_zone in geo_zones  %}*/
/*                                     {% if geo_zone.geo_zone_id == payment_snapinst_geo_zone_id %}*/
/*                                         <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Geo Zone -->*/
/*                     */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status">*/
/*                             {{ entry_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-status" name="payment_snapinst_status">*/
/* */
/*                                 {% if payment_snapinst_status %}*/
/*                                     <option selected="selected" value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option selected="selected" value="0">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/* */
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Status -->*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input size="1" type="text" name="payment_snapinst_sort_order" value="{{ payment_snapinst_sort_order }}" placeholder="{{ payment_snapinst_sort_order }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
