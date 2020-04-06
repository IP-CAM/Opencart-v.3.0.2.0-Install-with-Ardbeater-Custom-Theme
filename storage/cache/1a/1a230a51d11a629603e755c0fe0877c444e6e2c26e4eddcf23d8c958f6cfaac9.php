<?php

/* __string_template__af7dd1785c6e9d5e521cd0c7beb3c1e63fd30c415561439a012bcb4757282a6c */
class __TwigTemplate_f2986f7c43e6b80b125ee2d1dab5245a6b057fefab1072aed56292097e4fbbd4 extends Twig_Template
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
      \t\t<p style=\"margin-left:16px\"><a style=\"color:red\">*</a> ID Order</p>
          <div class=\"col-sm-12\">
            <input type=\"text\" name=\"order_id\" value=\"";
        // line 8
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" placeholder=\"ID Order\" id=\"input-oder-id\" onkeypress=\"return event.charCode >= 48 && event.charCode <=57\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group required\">
      \t\t<p style=\"margin-left:16px\"><a style=\"color:red\">*</a> E-Mail Address</p>
          <div class=\"col-sm-12\">
            <input type=\"text\" name=\"e_mail\" value=\"";
        // line 14
        echo (isset($context["e_mail"]) ? $context["e_mail"] : null);
        echo "\" placeholder=\"E-Mail Address\" id=\"input-e-mail\" class=\"form-control\" />
          </div>
        </div>
        <button type=\"button\" id=\"button-order\" data-loading-text=\"";
        // line 17
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"  style=\"float:right\">View Order</button>
      </div>
      <script type=\"text/javascript\"><!--
\$('#button-order').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/view_order/info',
\t\ttype: 'post',
\t\tdata: 'order_id=' + encodeURIComponent(\$('input[name=\\'order_id\\']').val()) + '&e_mail=' + encodeURIComponent(\$('input[name=\\'e_mail\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-order').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-order').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['error']['order_id']) {
\t\t\t\t\t\$('input[name=\\'order_id\\']').after('<div class=\"text-danger\">' + json['error']['order_id'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['e_mail']) {
\t\t\t\t\t\$('input[name=\\'e_mail\\']').after('<div class=\"text-danger\">' + json['error']['e_mail'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['id_order'] && json['email']) {
\t\t\t\t\$('#view-order').remove();
 
\t\t\t\thtml  = '<div id=\"view-order\" class=\"modal\">';
\t\t\t\thtml += '  <div class=\"modal-dialog\" style=\"width:1000px\">';
\t\t\t\thtml += '    <div class=\"modal-content\" style=\"width:1000px\">';
\t\t\t\thtml += '      <div class=\"modal-header\">';
\t\t\t\thtml += '\t\t <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>';
\t\t\t\thtml += '        <h3 class=\"modal-title\">&#128722; ' + json['heading_title'] + '</h3>';
\t\t\t\thtml += '      </div><hr class=\"gradient-divider\"></hr>';
\t\t\t\thtml += '      <div class=\"modal-body\">';
\t\t\t\t\t\t\tif (json['histories']) {
\t\t\t\thtml += '\t\t<table class=\"table table-bordered table-hover\">';
\t\t\t\thtml += '\t\t  <thead style=\"background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);\">';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"color:#fff\"><b>' + json['column_date_added'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"color:#fff\"><b>' + json['column_status'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"color:#fff\"><b>' + json['column_comment'] + '</b></td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </thead>';
\t\t\t\thtml += '\t\t  <tbody>';
\t\t\t\t\t\t\t\tfor (i in json['histories']) {
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['histories'][i]['date_added'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['histories'][i]['status'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['histories'][i]['comment'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\t\t\t\t\t}
\t\t\t\thtml += '\t\t  </tbody>';
\t\t\t\thtml += '\t\t</table>';
\t\t\t\t\t\t\t}
\t\t\t\thtml += '\t\t<table class=\"table table-bordered table-hover\">';
\t\t\t\thtml += '\t\t  <thead style=\"background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);\">';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" colspan=\"2\"><b style=\"color:#fff\">' + json['text_order_detail'] + '</b></td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </thead>';
\t\t\t\thtml += '\t\t  <tbody>';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"width: 50%;\"><b>' + json['text_order_id'] + '</b> #' + json['id_order'] + '<br /> <b>' + json['text_date_added'] + '</b> ' + json['date_added'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"width: 50%;\"><b>' + json['text_payment_method'] + '</b> ' + json['payment_method'] + '<br /> <b>' + json['text_shipping_method'] + '</b> ' + json['shipping_method'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </tbody>';
\t\t\t\thtml += '\t\t</table>';
\t\t\t\thtml += '\t\t<table class=\"table table-bordered table-hover\">';
\t\t\t\thtml += '\t\t  <thead style=\"background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);\">';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"width: 50%; vertical-align: top; color:#fff\"><b>' + json['text_payment_address'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\" style=\"width: 50%; vertical-align: top; color:#fff\"><b>' + json['text_shipping_address'] + '</b></td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </thead>';
\t\t\t\thtml += '\t\t  <tbody>';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['payment_address'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['shipping_address'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </tbody>';
\t\t\t\thtml += '\t\t</table>';
\t\t\t\thtml += '\t  <div class=\"table-responsive\">';
\t\t\t\thtml += '\t\t<table class=\"table table-bordered table-hover\">';
\t\t\t\thtml += '\t\t  <thead style=\"background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);\">';
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\"><b style=\"color:#fff\">' + json['column_name'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\"><b style=\"color:#fff\">' + json['column_model'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\"><b style=\"color:#fff\">' + json['column_quantity'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\"><b style=\"color:#fff\">' + json['column_price'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\"><b style=\"color:#fff\">' + json['column_total'] + '</b></td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\thtml += '\t\t  </thead>';
\t\t\t\thtml += '\t\t  <tbody>';
\t\t\t\t\t\t\t\tfor (i in json['products']) {
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['products'][i]['name'] + '';
\t\t\t\t\t\t\t\t\tfor (j in json['products'][i]['option']) {
\t\t\t\thtml += '\t\t\t\t<br /> &nbsp;<small> - ' + json['products'][i]['option'][j]['name'] + ': ' + json['products'][i]['option'][j]['value'] + '</small>';
\t\t\t\t\t\t\t\t\t}
\t\t\t\thtml += '\t\t\t    </td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['products'][i]['model'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">' + json['products'][i]['quantity'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">' + json['products'][i]['price'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">' + json['products'][i]['total'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\">' + json['vouchers'][i]['description'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-left\"></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">1</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">' + json['vouchers'][i]['amount'] + '</td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\">' + json['vouchers'][i]['amount'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\t\t\t\t\t}
\t\t\t\thtml += '\t\t  </tbody>';
\t\t\t\thtml += '\t\t  <tfoot>';
\t\t\t\t\t\t\t\tfor (i in json['totals']) {
\t\t\t\thtml += '\t\t    <tr>';
\t\t\t\thtml += '\t\t\t  <td colspan=\"3\"></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\" style=\"width:300px\"><b>' + json['totals'][i]['title'] + '</b></td>';
\t\t\t\thtml += '\t\t\t  <td class=\"text-right\" style=\"width:110px\">' + json['totals'][i]['text'] + '</td>';
\t\t\t\thtml += '\t\t    </tr>';
\t\t\t\t\t\t\t\t}
\t\t\t\thtml += '\t\t  </tfoot>';
\t\t\t\thtml += '\t\t</table>';
\t\t\t\thtml += '     </div>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div> ';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#view-order').modal('show');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__af7dd1785c6e9d5e521cd0c7beb3c1e63fd30c415561439a012bcb4757282a6c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  40 => 14,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="heading-left"><h3>{{ heading_title }}</h3><hr class="gradient-divider"></hr></div>*/
/*     <div class="panel-body">*/
/*       <div class="form-horizontal">*/
/*         <div class="form-group required">*/
/*       		<p style="margin-left:16px"><a style="color:red">*</a> ID Order</p>*/
/*           <div class="col-sm-12">*/
/*             <input type="text" name="order_id" value="{{ order_id }}" placeholder="ID Order" id="input-oder-id" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" />*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*       		<p style="margin-left:16px"><a style="color:red">*</a> E-Mail Address</p>*/
/*           <div class="col-sm-12">*/
/*             <input type="text" name="e_mail" value="{{ e_mail }}" placeholder="E-Mail Address" id="input-e-mail" class="form-control" />*/
/*           </div>*/
/*         </div>*/
/*         <button type="button" id="button-order" data-loading-text="{{ text_loading }}" class="btn btn-primary"  style="float:right">View Order</button>*/
/*       </div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-order').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/module/view_order/info',*/
/* 		type: 'post',*/
/* 		data: 'order_id=' + encodeURIComponent($('input[name=\'order_id\']').val()) + '&e_mail=' + encodeURIComponent($('input[name=\'e_mail\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-order').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-order').button('reset');*/
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
/* 				if (json['error']['order_id']) {*/
/* 					$('input[name=\'order_id\']').after('<div class="text-danger">' + json['error']['order_id'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['e_mail']) {*/
/* 					$('input[name=\'e_mail\']').after('<div class="text-danger">' + json['error']['e_mail'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['id_order'] && json['email']) {*/
/* 				$('#view-order').remove();*/
/*  */
/* 				html  = '<div id="view-order" class="modal">';*/
/* 				html += '  <div class="modal-dialog" style="width:1000px">';*/
/* 				html += '    <div class="modal-content" style="width:1000px">';*/
/* 				html += '      <div class="modal-header">';*/
/* 				html += '		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';*/
/* 				html += '        <h3 class="modal-title">&#128722; ' + json['heading_title'] + '</h3>';*/
/* 				html += '      </div><hr class="gradient-divider"></hr>';*/
/* 				html += '      <div class="modal-body">';*/
/* 							if (json['histories']) {*/
/* 				html += '		<table class="table table-bordered table-hover">';*/
/* 				html += '		  <thead style="background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);">';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left" style="color:#fff"><b>' + json['column_date_added'] + '</b></td>';*/
/* 				html += '			  <td class="text-left" style="color:#fff"><b>' + json['column_status'] + '</b></td>';*/
/* 				html += '			  <td class="text-left" style="color:#fff"><b>' + json['column_comment'] + '</b></td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </thead>';*/
/* 				html += '		  <tbody>';*/
/* 								for (i in json['histories']) {*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left">' + json['histories'][i]['date_added'] + '</td>';*/
/* 				html += '			  <td class="text-left">' + json['histories'][i]['status'] + '</td>';*/
/* 				html += '			  <td class="text-left">' + json['histories'][i]['comment'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 								}*/
/* 				html += '		  </tbody>';*/
/* 				html += '		</table>';*/
/* 							}*/
/* 				html += '		<table class="table table-bordered table-hover">';*/
/* 				html += '		  <thead style="background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);">';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left" colspan="2"><b style="color:#fff">' + json['text_order_detail'] + '</b></td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </thead>';*/
/* 				html += '		  <tbody>';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left" style="width: 50%;"><b>' + json['text_order_id'] + '</b> #' + json['id_order'] + '<br /> <b>' + json['text_date_added'] + '</b> ' + json['date_added'] + '</td>';*/
/* 				html += '			  <td class="text-left" style="width: 50%;"><b>' + json['text_payment_method'] + '</b> ' + json['payment_method'] + '<br /> <b>' + json['text_shipping_method'] + '</b> ' + json['shipping_method'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </tbody>';*/
/* 				html += '		</table>';*/
/* 				html += '		<table class="table table-bordered table-hover">';*/
/* 				html += '		  <thead style="background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);">';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left" style="width: 50%; vertical-align: top; color:#fff"><b>' + json['text_payment_address'] + '</b></td>';*/
/* 				html += '			  <td class="text-left" style="width: 50%; vertical-align: top; color:#fff"><b>' + json['text_shipping_address'] + '</b></td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </thead>';*/
/* 				html += '		  <tbody>';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left">' + json['payment_address'] + '</td>';*/
/* 				html += '			  <td class="text-left">' + json['shipping_address'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </tbody>';*/
/* 				html += '		</table>';*/
/* 				html += '	  <div class="table-responsive">';*/
/* 				html += '		<table class="table table-bordered table-hover">';*/
/* 				html += '		  <thead style="background-image: linear-gradient(to right, #D8225E, #B73794 25%, #7254B6 50%, #3981D1 74%, #3BBFEE);">';*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left"><b style="color:#fff">' + json['column_name'] + '</b></td>';*/
/* 				html += '			  <td class="text-left"><b style="color:#fff">' + json['column_model'] + '</b></td>';*/
/* 				html += '			  <td class="text-right"><b style="color:#fff">' + json['column_quantity'] + '</b></td>';*/
/* 				html += '			  <td class="text-right"><b style="color:#fff">' + json['column_price'] + '</b></td>';*/
/* 				html += '			  <td class="text-right"><b style="color:#fff">' + json['column_total'] + '</b></td>';*/
/* 				html += '		    </tr>';*/
/* 				html += '		  </thead>';*/
/* 				html += '		  <tbody>';*/
/* 								for (i in json['products']) {*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left">' + json['products'][i]['name'] + '';*/
/* 									for (j in json['products'][i]['option']) {*/
/* 				html += '				<br /> &nbsp;<small> - ' + json['products'][i]['option'][j]['name'] + ': ' + json['products'][i]['option'][j]['value'] + '</small>';*/
/* 									}*/
/* 				html += '			    </td>';*/
/* 				html += '			  <td class="text-left">' + json['products'][i]['model'] + '</td>';*/
/* 				html += '			  <td class="text-right">' + json['products'][i]['quantity'] + '</td>';*/
/* 				html += '			  <td class="text-right">' + json['products'][i]['price'] + '</td>';*/
/* 				html += '			  <td class="text-right">' + json['products'][i]['total'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 								}*/
/* */
/* 								for (i in json['vouchers']) {*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td class="text-left">' + json['vouchers'][i]['description'] + '</td>';*/
/* 				html += '			  <td class="text-left"></td>';*/
/* 				html += '			  <td class="text-right">1</td>';*/
/* 				html += '			  <td class="text-right">' + json['vouchers'][i]['amount'] + '</td>';*/
/* 				html += '			  <td class="text-right">' + json['vouchers'][i]['amount'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 								}*/
/* 				html += '		  </tbody>';*/
/* 				html += '		  <tfoot>';*/
/* 								for (i in json['totals']) {*/
/* 				html += '		    <tr>';*/
/* 				html += '			  <td colspan="3"></td>';*/
/* 				html += '			  <td class="text-right" style="width:300px"><b>' + json['totals'][i]['title'] + '</b></td>';*/
/* 				html += '			  <td class="text-right" style="width:110px">' + json['totals'][i]['text'] + '</td>';*/
/* 				html += '		    </tr>';*/
/* 								}*/
/* 				html += '		  </tfoot>';*/
/* 				html += '		</table>';*/
/* 				html += '     </div>';*/
/* 				html += '  </div>';*/
/* 				html += '</div> ';*/
/* */
/* 				$('body').append(html);*/
/* */
/* 				$('#view-order').modal('show');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/*     </div>*/
/* </div>*/
