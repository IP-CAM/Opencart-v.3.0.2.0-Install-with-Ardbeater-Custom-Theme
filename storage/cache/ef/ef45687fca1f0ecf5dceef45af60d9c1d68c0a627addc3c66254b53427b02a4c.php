<?php

/* extension/payment/snapbin.twig */
class __TwigTemplate_8c6ddf753b10beb48741835d4ca3566c7101bceda1007c3062f48deb64dffb50 extends Twig_Template
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
                            <input type=\"text\" name=\"payment_snapbin_display_name\" value=\"";
        // line 32
        echo (isset($context["payment_snapbin_display_name"]) ? $context["payment_snapbin_display_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_display_name"]) ? $context["payment_snapbin_display_name"] : null);
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
                            <input type=\"text\" name=\"payment_snapbin_merchant_id\" value=\"";
        // line 45
        echo (isset($context["payment_snapbin_merchant_id"]) ? $context["payment_snapbin_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_merchant_id"]) ? $context["payment_snapbin_merchant_id"] : null);
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
                            <select class=\"form-control\" id=\"input-mode\" name=\"payment_snapbin_environment\">
                                ";
        // line 59
        if (((isset($context["payment_snapbin_environment"]) ? $context["payment_snapbin_environment"] : null) == "sandbox")) {
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
        if (((isset($context["payment_snapbin_environment"]) ? $context["payment_snapbin_environment"] : null) == "production")) {
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
                            <input type=\"text\" name=\"payment_snapbin_client_key\" value=\"";
        // line 77
        echo (isset($context["payment_snapbin_client_key"]) ? $context["payment_snapbin_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_client_key"]) ? $context["payment_snapbin_client_key"] : null);
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
                            <input type=\"text\" name=\"payment_snapbin_server_key\" value=\"";
        // line 90
        echo (isset($context["payment_snapbin_server_key"]) ? $context["payment_snapbin_server_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_server_key"]) ? $context["payment_snapbin_server_key"] : null);
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

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-enabled-payments\">";
        // line 101
        echo (isset($context["entry_enabled_payments"]) ? $context["entry_enabled_payments"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapbin_enabled_payments\" value=\"";
        // line 103
        echo (isset($context["payment_snapbin_enabled_payments"]) ? $context["payment_snapbin_enabled_payments"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_enabled_payments"]) ? $context["payment_snapbin_enabled_payments"] : null);
        echo "\" id=\"input-enabled-payments\" class=\"form-control\"/>
                            <span>Customize allowed payment method, separate payment method code with coma. e.g: bank_transfer,credit_card.
                                <br>Leave it default if you are not sure.</span>
                        </div>
                    </div>
                    <!-- Enabled Payments -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-3ds\">";
        // line 111
        echo (isset($context["entry_3ds"]) ? $context["entry_3ds"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-3ds\" name=\"payment_snapbin_3d_secure\">
                                ";
        // line 114
        if ((isset($context["payment_snapbin_3d_secure"]) ? $context["payment_snapbin_3d_secure"] : null)) {
            // line 115
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 116
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 118
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 119
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        }
        // line 121
        echo "                            </select>
                            <span>You must enable 3D Secure.<br>Please contact us if you wish to disable this feature in the Production environment.</span>
                        </div>
                    </div>
                    <!-- 3ds -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-acq-bank\">";
        // line 128
        echo (isset($context["entry_acq_bank"]) ? $context["entry_acq_bank"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapbin_acq_bank\" value=\"";
        // line 130
        echo (isset($context["payment_snapbin_acq_bank"]) ? $context["payment_snapbin_acq_bank"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_acq_bank"]) ? $context["payment_snapbin_acq_bank"] : null);
        echo "\" id=\"input-acq-bank\" class=\"form-control\"/>
                            <span>Specify your acquiring bank for this payment option.<br>Options: BCA, BRI, MEGA, MAYBANK, BNI, MANDIRI, CIMB, etc (Only choose 1 bank).<br>Leave it blank for default.</span>
                        </div>
                    </div>
                    <!-- Acquiring Bank -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-bin\">";
        // line 137
        echo (isset($context["entry_bin_number"]) ? $context["entry_bin_number"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapbin_number\" value=\"";
        // line 139
        echo (isset($context["payment_snapbin_number"]) ? $context["payment_snapbin_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_number"]) ? $context["payment_snapbin_number"] : null);
        echo "\" id=\"input-bin\" class=\"form-control\"/>
                            <span>Fill with CC BIN numbers (or bank name) that you want to allow to use this payment button.<br>Separate BIN number with coma Example: 4,5,4811,bni,mandiri.<br>Leave it blank if you are not sure!</span>
                        </div>
                    </div>
                    <!-- Bin Number -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-save-card\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 147
        echo (isset($context["help_savecard"]) ? $context["help_savecard"] : null);
        echo "\">";
        echo (isset($context["entry_savecard"]) ? $context["entry_savecard"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-save-card\" name=\"payment_snapbin_oneclick\">
                                ";
        // line 151
        if ((isset($context["payment_snapbin_oneclick"]) ? $context["payment_snapbin_oneclick"] : null)) {
            // line 152
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 153
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 155
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 156
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 158
        echo "                            </select>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Leave it disabled if you are not sure!</span>
                        </div>
                    </div>
                    <!-- Save Card -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-redirect\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 169
        echo (isset($context["help_redirect"]) ? $context["help_redirect"] : null);
        echo "\">";
        echo (isset($context["entry_redirect"]) ? $context["entry_redirect"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-redirect\" name=\"payment_snapbin_redirect\">
                                ";
        // line 173
        if ((isset($context["payment_snapbin_redirect"]) ? $context["payment_snapbin_redirect"] : null)) {
            // line 174
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 175
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 177
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 178
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 180
        echo "                            </select>
                        </div>
                        <div class=\"col-sm-2\"></div>
                        <div class=\"col-sm-10\">
                            <span>Leave it disabled for default!</span>
                        </div>
                    </div>
                    <!-- Redirect Page -->

                    <div class=\"form-group sensitive\">
                        <label class=\"col-sm-2 control-label\" for=\"input-expiry\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 191
        echo (isset($context["help_expiry"]) ? $context["help_expiry"] : null);
        echo "\">";
        echo (isset($context["entry_expiry"]) ? $context["entry_expiry"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapbin_expiry_duration\" placeholder=\"filled with number\" value=\"";
        // line 194
        echo (isset($context["payment_snapbin_expiry_duration"]) ? $context["payment_snapbin_expiry_duration"] : null);
        echo "\" id=\"input-expiry\" class=\"form-control\"/>
                            <span>Leave it blank for default.</span>
                        </div>
                        <div class=\"col-sm-3\">
                            <select class=\"form-control\" id=\"input-expiry\" name=\"payment_snapbin_expiry_unit\">
                                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiry"]) ? $context["expiry"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["expire"]) {
            // line 200
            echo "                                    ";
            if (($this->getAttribute($context["expire"], "unit", array()) == (isset($context["payment_snapbin_expiry_unit"]) ? $context["payment_snapbin_expiry_unit"] : null))) {
                // line 201
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "</option>
                                    ";
            } else {
                // line 203
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "\">";
                echo $this->getAttribute($context["expire"], "unit", array());
                echo "</option>
                                    ";
            }
            // line 205
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Custom Expiry -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-custom-field\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 213
        echo (isset($context["help_custom_field"]) ? $context["help_custom_field"] : null);
        echo "\">";
        echo (isset($context["entry_custom_field"]) ? $context["entry_custom_field"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapbin_custom_field1\" value=\"";
        // line 216
        echo (isset($context["payment_snapbin_custom_field1"]) ? $context["payment_snapbin_custom_field1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_custom_field1"]) ? $context["payment_snapbin_custom_field1"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapbin_custom_field2\" value=\"";
        // line 219
        echo (isset($context["payment_snapbin_custom_field2"]) ? $context["payment_snapbin_custom_field2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_custom_field2"]) ? $context["payment_snapbin_custom_field2"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <input type=\"text\" name=\"payment_snapbin_custom_field3\" value=\"";
        // line 222
        echo (isset($context["payment_snapbin_custom_field3"]) ? $context["payment_snapbin_custom_field3"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_custom_field3"]) ? $context["payment_snapbin_custom_field3"] : null);
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
        // line 232
        echo (isset($context["entry_mixpanel"]) ? $context["entry_mixpanel"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mixpanel\" name=\"payment_snapbin_mixpanel\">
                                ";
        // line 235
        if ((isset($context["payment_snapbin_mixpanel"]) ? $context["payment_snapbin_mixpanel"] : null)) {
            // line 236
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 237
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 239
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 240
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                ";
        }
        // line 242
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Mixpanel -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-success-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 249
        echo (isset($context["help_success_mapping"]) ? $context["help_success_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_success_mapping"]) ? $context["entry_success_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapbin_status_success\">
                                ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 254
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapbin_status_success"]) ? $context["payment_snapbin_status_success"] : null))) {
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
        // line 256
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Success Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-pending-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 263
        echo (isset($context["help_pending_mapping"]) ? $context["help_pending_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_pending_mapping"]) ? $context["entry_pending_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapbin_status_pending\">
                                ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 268
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapbin_status_pending"]) ? $context["payment_snapbin_status_pending"] : null))) {
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
        // line 270
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Pending Order Status -->

                    <div class=\"form-group\">
                        <label class=\"col-sm-2\" for=\"input-failure-status\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 277
        echo (isset($context["help_failure_mapping"]) ? $context["help_failure_mapping"] : null);
        echo "\">";
        echo (isset($context["entry_failure_mapping"]) ? $context["entry_failure_mapping"] : null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapbin_status_failure\">
                                ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 282
            echo "                                    <option ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_snapbin_status_failure"]) ? $context["payment_snapbin_status_failure"] : null))) {
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
        // line 284
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Failure Order Status -->

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 290
        echo (isset($context["entry_currency_conversion"]) ? $context["entry_currency_conversion"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_snapbin_currency_conversion\" value=\"";
        // line 292
        echo (isset($context["payment_snapbin_currency_conversion"]) ? $context["payment_snapbin_currency_conversion"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_currency_conversion"]) ? $context["payment_snapbin_currency_conversion"] : null);
        echo "\" class=\"form-control\"/>
                            <span>Set to 1 if your default currency is IDR.</span>
                            ";
        // line 294
        if ((isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null)) {
            // line 295
            echo "                                <div class=\"text-danger\">
                                    ";
            // line 296
            echo (isset($context["error_currency_conversion"]) ? $context["error_currency_conversion"] : null);
            echo "
                                </div>
                            ";
        }
        // line 299
        echo "                        </div>
                    </div>
                    <!-- Currency -->
                    
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-geo\">";
        // line 304
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" name=\"payment_snapbin_geo_zone_id\">
                                <option value=\"0\">";
        // line 307
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                                ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 309
            echo "                                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_snapbin_geo_zone_id"]) ? $context["payment_snapbin_geo_zone_id"] : null))) {
                // line 310
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 312
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                                    ";
            }
            // line 314
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "                            </select>
                        </div>
                    </div>
                    <!-- Geo Zone -->
                    
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">
                            ";
        // line 322
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-status\" name=\"payment_snapbin_status\">

                                ";
        // line 327
        if ((isset($context["payment_snapbin_status"]) ? $context["payment_snapbin_status"] : null)) {
            // line 328
            echo "                                    <option selected=\"selected\" value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 329
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 331
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option selected=\"selected\" value=\"0\">";
            // line 332
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 334
        echo "
                            </select>
                        </div>
                    </div>
                    <!-- Status -->

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 341
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input size=\"1\" type=\"text\" name=\"payment_snapbin_sort_order\" value=\"";
        // line 343
        echo (isset($context["payment_snapbin_sort_order"]) ? $context["payment_snapbin_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["payment_snapbin_sort_order"]) ? $context["payment_snapbin_sort_order"] : null);
        echo "\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 351
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/snapbin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 351,  789 => 343,  784 => 341,  775 => 334,  770 => 332,  765 => 331,  760 => 329,  755 => 328,  753 => 327,  745 => 322,  736 => 315,  730 => 314,  722 => 312,  714 => 310,  711 => 309,  707 => 308,  703 => 307,  697 => 304,  690 => 299,  684 => 296,  681 => 295,  679 => 294,  672 => 292,  667 => 290,  659 => 284,  644 => 282,  640 => 281,  631 => 277,  622 => 270,  607 => 268,  603 => 267,  594 => 263,  585 => 256,  570 => 254,  566 => 253,  557 => 249,  548 => 242,  543 => 240,  538 => 239,  533 => 237,  528 => 236,  526 => 235,  520 => 232,  505 => 222,  497 => 219,  489 => 216,  481 => 213,  472 => 206,  466 => 205,  458 => 203,  450 => 201,  447 => 200,  443 => 199,  435 => 194,  427 => 191,  414 => 180,  409 => 178,  404 => 177,  399 => 175,  394 => 174,  392 => 173,  383 => 169,  370 => 158,  365 => 156,  360 => 155,  355 => 153,  350 => 152,  348 => 151,  339 => 147,  326 => 139,  321 => 137,  309 => 130,  304 => 128,  295 => 121,  290 => 119,  285 => 118,  280 => 116,  275 => 115,  273 => 114,  267 => 111,  254 => 103,  249 => 101,  242 => 96,  236 => 93,  233 => 92,  231 => 91,  225 => 90,  220 => 88,  213 => 83,  207 => 80,  204 => 79,  202 => 78,  196 => 77,  191 => 75,  183 => 69,  177 => 67,  171 => 65,  168 => 64,  162 => 62,  156 => 60,  154 => 59,  148 => 56,  141 => 51,  135 => 48,  132 => 47,  130 => 46,  124 => 45,  119 => 43,  112 => 38,  106 => 35,  103 => 34,  101 => 33,  95 => 32,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*                             <input type="text" name="payment_snapbin_display_name" value="{{ payment_snapbin_display_name }}" placeholder="{{ payment_snapbin_display_name }}" id="input-display-name" class="form-control"/>*/
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
/*                             <input type="text" name="payment_snapbin_merchant_id" value="{{ payment_snapbin_merchant_id }}" placeholder="{{ payment_snapbin_merchant_id }}" id="input-merchant-id" class="form-control"/>*/
/*                             {% if error_merchant_id %}*/
/*                                 <div class="text-danger">*/
/*                                     {{error_merchant_id}}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Merchant Id -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-mode">{{ entry_environment }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-mode" name="payment_snapbin_environment">*/
/*                                 {% if payment_snapbin_environment == 'sandbox' %}*/
/*                                     <option selected="selected" value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="sandbox">{{ text_sandbox }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if payment_snapbin_environment == 'production' %}*/
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
/*                             <input type="text" name="payment_snapbin_client_key" value="{{ payment_snapbin_client_key }}" placeholder="{{ payment_snapbin_client_key }}" id="input-client-key" class="form-control"/>*/
/*                             {% if error_client_key %}*/
/*                                 <div class="text-danger">*/
/*                                     {{error_client_key}}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Client Key (v2-specific) -->*/
/* */
/*                     <div class="form-group required sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-server-key">{{ entry_server_key }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapbin_server_key" value="{{ payment_snapbin_server_key }}" placeholder="{{ payment_snapbin_server_key }}" id="input-server-key" class="form-control"/>*/
/*                             {% if error_server_key %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_server_key }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Server Key (v2-specific) -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-enabled-payments">{{ entry_enabled_payments }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapbin_enabled_payments" value="{{ payment_snapbin_enabled_payments }}" placeholder="{{ payment_snapbin_enabled_payments }}" id="input-enabled-payments" class="form-control"/>*/
/*                             <span>Customize allowed payment method, separate payment method code with coma. e.g: bank_transfer,credit_card.*/
/*                                 <br>Leave it default if you are not sure.</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Enabled Payments -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-3ds">{{entry_3ds}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-3ds" name="payment_snapbin_3d_secure">*/
/*                                 {% if payment_snapbin_3d_secure %}*/
/*                                     <option selected="selected" value="1">{{ text_disabled }}</option>*/
/*                                     <option value="0">{{ text_enabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_disabled }}</option>*/
/*                                     <option selected="selected" value="0">{{ text_enabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                             <span>You must enable 3D Secure.<br>Please contact us if you wish to disable this feature in the Production environment.</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- 3ds -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-acq-bank">{{ entry_acq_bank }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapbin_acq_bank" value="{{ payment_snapbin_acq_bank }}" placeholder="{{ payment_snapbin_acq_bank }}" id="input-acq-bank" class="form-control"/>*/
/*                             <span>Specify your acquiring bank for this payment option.<br>Options: BCA, BRI, MEGA, MAYBANK, BNI, MANDIRI, CIMB, etc (Only choose 1 bank).<br>Leave it blank for default.</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Acquiring Bank -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-bin">{{ entry_bin_number }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapbin_number" value="{{ payment_snapbin_number }}" placeholder="{{ payment_snapbin_number }}" id="input-bin" class="form-control"/>*/
/*                             <span>Fill with CC BIN numbers (or bank name) that you want to allow to use this payment button.<br>Separate BIN number with coma Example: 4,5,4811,bni,mandiri.<br>Leave it blank if you are not sure!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Bin Number -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-save-card">*/
/*                             <span data-toggle="tooltip" title="{{ help_savecard }}">{{ entry_savecard }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-save-card" name="payment_snapbin_oneclick">*/
/*                                 {% if payment_snapbin_oneclick %}*/
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
/*                             <span>Leave it disabled if you are not sure!</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Save Card -->*/
/* */
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-redirect">*/
/*                             <span data-toggle="tooltip" title="{{ help_redirect }}">{{ entry_redirect }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" id="input-redirect" name="payment_snapbin_redirect">*/
/*                                 {% if payment_snapbin_redirect %}*/
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
/*                     <div class="form-group sensitive">*/
/*                         <label class="col-sm-2 control-label" for="input-expiry">*/
/*                             <span data-toggle="tooltip" title="{{ help_expiry }}">{{ entry_expiry }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapbin_expiry_duration" placeholder="filled with number" value="{{ payment_snapbin_expiry_duration }}" id="input-expiry" class="form-control"/>*/
/*                             <span>Leave it blank for default.</span>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <select class="form-control" id="input-expiry" name="payment_snapbin_expiry_unit">*/
/*                                 {% for expire in expiry  %}*/
/*                                     {% if expire.unit == payment_snapbin_expiry_unit %}*/
/*                                         <option value="{{ expire.unit }}" selected="selected">{{ expire.unit }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ expire.unit }}">{{ expire.unit }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Custom Expiry -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-custom-field">*/
/*                             <span data-toggle="tooltip" title="{{ help_custom_field }}">{{ entry_custom_field }}</span>*/
/*                         </label>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapbin_custom_field1" value="{{ payment_snapbin_custom_field1 }}" placeholder="{{ payment_snapbin_custom_field1 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapbin_custom_field2" value="{{ payment_snapbin_custom_field2 }}" placeholder="{{ payment_snapbin_custom_field2 }}" class="form-control"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3">*/
/*                             <input type="text" name="payment_snapbin_custom_field3" value="{{ payment_snapbin_custom_field3 }}" placeholder="{{ payment_snapbin_custom_field3 }}" class="form-control"/>*/
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
/*                             <select class="form-control" id="input-mixpanel" name="payment_snapbin_mixpanel">*/
/*                                 {% if payment_snapbin_mixpanel %}*/
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
/*                             <select class="form-control" name="payment_snapbin_status_success">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapbin_status_success %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
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
/*                             <select class="form-control" name="payment_snapbin_status_pending">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapbin_status_pending %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
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
/*                             <select class="form-control" name="payment_snapbin_status_failure">*/
/*                                 {% for order_status in order_statuses  %}*/
/*                                     <option {% if order_status.order_status_id == payment_snapbin_status_failure %} selected {% endif %} value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Failure Order Status -->*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-currency">{{entry_currency_conversion}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_snapbin_currency_conversion" value="{{ payment_snapbin_currency_conversion }}" placeholder="{{ payment_snapbin_currency_conversion }}" class="form-control"/>*/
/*                             <span>Set to 1 if your default currency is IDR.</span>*/
/*                             {% if error_currency_conversion %}*/
/*                                 <div class="text-danger">*/
/*                                     {{ error_currency_conversion }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Currency -->*/
/*                     */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-geo">{{entry_geo_zone}}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select class="form-control" name="payment_snapbin_geo_zone_id">*/
/*                                 <option value="0">{{ text_all_zones }}</option>*/
/*                                 {% for geo_zone in geo_zones  %}*/
/*                                     {% if geo_zone.geo_zone_id == payment_snapbin_geo_zone_id %}*/
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
/*                             <select class="form-control" id="input-status" name="payment_snapbin_status">*/
/* */
/*                                 {% if payment_snapbin_status %}*/
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
/*               <input size="1" type="text" name="payment_snapbin_sort_order" value="{{ payment_snapbin_sort_order }}" placeholder="{{ payment_snapbin_sort_order }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
