<?php

/* ardbeater/template/extension/payment/bank_bca.twig */
class __TwigTemplate_a24eb4b640fa906f1bfe583a8eae39d2c0effb428866986cfeed966e82c73db7 extends Twig_Template
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
        echo "<h2>";
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</h2>
<p><b>";
        // line 2
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</b></p>
<div class=\"well well-sm\">
<img src=\"catalog/view/theme/default/image/payment/";
        // line 4
        echo (isset($context["bank_code"]) ? $context["bank_code"] : null);
        echo ".jpg\"/>
  <p>";
        // line 5
        echo (isset($context["bank"]) ? $context["bank"] : null);
        echo "</p>
  <p>";
        // line 6
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</p>
</div>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 10
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/bank_bca/confirm',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];\t
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "ardbeater/template/extension/payment/bank_bca.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <h2>{{ text_instruction }}</h2>*/
/* <p><b>{{ text_description }}</b></p>*/
/* <div class="well well-sm">*/
/* <img src="catalog/view/theme/default/image/payment/{{ bank_code }}.jpg"/>*/
/*   <p>{{ bank }}</p>*/
/*   <p>{{ text_payment }}</p>*/
/* </div>*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-confirm').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/payment/bank_bca/confirm',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-confirm').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-confirm').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];	*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
