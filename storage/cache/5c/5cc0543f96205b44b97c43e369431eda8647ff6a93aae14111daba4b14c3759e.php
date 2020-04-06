<?php

/* ardbeater/template/account/order_info.twig */
class __TwigTemplate_4cc4f8f486db8c4529f492d94c798d2e3b31136c9cf22a04b1ff09fb83a1c31a extends Twig_Template
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
        echo "
<link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/tracking.css\" rel=\"stylesheet\">
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  ";
        // line 10
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 11
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 15
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 21
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 29
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 33
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 38
        if ((isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            echo " <b>";
            echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
            echo "</b> ";
            echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
            echo "<br />
              ";
        }
        // line 39
        echo " <b>";
        echo (isset($context["text_id_order"]) ? $context["text_id_order"] : null);
        echo "</b> #";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
              <b>";
        // line 40
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 41
        if ((isset($context["payment_method"]) ? $context["payment_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</b> ";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "<br />
              ";
        }
        // line 43
        echo "              ";
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 50
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
            ";
        // line 51
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 52
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 53
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 57
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
            ";
        // line 58
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 59
            echo "            <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 60
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 67
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 68
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 69
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 70
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 71
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              ";
        // line 72
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 73
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 74
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 79
            echo "          <tr>
            <td class=\"text-left\">";
            // line 80
            echo $this->getAttribute($context["product"], "name", array());
            echo "
              ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              &nbsp;<small> - ";
                // line 82
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 83
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 84
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 85
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 86
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 87
            if ($this->getAttribute($context["product"], "reorder", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "reorder", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reorder"]) ? $context["button_reorder"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo $this->getAttribute($context["product"], "return", array());
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_return"]) ? $context["button_return"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 91
            echo "          <tr>
            <td class=\"text-left\">";
            // line 92
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 95
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 96
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            ";
            // line 97
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 98
                echo "            <td></td>
            ";
            }
            // line 99
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 106
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\" style=\"width:300px\"><b>";
            // line 108
            echo $this->getAttribute($context["total"], "title", array());
            echo "</b></td>
            <td class=\"text-right\" style=\"width:110px\">";
            // line 109
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td> 
            ";
            // line 110
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 111
                echo "            <td></td>
            ";
            }
            // line 113
            echo "          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "          ";
        if ((isset($context["module_point_system_status"]) ? $context["module_point_system_status"] : null)) {
            // line 116
            echo "          <tr>
            ";
            // line 117
            if ((isset($context["subtotal"]) ? $context["subtotal"] : null)) {
                echo " 
              <td colspan=\"3\"></td>
              <td class=\"text-right\"><b>Reward Points:</b></td>
              <td class=\"text-right\">";
                // line 120
                echo (isset($context["subtotal"]) ? $context["subtotal"] : null);
                echo "</td>
              <td></td>
            ";
            }
            // line 122
            echo " 
          </tr>
          ";
        }
        // line 125
        echo "          </tfoot>
          
        </table>
      </div>
      ";
        // line 129
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 130
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 133
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 138
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 143
        echo "      ";
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 144
            echo "      <h3>";
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</h3>
      

      <div class=\"step\">
      ";
            // line 148
            if (((isset($context["last_histories"]) ? $context["last_histories"] : null) == "Pending")) {
                // line 149
                echo "        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/pending.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PENDING</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/process.png\"> <p class=\"proges\"><i class=\"fa fa-refresh\"></i></p> <p class=\"proges\"><b>PROCESSED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/shipped.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>SHIPPED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/complete.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>COMPLETE</b></p> </div>
      ";
            } elseif ((            // line 153
(isset($context["last_histories"]) ? $context["last_histories"] : null) == "Processed")) {
                // line 154
                echo "        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/pending.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PENDING</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/process.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PROCESSED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/shipped.png\"> <p class=\"proges\"><i class=\"fa fa-refresh\"></i></p> <p class=\"proges\"><b>SHIPPED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/complete.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>COMPLETE</b></p> </div>
      ";
            } elseif ((            // line 158
(isset($context["last_histories"]) ? $context["last_histories"] : null) == "Shipped")) {
                // line 159
                echo "        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/pending.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PENDING</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/process.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PROCESSED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/shipped.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>SHIPPED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/complete.png\"> <p class=\"proges\"><i class=\"fa fa-refresh\"></i></p> <p class=\"proges\"><b>COMPLETE</b></p> </div>
      ";
            } elseif ((            // line 163
(isset($context["last_histories"]) ? $context["last_histories"] : null) == "Complete")) {
                // line 164
                echo "        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/pending.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PENDING</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/process.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>PROCESSED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/shipped.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>SHIPPED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/complete.png\"> <p class=\"complete\"><i class=\"fa fa-check\"></i></p> <p class=\"complete\"><b>COMPLETE</b></p> </div>
      ";
            } else {
                // line 169
                echo "        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/pending.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>PENDING</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/process.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>PROCESSED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/shipped.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>SHIPPED</b></p> </div>
        <div class=\"step1\"> <img src=\"http://localhost/armoni/image/tracking/complete.png\"> <p><i class=\"fa fa-times\"></i></p> <p><b>COMPLETE</b></p> </div>
      ";
            }
            // line 174
            echo "      </div>


      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 180
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 181
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 182
            echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 187
            if ((isset($context["histories"]) ? $context["histories"] : null)) {
                // line 188
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 189
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 190
                    echo $this->getAttribute($context["history"], "date_added", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 191
                    echo $this->getAttribute($context["history"], "status", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 192
                    echo $this->getAttribute($context["history"], "comment", array());
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "        ";
            } else {
                // line 196
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 197
                echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
                echo "</td>
        </tr>
        ";
            }
            // line 200
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 204
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 205
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 207
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 208
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 210
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "ardbeater/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 210,  551 => 208,  547 => 207,  540 => 205,  537 => 204,  531 => 200,  525 => 197,  522 => 196,  519 => 195,  510 => 192,  506 => 191,  502 => 190,  499 => 189,  494 => 188,  492 => 187,  484 => 182,  480 => 181,  476 => 180,  468 => 174,  461 => 169,  454 => 164,  452 => 163,  446 => 159,  444 => 158,  438 => 154,  436 => 153,  430 => 149,  428 => 148,  420 => 144,  417 => 143,  409 => 138,  401 => 133,  396 => 130,  394 => 129,  388 => 125,  383 => 122,  377 => 120,  371 => 117,  368 => 116,  365 => 115,  358 => 113,  354 => 111,  352 => 110,  348 => 109,  344 => 108,  340 => 106,  336 => 105,  330 => 101,  323 => 99,  319 => 98,  317 => 97,  313 => 96,  309 => 95,  303 => 92,  300 => 91,  295 => 90,  276 => 87,  272 => 86,  268 => 85,  264 => 84,  260 => 83,  249 => 82,  243 => 81,  239 => 80,  236 => 79,  232 => 78,  226 => 74,  222 => 73,  220 => 72,  216 => 71,  212 => 70,  208 => 69,  204 => 68,  200 => 67,  191 => 60,  185 => 59,  183 => 58,  179 => 57,  173 => 53,  167 => 52,  165 => 51,  161 => 50,  144 => 43,  135 => 41,  129 => 40,  122 => 39,  113 => 38,  105 => 33,  98 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  71 => 21,  66 => 20,  58 => 16,  55 => 15,  47 => 11,  45 => 10,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/tracking.css" rel="stylesheet">*/
/* <div id="account-order" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" colspan="2">{{ text_order_detail }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%;">{% if invoice_no %} <b>{{ text_invoice_no }}</b> {{ invoice_no }}<br />*/
/*               {% endif %} <b>{{ text_id_order }}</b> #{{ order_id }}<br />*/
/*               <b>{{ text_date_added }}</b> {{ date_added }}</td>*/
/*             <td class="text-left" style="width: 50%;">{% if payment_method %} <b>{{ text_payment_method }}</b> {{ payment_method }}<br />*/
/*               {% endif %}*/
/*               {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }} {% endif %}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left">{{ shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               {% if products %}*/
/*               <td style="width: 20px;"></td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-left">{{ product.name }}*/
/*               {% for option in product.option %} <br />*/
/*               &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}</td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.quantity }}</td>*/
/*             <td class="text-right">{{ product.price }}</td>*/
/*             <td class="text-right">{{ product.total }}</td>*/
/*             <td class="text-right" style="white-space: nowrap;">{% if product.reorder %} <a href="{{ product.reorder }}" data-toggle="tooltip" title="{{ button_reorder }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a> {% endif %} <a href="{{ product.return }}" data-toggle="tooltip" title="{{ button_return }}" class="btn btn-danger"><i class="fa fa-reply"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-left">{{ voucher.description }}</td>*/
/*             <td class="text-left"></td>*/
/*             <td class="text-right">1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %} </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*           <tfoot>*/
/*           */
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td colspan="3"></td>*/
/*             <td class="text-right" style="width:300px"><b>{{ total.title }}</b></td>*/
/*             <td class="text-right" style="width:110px">{{ total.text }}</td> */
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %}*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% if module_point_system_status %}*/
/*           <tr>*/
/*             {% if subtotal %} */
/*               <td colspan="3"></td>*/
/*               <td class="text-right"><b>Reward Points:</b></td>*/
/*               <td class="text-right">{{ subtotal }}</td>*/
/*               <td></td>*/
/*             {% endif %} */
/*           </tr>*/
/*           {% endif %}*/
/*           </tfoot>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       {% if comment %}*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ text_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ comment }}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       {% endif %}*/
/*       {% if histories %}*/
/*       <h3>{{ text_history }}</h3>*/
/*       */
/* */
/*       <div class="step">*/
/*       {% if last_histories == 'Pending' %}*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/pending.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PENDING</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/process.png"> <p class="proges"><i class="fa fa-refresh"></i></p> <p class="proges"><b>PROCESSED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/shipped.png"> <p><i class="fa fa-times"></i></p> <p><b>SHIPPED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/complete.png"> <p><i class="fa fa-times"></i></p> <p><b>COMPLETE</b></p> </div>*/
/*       {% elseif last_histories == 'Processed' %}*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/pending.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PENDING</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/process.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PROCESSED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/shipped.png"> <p class="proges"><i class="fa fa-refresh"></i></p> <p class="proges"><b>SHIPPED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/complete.png"> <p><i class="fa fa-times"></i></p> <p><b>COMPLETE</b></p> </div>*/
/*       {% elseif last_histories == 'Shipped' %}*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/pending.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PENDING</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/process.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PROCESSED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/shipped.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>SHIPPED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/complete.png"> <p class="proges"><i class="fa fa-refresh"></i></p> <p class="proges"><b>COMPLETE</b></p> </div>*/
/*       {% elseif last_histories == 'Complete' %}*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/pending.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PENDING</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/process.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>PROCESSED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/shipped.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>SHIPPED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/complete.png"> <p class="complete"><i class="fa fa-check"></i></p> <p class="complete"><b>COMPLETE</b></p> </div>*/
/*       {% else %}*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/pending.png"> <p><i class="fa fa-times"></i></p> <p><b>PENDING</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/process.png"> <p><i class="fa fa-times"></i></p> <p><b>PROCESSED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/shipped.png"> <p><i class="fa fa-times"></i></p> <p><b>SHIPPED</b></p> </div>*/
/*         <div class="step1"> <img src="http://localhost/armoni/image/tracking/complete.png"> <p><i class="fa fa-times"></i></p> <p><b>COMPLETE</b></p> </div>*/
/*       {% endif %}*/
/*       </div>*/
/* */
/* */
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_date_added }}</td>*/
/*             <td class="text-left">{{ column_status }}</td>*/
/*             <td class="text-left">{{ column_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% if histories %}*/
/*         {% for history in histories %}*/
/*         <tr>*/
/*           <td class="text-left">{{ history.date_added }}</td>*/
/*           <td class="text-left">{{ history.status }}</td>*/
/*           <td class="text-left">{{ history.comment }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <tr>*/
/*           <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*           </tbody>*/
/*         */
/*       </table>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
