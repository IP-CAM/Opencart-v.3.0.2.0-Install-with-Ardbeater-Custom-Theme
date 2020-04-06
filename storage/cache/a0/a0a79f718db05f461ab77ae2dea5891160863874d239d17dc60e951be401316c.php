<?php

/* __string_template__1a28a26e1ddff9b69b9379c2c086665438020491b834c6e3e84b027ac2c459c1 */
class __TwigTemplate_8ff40808d659eb11bd3818ed6c4138b67deebcbafc01ffcbdf121cfb2d795071 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"heading-left\"><h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3><hr class=\"gradient-divider\"></hr></div>
    <div class=\"panel-body\">
      <div class=\"form-horizontal\">
        <div class=\"form-group required\">
      \t\t<p style=\"margin-left:16px\"><a style=\"color:red\">*</a> ";
        // line 6
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</p>
          <div class=\"col-sm-12\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
              <option value=\"\">";
        // line 9
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
              ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 11
            echo "              ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 12
                echo "              <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            } else {
                // line 14
                echo "              <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            }
            // line 16
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group required\">
      \t\t<p style=\"margin-left:16px\"><a style=\"color:red\">*</a> ";
        // line 21
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</p>
          <div class=\"col-sm-12\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group required\">
      \t\t<p style=\"margin-left:16px\"><a style=\"color:red\">*</a> ";
        // line 28
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo " (gram)</p>
          <div class=\"col-sm-12\">
            <input type=\"text\" name=\"weight\" value=\"";
        // line 30
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" onkeypress=\"return event.charCode >= 48 && event.charCode <=57\" class=\"form-control\" />
          </div>
        </div>
        <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 33
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" style=\"float:right\">";
        echo (isset($context["button_quote"]) ? $context["button_quote"] : null);
        echo "</button>
      </div>
      <script type=\"text/javascript\"><!--
\$('#button-quote').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/cek_ongkir/quote',
\t\ttype: 'post',
\t\tdata: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&weight=' + encodeURIComponent(\$('input[name=\\'weight\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-quote').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-quote').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['error']['country']) {
\t\t\t\t\t\$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['zone']) {
\t\t\t\t\t\$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['weight']) {
\t\t\t\t\t\$('input[name=\\'weight\\']').after('<div class=\"text-danger\">' + json['error']['weight'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['shipping_method']) {
\t\t\t\t\$('#modal-shipping').remove();

\t\t\t\thtml  = '<div id=\"modal-shipping\" class=\"modal\">';
\t\t\t\thtml += '  <div class=\"modal-dialog\" style=\"width:700px\">';
\t\t\t\thtml += '    <div class=\"modal-content\" style=\"width:700px\">';
\t\t\t\thtml += '      <div class=\"modal-header\">';
\t\t\t\thtml += '\t\t <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>';
\t\t\t\thtml += '        <h3 class=\"modal-title\">&#128666; <strong>";
        // line 79
        echo (isset($context["text_ongkir_method"]) ? $context["text_ongkir_method"] : null);
        echo "</strong></h3>';
\t\t\t\thtml += '      </div><hr class=\"gradient-divider\"></hr>';
\t\t\t\thtml += '      <div class=\"modal-body\">';

\t\t\t\tfor (i in json['shipping_method']) {
\t\t\t\t\thtml += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\thtml += '<div class=\"checkbox\">';
\t\t\t\t\t\t\thtml += '  <label>';
\t\t\t\t\t\t\thtml += '<input type=\"checkbox\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t\t\t\t\t\t\thtml += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div> ';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#modal-shipping').modal('show');

\t\t\t\t\$('input[name=\\'shipping_method\\']').on('change', function() {
\t\t\t\t\t\$('#button-shipping').prop('disabled', false);
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>

<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/cek_ongkir/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['weight_required'] == '1') {
\t\t\t\t\$('input[name=\\'weight\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'weight\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 134
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 140
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 147
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1a28a26e1ddff9b69b9379c2c086665438020491b834c6e3e84b027ac2c459c1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 147,  215 => 140,  206 => 134,  148 => 79,  97 => 33,  89 => 30,  84 => 28,  74 => 21,  68 => 17,  62 => 16,  54 => 14,  46 => 12,  43 => 11,  39 => 10,  35 => 9,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="heading-left"><h3>{{ heading_title }}</h3><hr class="gradient-divider"></hr></div>*/
/*     <div class="panel-body">*/
/*       <div class="form-horizontal">*/
/*         <div class="form-group required">*/
/*       		<p style="margin-left:16px"><a style="color:red">*</a> {{ entry_country }}</p>*/
/*           <div class="col-sm-12">*/
/*             <select name="country_id" id="input-country" class="form-control">*/
/*               <option value="">{{ text_select }}</option>*/
/*               {% for country in countries %}*/
/*               {% if country.country_id == country_id %}*/
/*               <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*               {% else %}*/
/*               <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*       		<p style="margin-left:16px"><a style="color:red">*</a> {{ entry_zone }}</p>*/
/*           <div class="col-sm-12">*/
/*             <select name="zone_id" id="input-zone" class="form-control">*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*       		<p style="margin-left:16px"><a style="color:red">*</a> {{ entry_weight }} (gram)</p>*/
/*           <div class="col-sm-12">*/
/*             <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" />*/
/*           </div>*/
/*         </div>*/
/*         <button type="button" id="button-quote" data-loading-text="{{ text_loading }}" class="btn btn-primary" style="float:right">{{ button_quote }}</button>*/
/*       </div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-quote').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/module/cek_ongkir/quote',*/
/* 		type: 'post',*/
/* 		data: 'country_id=' + $('select[name=\'country_id\']').val() + '&zone_id=' + $('select[name=\'zone_id\']').val() + '&weight=' + encodeURIComponent($('input[name=\'weight\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-quote').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-quote').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				}*/
/* */
/* 				if (json['error']['country']) {*/
/* 					$('select[name=\'country_id\']').after('<div class="text-danger">' + json['error']['country'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['zone']) {*/
/* 					$('select[name=\'zone_id\']').after('<div class="text-danger">' + json['error']['zone'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['weight']) {*/
/* 					$('input[name=\'weight\']').after('<div class="text-danger">' + json['error']['weight'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['shipping_method']) {*/
/* 				$('#modal-shipping').remove();*/
/* */
/* 				html  = '<div id="modal-shipping" class="modal">';*/
/* 				html += '  <div class="modal-dialog" style="width:700px">';*/
/* 				html += '    <div class="modal-content" style="width:700px">';*/
/* 				html += '      <div class="modal-header">';*/
/* 				html += '		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';*/
/* 				html += '        <h3 class="modal-title">&#128666; <strong>{{ text_ongkir_method }}</strong></h3>';*/
/* 				html += '      </div><hr class="gradient-divider"></hr>';*/
/* 				html += '      <div class="modal-body">';*/
/* */
/* 				for (i in json['shipping_method']) {*/
/* 					html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';*/
/* */
/* 					if (!json['shipping_method'][i]['error']) {*/
/* 						for (j in json['shipping_method'][i]['quote']) {*/
/* 							html += '<div class="checkbox">';*/
/* 							html += '  <label>';*/
/* 							html += '<input type="checkbox" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" />';*/
/* 							html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';*/
/* 						}*/
/* 					} else {*/
/* 						html += '<div class="alert alert-danger alert-dismissible">' + json['shipping_method'][i]['error'] + '</div>';*/
/* 					}*/
/* 				}*/
/* 				html += '  </div>';*/
/* 				html += '</div> ';*/
/* */
/* 				$('body').append(html);*/
/* */
/* 				$('#modal-shipping').modal('show');*/
/* */
/* 				$('input[name=\'shipping_method\']').on('change', function() {*/
/* 					$('#button-shipping').prop('disabled', false);*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/module/cek_ongkir/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['weight_required'] == '1') {*/
/* 				$('input[name=\'weight\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'weight\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/*     </div>*/
/* </div>*/
/* */
