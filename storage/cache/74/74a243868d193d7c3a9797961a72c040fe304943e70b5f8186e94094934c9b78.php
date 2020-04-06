<?php

/* ardbeater/template/extension/payment/snap_checkout_failure.twig */
class __TwigTemplate_b00a0533cb17601fb71b8b8871de4256db40228a77c74fedfa45cdce012c33e8 extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " ";
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<div class=\"container\">";
        // line 2
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t<h2 class=\"text-center\">Payment Failed!</h2>
\t<p class=\"text-center\">";
        // line 4
        echo (isset($context["text_failure"]) ? $context["text_failure"] : null);
        echo "</p>
\t<a href=\"";
        // line 5
        echo (isset($context["checkout_url"]) ? $context["checkout_url"] : null);
        echo "\">
\t\t<div class=\"text-center\">
\t\t\t<button class=\"btn btn-primary\">Re-Checkout!</button>
\t\t</div>
\t</a>
";
        // line 10
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 12
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "ardbeater/template/extension/payment/snap_checkout_failure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 10,  36 => 5,  32 => 4,  27 => 2,  19 => 1,);
    }
}
/* {{header}} {{column_left}} {{ column_right }}*/
/* <div class="container">{{content_top}}*/
/* 	<h2 class="text-center">Payment Failed!</h2>*/
/* 	<p class="text-center">{{ text_failure }}</p>*/
/* 	<a href="{{ checkout_url }}">*/
/* 		<div class="text-center">*/
/* 			<button class="btn btn-primary">Re-Checkout!</button>*/
/* 		</div>*/
/* 	</a>*/
/* {{content_bottom}}*/
/* </div>*/
/* {{footer}}*/
