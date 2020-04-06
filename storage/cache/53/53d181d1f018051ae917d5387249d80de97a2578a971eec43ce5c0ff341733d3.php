<?php

/* extension/payment/snapio.twig */
class __TwigTemplate_2846d6c9940cace96066685187d380e4bbfc1586c2270c1d65bc6644ced0fb14 extends Twig_Template
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
                            <input type=\"text\" name=\"payment_snapio_display_name\" value=\"";
        // line 32
        echo (isset($context["payment_snapio_display_name"]) ? $context["payment_snapio_display_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_display_name"]) ? $context["payment_snapio_display_name"] : null);
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
                            <input type=\"text\" name=\"payment_snapio_merchant_id\" value=\"";
        // line 45
        echo (isset($context["payment_snapio_merchant_id"]) ? $context["payment_snapio_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_merchant_id"]) ? $context["payment_snapio_merchant_id"] : null);
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
                    <!-- Merchant Id -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 56
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mode\" name=\"payment_snapio_environment\">
                                ";
        // line 59
        if (((isset($context["payment_snapio_environment"]) ? $context["payment_snapio_environment"] : null) == "sandbox")) {
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
        if (((isset($context["payment_snapio_environment"]) ? $context["payment_snapio_environment"] : null) == "production")) {
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
                            <input type=\"text\" name=\"payment_snapio_client_key\" value=\"";
        // line 77
        echo (isset($context["payment_snapio_client_key"]) ? $context["payment_snapio_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_client_key"]) ? $context["payment_snapio_client_key"] : null);
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
                            <input type=\"text\" name=\"payment_snapio_server_key\" value=\"";
        // line 90
        echo (isset($context["payment_snapio_server_key"]) ? $context["payment_snapio_server_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_server_key"]) ? $context["payment_snapio_server_key"] : null);
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

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-bank\">";
        // line 101
        echo (isset($context["entry_acq_bank"]) ? $context["entry_acq_bank"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapio_acq_bank\" value=\"";
        // line 103
        echo (isset($context["payment_snapio_acq_bank"]) ? $context["payment_snapio_acq_bank"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_acq_bank"]) ? $context["payment_snapio_acq_bank"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Input the desired acquiring bank. e.g: bni.
                                <br>Leave blank if you are not sure!</span>
                        </div>
                    </div>
                    <!-- Acquiring Bank -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-terms\">";
        // line 114
        echo (isset($context["entry_installment_term"]) ? $context["entry_installment_term"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapio_installment_term\" value=\"";
        // line 116
        echo (isset($context["payment_snapio_installment_term"]) ? $context["payment_snapio_installment_term"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_installment_term"]) ? $context["payment_snapio_installment_term"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Input the desired Installment Terms. Separate with coma. e.g: 3,6,12</span>
                        </div>
                    </div>
                    <!-- Installment Terms -->

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-min-txn\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 127
        echo (isset($context["help_min"]) ? $context["help_min"] : null);
        echo "\">";
        echo (isset($context["entry_min_txn"]) ? $context["entry_min_txn"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapio_min_txn\" value=\"";
        // line 130
        echo (isset($context["payment_snapio_min_txn"]) ? $context["payment_snapio_min_txn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_min_txn"]) ? $context["payment_snapio_min_txn"] : null);
        echo "\" class=\"form-control\"/>
                            ";
        // line 131
        if ((isset($context["error_min_txn"]) ? $context["error_min_txn"] : null)) {
            // line 132
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 133
            echo (isset($context["error_min_txn"]) ? $context["error_min_txn"] : null);
            echo "
                                </div>
                            ";
        }
        // line 136
        echo "                        </div>
                    </div>
                    <!-- Min Txn -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-bin\">";
        // line 141
        echo (isset($context["entry_bin_number"]) ? $context["entry_bin_number"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapio_number\" value=\"";
        // line 143
        echo (isset($context["payment_snapio_number"]) ? $context["payment_snapio_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_number"]) ? $context["payment_snapio_number"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Fill with CC BIN numbers (or bank name) that you want to allow to use this payment button.<br>
                                Separate BIN number with coma Example: 4,5,4811,bni,mandiri.<br>Leave it blank if you are not sure!</span>
                        </div>
                    </div>
                    <!-- CC Bin -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-redirect\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo (isset($context["help_redirect"]) ? $context["help_redirect"] : null);
        echo "\">";
        echo (isset($context["entry_redirect"]) ? $context["entry_redirect"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-redirect\" name=\"payment_snapio_redirect\">
                                ";
        // line 159
        if ((isset($context["payment_snapio_redirect"]) ? $context["payment_snapio_redirect"] : null)) {
            // line 160
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 161
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 163
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 164
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 166
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
        // line 177
        echo (isset($context["help_custom_field"]) ? $context["help_custom_field"] : null);
        echo "\">";
        echo (isset($context["entry_custom_field"]) ? $context["entry_custom_field"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapio_custom_field1\" value=\"";
        // line 180
        echo (isset($context["payment_snapio_custom_field1"]) ? $context["payment_snapio_custom_field1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_custom_field1"]) ? $context["payment_snapio_custom_field1"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapio_custom_field2\" value=\"";
        // line 183
        echo (isset($context["payment_snapio_custom_field2"]) ? $context["payment_snapio_custom_field2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_custom_field2"]) ? $context["payment_snapio_custom_field2"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapio_custom_field3\" value=\"";
        // line 186
        echo (isset($context["payment_snapio_custom_field3"]) ? $context["payment_snapio_custom_field3"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_custom_field3"]) ? $context["payment_snapio_custom_field3"] : null);
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
        // line 196
        echo (isset($context["entry_mixpanel"]) ? $context["entry_mixpanel"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mixpanel\" name=\"payment_snapio_mixpanel\">
                                ";
        // line 199
        if ((isset($context["payment_snapio_mixpanel"]) ? $context["payment_snapio_mixpanel"] : null)) {
            // line 200
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 201
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 203
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 204
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        }
        // line 206
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Mixpanel -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-success-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 213
        echo (isset($context["help_success_mapping"]) ? $context["help_success_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_success_mapping"]) ? $context["entry_success_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapio_status_success\">
                                ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 218
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapio_status_success"]) ? $context["payment_snapio_status_success"] : null))) {
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
        // line 220
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Success Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-pending-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 227
        echo (isset($context["help_pending_mapping"]) ? $context["help_pending_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_pending_mapping"]) ? $context["entry_pending_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapio_status_pending\">
                                ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 232
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapio_status_pending"]) ? $context["payment_snapio_status_pending"] : null))) {
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
        // line 234
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Pending Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-failure-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 241
        echo (isset($context["help_failure_mapping"]) ? $context["help_failure_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_failure_mapping"]) ? $context["entry_failure_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapio_status_failure\">
                                ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 246
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapio_status_failure"]) ? $context["payment_snapio_status_failure"] : null))) {
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
        // line 248
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Failure Order Status -->

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 254
        echo (isset($context["entry_currency_conversion"]) ? $context["entry_currency_conversion"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapio_currency_conversion\" value=\"";
        // line 256
        echo (isset($context["payment_snapio_currency_conversion"]) ? $context["payment_snapio_currency_conversion"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_currency_conversion"]) ? $context["payment_snapio_currency_conversion"] : null);
        echo "\" class=\"form-control\"/>
                            <span>Set to 1 if your default currency is IDR.</span>
                            ";
        // line 258
        if ((isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null)) {
            // line 259
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 260
            echo (isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null);
            echo "
                                </div>
                            ";
        }
        // line 263
        echo "                        </div>
                    </div>
                    <!-- Currency -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 268
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapio_geo_zone_id\">
                                <option value=\"0\">";
        // line 271
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                                ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 273
            echo "                                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_snapio_geo_zone_id"]) ? $context["payment_snapio_geo_zone_id"] : null))) {
                // line 274
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 276
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            }
            // line 278
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Geo Zone -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-mode\">
                            ";
        // line 286
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-status\" name=\"payment_snapio_status\">

                                ";
        // line 291
        if ((isset($context["payment_snapio_status"]) ? $context["payment_snapio_status"] : null)) {
            // line 292
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 293
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 295
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 296
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 298
        echo "
                            </select>
                        </div>
                    </div>
                    <!-- Status -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 305
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input size=\"1\" type=\"text\" name=\"payment_snapio_sort_order\" value=\"";
        // line 307
        echo (isset($context["payment_snapio_sort_order"]) ? $context["payment_snapio_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapio_sort_order"]) ? $context["payment_snapio_sort_order"] : null);
        echo "\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 315
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/snapio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 315,  697 => 307,  692 => 305,  683 => 298,  678 => 296,  673 => 295,  668 => 293,  663 => 292,  661 => 291,  653 => 286,  644 => 279,  638 => 278,  630 => 276,  622 => 274,  619 => 273,  615 => 272,  611 => 271,  605 => 268,  598 => 263,  592 => 260,  589 => 259,  587 => 258,  580 => 256,  575 => 254,  567 => 248,  552 => 246,  548 => 245,  539 => 241,  530 => 234,  515 => 232,  511 => 231,  502 => 227,  493 => 220,  478 => 218,  474 => 217,  465 => 213,  456 => 206,  451 => 204,  446 => 203,  441 => 201,  436 => 200,  434 => 199,  428 => 196,  413 => 186,  405 => 183,  397 => 180,  389 => 177,  376 => 166,  371 => 164,  366 => 163,  361 => 161,  356 => 160,  354 => 159,  345 => 155,  328 => 143,  323 => 141,  316 => 136,  310 => 133,  307 => 132,  305 => 131,  299 => 130,  291 => 127,  275 => 116,  270 => 114,  254 => 103,  249 => 101,  242 => 96,  236 => 93,  233 => 92,  231 => 91,  225 => 90,  220 => 88,  213 => 83,  207 => 80,  204 => 79,  202 => 78,  196 => 77,  191 => 75,  183 => 69,  177 => 67,  171 => 65,  168 => 64,  162 => 62,  156 => 60,  154 => 59,  148 => 56,  141 => 51,  135 => 48,  132 => 47,  130 => 46,  124 => 45,  119 => 43,  112 => 38,  106 => 35,  103 => 34,  101 => 33,  95 => 32,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*                             <input type="text" name="payment_snapio_display_name" value="{{ payment_snapio_display_name }}" placeholder="{{ payment_snapio_display_name }}" id="input-display-name" class="form-control"/>*/
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
/*                             <input type="text" name="payment_snapio_merchant_id" value="{{ payment_snapio_merchant_id }}" placeholder="{{ payment_snapio_merchant_id }}" id="input-merchant-id" class="form-control"/>*/
/*                             {% if error_merchant_id %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_merchant_id }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Merchant Id -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-mode">{{ entry_environment }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-mode" name="payment_snapio_environment">*/
/*                                 {% if payment_snapio_environment == 'sandbox' %}*/
/*                                     <option selected="selected" value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if payment_snapio_environment == 'production' %}*/
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
/*                             <input type="text" name="payment_snapio_client_key" value="{{ payment_snapio_client_key }}" placeholder="{{ payment_snapio_client_key }}" id="input-client-key" class="form-control"/>*/
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
/*                             <input type="text" name="payment_snapio_server_key" value="{{ payment_snapio_server_key }}" placeholder="{{ payment_snapio_server_key }}" id="input-server-key" class="form-control"/>*/
/*                             {% if error_server_key %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_server_key }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Server Key (v2-specific) -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-bank">{{entry_acq_bank}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapio_acq_bank" value="{{ payment_snapio_acq_bank }}" placeholder="{{ payment_snapio_acq_bank }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-2"></div>*/
/*                         <div class="col-sm-10">*/
/*                             <span>Input the desired acquiring bank. e.g: bni.*/
/*                                 <br>Leave blank if you are not sure!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Acquiring Bank -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-terms">{{entry_installment_term}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapio_installment_term" value="{{ payment_snapio_installment_term }}" placeholder="{{ payment_snapio_installment_term }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-2"></div>*/
/*                         <div class="col-sm-10">*/
/*                             <span>Input the desired Installment Terms. Separate with coma. e.g: 3,6,12</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Installment Terms -->*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-min-txn">*/
/*                             <span data-toggle="tooltip" title="{{ help_min }}">{{ entry_min_txn }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapio_min_txn" value="{{ payment_snapio_min_txn }}" placeholder="{{ payment_snapio_min_txn }}" class="form-control"/>*/
/*                             {% if error_min_txn %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_min_txn }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Min Txn -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-bin">{{entry_bin_number}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapio_number" value="{{ payment_snapio_number }}" placeholder="{{ payment_snapio_number }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-2"></div>*/
/*                         <div class="col-sm-10">*/
/*                             <span>Fill with CC BIN numbers (or bank name) that you want to allow to use this payment button.<br>*/
/*                                 Separate BIN number with coma Example: 4,5,4811,bni,mandiri.<br>Leave it blank if you are not sure!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- CC Bin -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-redirect">*/
/*                             <span data-toggle="tooltip" title="{{ help_redirect }}">{{ entry_redirect }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-redirect" name="payment_snapio_redirect">*/
/*                                 {% if payment_snapio_redirect %}*/
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
/*                             <input type="text" name="payment_snapio_custom_field1" value="{{ payment_snapio_custom_field1 }}" placeholder="{{ payment_snapio_custom_field1 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapio_custom_field2" value="{{ payment_snapio_custom_field2 }}" placeholder="{{ payment_snapio_custom_field2 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapio_custom_field3" value="{{ payment_snapio_custom_field3 }}" placeholder="{{ payment_snapio_custom_field3 }}" class="form-control"/>*/
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
/*                             <select class="form-control" id="input-mixpanel" name="payment_snapio_mixpanel">*/
/*                                 {% if payment_snapio_mixpanel %}*/
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
/*                             <select class="form-control" name="payment_snapio_status_success">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapio_status_success %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
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
/*                             <select class="form-control" name="payment_snapio_status_pending">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapio_status_pending %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
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
/*                             <select class="form-control" name="payment_snapio_status_failure">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapio_status_failure %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Failure Order Status -->*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-currency">{{entry_currency_conversion}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapio_currency_conversion" value="{{ payment_snapio_currency_conversion }}" placeholder="{{ payment_snapio_currency_conversion }}" class="form-control"/>*/
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
/*                             <select class="form-control" name="payment_snapio_geo_zone_id">*/
/*                                 <option value="0">{{ text_all_zones }}</option>*/
/*                                 {% for geo_zone in geo_zones  %}*/
/*                                     {% if geo_zone.geo_zone_id == payment_snapio_geo_zone_id %}*/
/*                                         <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Geo Zone -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-mode">*/
/*                             {{ entry_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-status" name="payment_snapio_status">*/
/* */
/*                                 {% if payment_snapio_status %}*/
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
/*               <input size="1" type="text" name="payment_snapio_sort_order" value="{{ payment_snapio_sort_order }}" placeholder="{{ payment_snapio_sort_order }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
