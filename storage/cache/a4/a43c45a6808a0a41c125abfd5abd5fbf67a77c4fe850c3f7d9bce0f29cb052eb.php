<?php

/* extension/module/notify/products.twig */
class __TwigTemplate_65e67044aecfaf4ce3fcba9564daa8b05afeecf7fed1078787fbd45f1d1798f5 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 6
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 7
            echo "<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 11
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 15
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 16
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>  
        <td class=\"text-left\">";
        // line 17
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 18
        echo (isset($context["column_notify"]) ? $context["column_notify"] : null);
        echo "</td>
        <td></td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 23
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 24
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                echo "      <tr>
        <td class=\"text-left\">
          <table class=\"table table-bordered table-hover\"  style=\"min-width:250px;float:left;\">
              <tr>
                <td>
                  ";
                // line 30
                if (($this->getAttribute($context["product"], "customer_id", array()) > 0)) {
                    // line 31
                    echo "                  <span class=\"notify_register\">";
                    echo (isset($context["text_register"]) ? $context["text_register"] : null);
                    echo "</span>
                  ";
                } else {
                    // line 33
                    echo "                  <span class=\"notify_guest\">";
                    echo (isset($context["text_unregister"]) ? $context["text_unregister"] : null);
                    echo "</span>
                  ";
                }
                // line 35
                echo "                </td>
              </tr>
              <tr><td><span class=\"table_icons\"><i class=\"fa fa-user\"></i></span> ";
                // line 37
                echo $this->getAttribute($context["product"], "customer_name", array());
                echo "</td></tr>
              <tr><td><span class=\"table_icons\"><i class=\"fa fa-envelope\"></i></span> ";
                // line 38
                echo $this->getAttribute($context["product"], "customer_email", array());
                echo "</td></tr>
          </table>
        </td>
        <td class=\"text-left cart_product\">
          <table class=\"table table-bordered table-hover\" style=\"min-width:150px;float:left;\">
            <tr>
              <td class=\"text-center\"><a href=\"";
                // line 44
                echo $this->getAttribute($context["product"], "product_edit", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["product"], "product_name", array());
                echo "</a>
              </td>
            </tr>
            <tr>
            <td class=\"text-center\">
              ";
                // line 49
                if ($this->getAttribute($context["product"], "product_thumb", array())) {
                    // line 50
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["product"], "product_edit", array());
                    echo "\" target=\"_blank\"><img src=\"";
                    echo $this->getAttribute($context["product"], "product_thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "product_name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "product_name", array());
                    echo "\" class=\"img-thumbnail\" /></a>
              ";
                }
                // line 52
                echo "            </td>
          </tr>
          </table>
        </td>
        <td class=\"text-left\">
          <span class=\"notify_date\">";
                // line 57
                echo $this->getAttribute($context["product"], "date_added", array());
                echo "</span>
        </td>
        <td class=>
          ";
                // line 60
                if (($this->getAttribute($context["product"], "status", array()) > 0)) {
                    // line 61
                    echo "            <span class=\"notify_yes\">";
                    echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                    echo "</span>
          ";
                } else {
                    // line 63
                    echo "            <span class=\"notify_no\">";
                    echo (isset($context["text_no"]) ? $context["text_no"] : null);
                    echo "</span>
          ";
                }
                // line 65
                echo "        </td>
        <td class=\"text-center\"><a href=\"";
                // line 66
                echo $this->getAttribute($context["product"], "delete", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      ";
        } else {
            // line 70
            echo "      <tr>
        <td class=\"text-center\" colspan=\"5\">";
            // line 71
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 74
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 78
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 79
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/notify/products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 79,  193 => 78,  187 => 74,  181 => 71,  178 => 70,  175 => 69,  164 => 66,  161 => 65,  155 => 63,  149 => 61,  147 => 60,  141 => 57,  134 => 52,  122 => 50,  120 => 49,  110 => 44,  101 => 38,  97 => 37,  93 => 35,  87 => 33,  81 => 31,  79 => 30,  72 => 25,  67 => 24,  65 => 23,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  39 => 11,  31 => 7,  29 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if error_warning %}*/
/* <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* </div>*/
/* {% endif %}*/
/* {% if success %}*/
/* <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* </div>*/
/* {% endif %}*/
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_customer }}</td>*/
/*         <td class="text-left">{{ column_product }}</td>  */
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*         <td class="text-left">{{ column_notify }}</td>*/
/*         <td></td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if products %}*/
/*       {% for product in products %}*/
/*       <tr>*/
/*         <td class="text-left">*/
/*           <table class="table table-bordered table-hover"  style="min-width:250px;float:left;">*/
/*               <tr>*/
/*                 <td>*/
/*                   {% if product.customer_id > 0 %}*/
/*                   <span class="notify_register">{{text_register}}</span>*/
/*                   {% else %}*/
/*                   <span class="notify_guest">{{text_unregister}}</span>*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr><td><span class="table_icons"><i class="fa fa-user"></i></span> {{product.customer_name}}</td></tr>*/
/*               <tr><td><span class="table_icons"><i class="fa fa-envelope"></i></span> {{product.customer_email}}</td></tr>*/
/*           </table>*/
/*         </td>*/
/*         <td class="text-left cart_product">*/
/*           <table class="table table-bordered table-hover" style="min-width:150px;float:left;">*/
/*             <tr>*/
/*               <td class="text-center"><a href="{{product.product_edit}}" target="_blank">{{product.product_name}}</a>*/
/*               </td>*/
/*             </tr>*/
/*             <tr>*/
/*             <td class="text-center">*/
/*               {% if product.product_thumb %}*/
/*               <a href="{{product.product_edit}}" target="_blank"><img src="{{product.product_thumb}}" alt="{{product.product_name}}" title="{{product.product_name}}" class="img-thumbnail" /></a>*/
/*               {% endif %}*/
/*             </td>*/
/*           </tr>*/
/*           </table>*/
/*         </td>*/
/*         <td class="text-left">*/
/*           <span class="notify_date">{{ product.date_added }}</span>*/
/*         </td>*/
/*         <td class=>*/
/*           {% if product.status > 0 %}*/
/*             <span class="notify_yes">{{text_yes}}</span>*/
/*           {% else %}*/
/*             <span class="notify_no">{{text_no}}</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td class="text-center"><a href="{{ product.delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-warning"><i class="fa fa-trash-o"></i></a></td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
