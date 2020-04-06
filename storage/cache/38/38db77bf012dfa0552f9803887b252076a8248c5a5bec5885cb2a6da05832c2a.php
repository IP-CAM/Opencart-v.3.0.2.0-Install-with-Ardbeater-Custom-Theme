<?php

/* ardbeater/template/extension/payment/snapbin.twig */
class __TwigTemplate_ff8cef6e41bca8768c774527c676f9ef3aefa8523ff9af41b98846986e7f58f7 extends Twig_Template
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
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " 
  ";
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 3
                echo "    <div class=\"error\">";
                echo $context["error"];
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 5
            echo "  
";
        } else {
            // line 7
            echo "  
";
            // line 8
            if (((isset($context["pay_type"]) ? $context["pay_type"] : null) == "snapbin")) {
                // line 9
                echo "  
  ";
                // line 10
                if (((isset($context["environment"]) ? $context["environment"] : null) == "production")) {
                    // line 11
                    echo "    <script src=\"https://app.midtrans.com/snap/snap.js\" data-client-key=\"";
                    echo (isset($context["client_key"]) ? $context["client_key"] : null);
                    echo "\"></script>
  ";
                } else {
                    // line 13
                    echo "    <script src=\"https://app.sandbox.midtrans.com/snap/snap.js\" data-client-key=\"";
                    echo (isset($context["client_key"]) ? $context["client_key"] : null);
                    echo "\"></script>
  ";
                }
                // line 15
                echo "  
  <form id=\"payment-form\" method=\"post\" action=\"index.php?route=extension/payment/snap/landing_redir\">
    <input type=\"hidden\" name=\"result_type\" id=\"result-type\" value=\"\"></div>
    <input type=\"hidden\" name=\"result_data\" id=\"result-data\" value=\"\"></div>
  <div class=\"buttons\">

\t\t<div class=\"pull-right\"> 
    <input type=\"submit\" value=\"";
                // line 22
                echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
                echo "\" id=\"button-confirm\" class=\"btn btn-primary \" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"  />
    </form>
\t\t</div>
\t</div>

  ";
                // line 27
                if (((isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null) == 0)) {
                    // line 28
                    echo "    <!-- start Mixpanel -->
    <script type=\"text/javascript\">(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+\"=([^&]*)\")))?m[1]:null};f&&d(f,\"state\")&&(j=JSON.parse(decodeURIComponent(d(f,\"state\"))),\"mpeditor\"===j.action&&(b.sessionStorage.setItem(\"_mpcehash\",f),history.replaceState(j.desiredHash||\"\",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(\".\");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,0)))}}var e=a;\"undefined\"!==typeof g?e=a[g]=[]:g=\"mixpanel\";e.people=e.people||[];e.toString=function(b){var a=\"mixpanel\";\"mixpanel\"!==g&&(a+=\".\"+g);b||(a+=\" (stub)\");return a};e.people.toString=function(){return e.toString(1)+\".people (stub)\"};l=\"disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove\".split(\" \");for(h=0;h<l.length;h++)c(e,l[h]);var f=\"set set_once union unset remove delete\".split(\" \");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=[\"get_group\"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement(\"script\");b.type=\"text/javascript\";b.async=!0;b.src=\"undefined\"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:\"file:\"===c.location.protocol&&\"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js\".match(/^\\/\\//)?\"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js\":\"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js\";d=c.getElementsByTagName(\"script\")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);mixpanel.init( \"";
                    // line 29
                    echo (isset($context["mixpanel_key"]) ? $context["mixpanel_key"] : null);
                    echo "\" );</script>
    <!-- end Mixpanel -->
  ";
                }
                // line 32
                echo "
  <script> 

    var merch_id = \"";
                // line 35
                echo (isset($context["merchant_id"]) ? $context["merchant_id"] : null);
                echo "\";
    var baseurl =\"";
                // line 36
                echo (isset($context["base"]) ? $context["base"] : null);
                echo "\";
  
    \$('#button-confirm').click(function (event) {
      event.preventDefault();
      \$(this).attr(\"disabled\", \"disabled\");
    
    \$.ajax({
      type: 'get',
      url: 'index.php?route=extension/payment/snapbin/process_order',
      cache: false,
      beforeSend: function() {
        \$('#button-confirm').button('loading');
      },
      complete: function() {
        \$('#button-confirm').button('reset');
      },
      success: function(data) {
        //location = data;
        if ( ";
                // line 54
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo " == 1) {
          window.location.href = data;
        }
        else {

        if ( ";
                // line 59
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {
          function trackResult(token, merchant_id, plugin_name, status, result) {
            var eventNames = {
              pay: 'pg-pay',
              success: 'pg-success',
              pending: 'pg-pending',
              error: 'pg-error',
              close: 'pg-close'
            };
            mixpanel.track(
              eventNames[status], {
                merchant_id: merch_id,
                cms_name: 'Opencart',
                cms_version : '";
                // line 72
                echo (isset($context["opencart_version"]) ? $context["opencart_version"] : null);
                echo "',
                plugin_name: plugin_name,
                plugin_version: '";
                // line 74
                echo (isset($context["mtplugin_version"]) ? $context["mtplugin_version"] : null);
                echo "',
                snap_token: data,
                payment_type: result ? result.payment_type: null,
                order_id: result ? result.order_id: null,
                status_code: result ? result.status_code: null,
                gross_amount: result && result.gross_amount ? Number(result.gross_amount) : null,
              }
            );
          }
        }

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          \$(\"#result-type\").val(type);
          \$(\"#result-data\").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        if ( ";
                // line 97
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {
          trackResult(data, merch_id, 'oc3_bin_promo', 'pay', null);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            if ( ";
                // line 104
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {
              trackResult(data, merch_id, 'oc3_bin_specific_payment', 'success', result);
            }
            changeResult('success', result);
            console.log(result.status_message);
            \$(\"#payment-form\").submit();
          },
          onPending: function(result){
            if ( ";
                // line 112
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {
              trackResult(data, merch_id, 'oc3_bin_specific_payment', 'pending', result);
            }
            changeResult('pending', result);
            console.log(result.status_message);
            \$(\"#payment-form\").submit();
          },
          onError: function(result){
            if ( ";
                // line 120
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {            
              trackResult(data, merch_id, 'oc3_bin_specific_payment', 'error', result);
            }
            changeResult('error', result);
            console.log(result.status_message);
            \$.ajax({
                url: 'index.php?route=extension/payment/snap/payment_cancel',
                cache: false,
                success: function(data){
                  console.log('order canceled');
                  window.location.replace(baseurl+\"index.php?route=extension/payment/snap/failure\");
                }
              });
          },
          onClose: function(){
            if ( ";
                // line 135
                echo (isset($context["disable_mixpanel"]) ? $context["disable_mixpanel"] : null);
                echo " === 0 ) {
            trackResult(data, merch_id, 'oc3_bin_specific_payment', 'close');
            }
            var c =  confirm(\"close button clicked. Do you really want to cancel your transaction?\");
            var baseurl = \"";
                // line 139
                echo (isset($context["base"]) ? $context["base"] : null);
                echo "\";
            if (c == true){
              \$.ajax({
                url: 'index.php?route=extension/payment/snap/payment_cancel',
                cache: false,
                success: function(data){
                  console.log('order canceled');
                  window.location.replace(baseurl+\"index.php?route=extension/payment/snap/failure\");
                }
              });  
            }
            else{
              document.getElementById(\"button-confirm\").click();
            }
            
          }
        });
      }
      }
    });
  });
  </script>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "ardbeater/template/extension/payment/snapbin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 139,  227 => 135,  209 => 120,  198 => 112,  187 => 104,  177 => 97,  151 => 74,  146 => 72,  130 => 59,  122 => 54,  101 => 36,  97 => 35,  92 => 32,  86 => 29,  83 => 28,  81 => 27,  71 => 22,  62 => 15,  56 => 13,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  36 => 5,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% if errors %} */
/*   {% for error in errors %}*/
/*     <div class="error">{{ error }}</div>*/
/*   {% endfor %}*/
/*   */
/* {% else %}*/
/*   */
/* {% if pay_type == 'snapbin' %}*/
/*   */
/*   {% if environment == 'production' %}*/
/*     <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ client_key }}"></script>*/
/*   {% else %}*/
/*     <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ client_key }}"></script>*/
/*   {% endif %}*/
/*   */
/*   <form id="payment-form" method="post" action="index.php?route=extension/payment/snap/landing_redir">*/
/*     <input type="hidden" name="result_type" id="result-type" value=""></div>*/
/*     <input type="hidden" name="result_data" id="result-data" value=""></div>*/
/*   <div class="buttons">*/
/* */
/* 		<div class="pull-right"> */
/*     <input type="submit" value="{{ button_confirm }}" id="button-confirm" class="btn btn-primary " data-loading-text="{{ text_loading }}"  />*/
/*     </form>*/
/* 		</div>*/
/* 	</div>*/
/* */
/*   {% if disable_mixpanel == 0 %}*/
/*     <!-- start Mixpanel -->*/
/*     <script type="text/javascript">(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);mixpanel.init( "{{ mixpanel_key }}" );</script>*/
/*     <!-- end Mixpanel -->*/
/*   {% endif %}*/
/* */
/*   <script> */
/* */
/*     var merch_id = "{{ merchant_id }}";*/
/*     var baseurl ="{{ base }}";*/
/*   */
/*     $('#button-confirm').click(function (event) {*/
/*       event.preventDefault();*/
/*       $(this).attr("disabled", "disabled");*/
/*     */
/*     $.ajax({*/
/*       type: 'get',*/
/*       url: 'index.php?route=extension/payment/snapbin/process_order',*/
/*       cache: false,*/
/*       beforeSend: function() {*/
/*         $('#button-confirm').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-confirm').button('reset');*/
/*       },*/
/*       success: function(data) {*/
/*         //location = data;*/
/*         if ( {{ redirect }} == 1) {*/
/*           window.location.href = data;*/
/*         }*/
/*         else {*/
/* */
/*         if ( {{ disable_mixpanel }} === 0 ) {*/
/*           function trackResult(token, merchant_id, plugin_name, status, result) {*/
/*             var eventNames = {*/
/*               pay: 'pg-pay',*/
/*               success: 'pg-success',*/
/*               pending: 'pg-pending',*/
/*               error: 'pg-error',*/
/*               close: 'pg-close'*/
/*             };*/
/*             mixpanel.track(*/
/*               eventNames[status], {*/
/*                 merchant_id: merch_id,*/
/*                 cms_name: 'Opencart',*/
/*                 cms_version : '{{ opencart_version }}',*/
/*                 plugin_name: plugin_name,*/
/*                 plugin_version: '{{ mtplugin_version }}',*/
/*                 snap_token: data,*/
/*                 payment_type: result ? result.payment_type: null,*/
/*                 order_id: result ? result.order_id: null,*/
/*                 status_code: result ? result.status_code: null,*/
/*                 gross_amount: result && result.gross_amount ? Number(result.gross_amount) : null,*/
/*               }*/
/*             );*/
/*           }*/
/*         }*/
/* */
/*         console.log('token = '+data);*/
/*         */
/*         var resultType = document.getElementById('result-type');*/
/*         var resultData = document.getElementById('result-data');*/
/* */
/*         function changeResult(type,data){*/
/*           $("#result-type").val(type);*/
/*           $("#result-data").val(JSON.stringify(data));*/
/*           //resultType.innerHTML = type;*/
/*           //resultData.innerHTML = JSON.stringify(data);*/
/*         }*/
/* */
/*         if ( {{ disable_mixpanel }} === 0 ) {*/
/*           trackResult(data, merch_id, 'oc3_bin_promo', 'pay', null);*/
/*         }*/
/* */
/*         snap.pay(data, {*/
/*           */
/*           onSuccess: function(result){*/
/*             if ( {{ disable_mixpanel }} === 0 ) {*/
/*               trackResult(data, merch_id, 'oc3_bin_specific_payment', 'success', result);*/
/*             }*/
/*             changeResult('success', result);*/
/*             console.log(result.status_message);*/
/*             $("#payment-form").submit();*/
/*           },*/
/*           onPending: function(result){*/
/*             if ( {{ disable_mixpanel }} === 0 ) {*/
/*               trackResult(data, merch_id, 'oc3_bin_specific_payment', 'pending', result);*/
/*             }*/
/*             changeResult('pending', result);*/
/*             console.log(result.status_message);*/
/*             $("#payment-form").submit();*/
/*           },*/
/*           onError: function(result){*/
/*             if ( {{ disable_mixpanel }} === 0 ) {            */
/*               trackResult(data, merch_id, 'oc3_bin_specific_payment', 'error', result);*/
/*             }*/
/*             changeResult('error', result);*/
/*             console.log(result.status_message);*/
/*             $.ajax({*/
/*                 url: 'index.php?route=extension/payment/snap/payment_cancel',*/
/*                 cache: false,*/
/*                 success: function(data){*/
/*                   console.log('order canceled');*/
/*                   window.location.replace(baseurl+"index.php?route=extension/payment/snap/failure");*/
/*                 }*/
/*               });*/
/*           },*/
/*           onClose: function(){*/
/*             if ( {{ disable_mixpanel }} === 0 ) {*/
/*             trackResult(data, merch_id, 'oc3_bin_specific_payment', 'close');*/
/*             }*/
/*             var c =  confirm("close button clicked. Do you really want to cancel your transaction?");*/
/*             var baseurl = "{{ base }}";*/
/*             if (c == true){*/
/*               $.ajax({*/
/*                 url: 'index.php?route=extension/payment/snap/payment_cancel',*/
/*                 cache: false,*/
/*                 success: function(data){*/
/*                   console.log('order canceled');*/
/*                   window.location.replace(baseurl+"index.php?route=extension/payment/snap/failure");*/
/*                 }*/
/*               });  */
/*             }*/
/*             else{*/
/*               document.getElementById("button-confirm").click();*/
/*             }*/
/*             */
/*           }*/
/*         });*/
/*       }*/
/*       }*/
/*     });*/
/*   });*/
/*   </script>*/
/*   {% endif %}*/
/* {% endif %}*/
