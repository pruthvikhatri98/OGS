function viewTabs(){jQuery("html, body").animate({scrollTop:jQuery("#rTabs").position().top},"fast")}function popup(n,t,i){result=window.open(n,"popped1","width="+t+", height="+i+", location=no, menubar=no, status=no, toolbar=no, scrollbars=yes, resizable=no");result!=null?html="is not blocking":alert("Your Browser is blocking popups which is preventing a 3dCart window to appear.")}function popupsimple(n,t,i){var r=480,u=340,f,e;(document.all||document.layers)&&(r=screen.availWidth,u=screen.availHeight);f=(r-t)/2;e=(u-i)/2;result=window.open(n,"popped1","width="+t+", height="+i+",top="+e+",left="+f+",location=no, menubar=no, status=no, toolbar=no, scrollbars=no, resizable=no");result!=null?html="is not blocking":alert("Your Browser is blocking popups which is preventing a 3dCart window to appear.")}function SearchAndReplace(n,t,i){var r=n,e=new String,s=new String,u=new String,f=0,o=0;if(t.length!=0){while(r.toUpperCase().indexOf(t.toUpperCase())>-1)f=r.toUpperCase().indexOf(t.toUpperCase()),e=r.substring(0,f),u=u+e,u=u+i,o=r.length-t.length+1,r=r.substring(f+t.length);return u+r}}function Len(n){return String(n).length}function Left(n,t){return t<=0?"":t>String(n).length?n:String(n).substring(0,t)}function Right(n,t){if(t<=0)return"";if(t>String(n).length)return n;var i=String(n).length;return String(n).substring(i,i-t)}function Mid(n,t,i){if(t<0||i<0)return"";var r,u=String(n).length;return r=t+i>u?u:t+i,String(n).substring(t,r)}function InStr(n,t){for(i=0;i<Len(n);i++)if(t==Mid(n,i,1))return i;return-1}function validateValues(n,t,i){var a=!0,f=new String,v=new String,y=!1,u=0,p=!1,w=!1,d=new Image,e,l,h=!1,b=0,o=0,c="",s,r,k;if(stocknum="",n==null)return!1;if(n.std_price!=null){if(u=n.std_price.value,s=document.add.reward_product!=undefined&&document.add.reward_product.value>0,s&&(b=eval(document.add.reward_product.value),c=document.add.reward_text.value),u==0&&i!=null&&i!=undefined)return;for(e=n.itemid!=null?n.itemid.value:"",listing_elemLenght=n.elements.length,r=0,k=listing_elemLenght;r<k;r++){myType=n.elements[r].type;try{l=n.elements[r].getAttribute("customoption")}catch(g){l=null}myType!=null&&myType!=undefined&&l==null&&(f=n.elements[r].name,f!=""&&f!="recipientselect"&&f!="reminder"&&f!="qty-0"&&f!="recurring_frequency"&&f!="item_id"&&((f.indexOf("di_")>-1||f.indexOf("mi_")>-1)&&SetSrc(n,"img_"+f,GetValue(n,"image_"+n.elements[r].options[n.elements[r].selectedIndex].value,i),i),myType=="radio"&&f!="wishlist-optListType"&&(p=!0,n.elements[r].checked&&(w=!0,percent=GetValue(n,"pricep_"+n.elements[r].value,i),percent!==undefined?(percentValue=eval(percent)/100*eval(u),u=eval(u)+percentValue):u=eval(u)+eval(GetValue(n,"price_"+n.elements[r].value,i)),e=e+GetValue(n,"OptID_"+n.elements[r].value,i),stocknum=stocknum+n.elements[r].value+"#",!h&&s&&eval(GetValue(n,"reward_"+n.elements[r].value))!=undefined&&(o=o+eval(GetValue(n,"reward_"+n.elements[r].value)))),recalculateRewardPoints(u)),myType=="checkbox"&&(y=!0,n.elements[r].checked&&(f>""&&(u=eval(u)+eval(GetValue(n,"price_"+f,i))),e=e+GetValue(n,"OptID_"+f,i)),recalculateRewardPoints(u)),(myType=="hidden"||myType=="password"||myType=="text"||myType=="textarea")&&n.elements[r].value==n.elements[r].defaultValue&&(a=!1),n.elements[r].getAttribute("data-feature_extra-price")!=undefined&&n.elements[r].getAttribute("data-feature_extra-price")!=null&&(i=null,isNaN(n.elements[r].value)||(mp_extra=eval(n.elements[r].value)*eval(n.elements[r].getAttribute("data-feature_extra-price")),isNaN(mp_extra)||mp_extra>0&&(u=eval(u)+mp_extra))),(myType=="select-one"||myType=="select-multiple")&&(n.elements[r].name.indexOf("otf_")<0&&n.elements[r].options[n.elements[r].selectedIndex].value>""&&(v=n.elements[r].options[n.elements[r].selectedIndex].value,stocknum=stocknum+v+"#",percent=GetValue(n,"pricep_"+n.elements[r].options[n.elements[r].selectedIndex].value),percent!==undefined?(percentValue=eval(percent)/100*eval(u),u=eval(u)+percentValue):u=eval(u)+eval(GetValue(n,"price_"+n.elements[r].options[n.elements[r].selectedIndex].value)),e=e+""+GetValue(n,"OptID_"+n.elements[r].options[n.elements[r].selectedIndex].value),!h&&s&&eval(GetValue(n,"reward_"+n.elements[r].value))!=undefined&&(o=o+eval(GetValue(n,"reward_"+n.elements[r].value)))),recalculateRewardPoints(u))))}if(s&&(h||(c=c.replace("[reward_redeem]",b+o),document.getElementById("btnRedeemText")!=null&&(document.getElementById("btnRedeemText").innerHTML=c),h=!0)),(y&&!0||p&&!w)&&(a=!1),changeprice(u,i),changeid(e),t==1)return check_stock(n,stocknum)}}function recalculateRewardPoints(n){var i,r,u,t;document.getElementById("customPoints")!=null&&(i=parseFloat(document.getElementById("customPoints").value),i==0&&document.getElementById("pointsMultiplier").value!=null&&(r=parseFloat(document.getElementById("pointsMultiplier").value),u=Math.round(r*n),document.getElementById("productRewardDesc").value!=null&&(t=document.getElementById("productRewardDesc").value,t=t.replace("[rewardsPointsValue]",u),document.getElementById("divRewardPoint")&&document.getElementById("divRewardPoint").innerHTML!=null&&(document.getElementById("divRewardPoint").innerHTML=t))))}function changeid(n){var t=n;changecontent("product_id",t)}function GetValue(n,t,i){var r,u;if(r=i!=undefined&&i!=null?jQuery("#add"+i+" input[name='"+t+"']"):document.getElementsByName(t),r!=null&&r!=undefined&&r.length>0)return i!=undefined&&i!=null?r[0].value:r.item(0).value;for(u=0;u<listing_elemLenght;u++)if(n.elements[u].name==t)return n.elements[u].value}function SetSrc(n,t,r,u){var f,e;if(f=u!=undefined&&u!=null?jQuery("#add"+u+" input[name='"+t+"']"):document.getElementsByName(t),f!=null&&f!=undefined&&f.length>0){f.length>0&&(f.item(0).src=r);return}for(e=u!=undefined&&u!=null?jQuery("#add"+u+" img"):document.getElementsByTagName("img"),listing_imgslength==-1&&(listing_imgslength=e.length),i=0;i<listing_imgslength;i++)e[i].name==t&&(e[i].src=r)}function recalculate(){}function changecontent(n,t){var i=t;document.getElementById?document.getElementById(n)!=null&&(document.getElementById(n).innerHTML=i,document.getElementById(n).style.visibility="visible"):document.all?document.all[fiendname]!=null&&(document.all[fiendname].innerHTML=i,document.all[n].style.visibility="visible"):document.layers&&document.layers[n]!=null&&(document.layers[n].document.open(),document.layers[n].document.write(i),document.layers[n].document.close(),document.layers[n].visibility="show")}function changegtin(n){var t=n;changecontent("product_gtin",t)}function changeprice(n,t){var i=formatCurrency(n),r,u,o;try{currency_symbol!=null&&currency_symbol!=undefined&&(r=currency_symbol)}catch(h){r="$"}if(u=0,document.getElementById("std_price_novat")!=null){var f=parseFloat(document.getElementById("std_price_novat").value),e=parseFloat(document.getElementById("vat_tax_rate").value),s=document.getElementById("vat_tax_price_format").value,o=n;e>=0&&(o=f+f*(e/100),i=s,i=i.replace("[price_vat]",formatCurrency(n)),currency_symbol="",u=n-o,u=u/(1+e/100),f=f+u,currency_symbol=r,i=i.replace("[price_novat]",formatCurrency(f)),i=i.replace("[currency]"+r,r),i=i.replace("[currency]",r))}t!=undefined&&t!=null?changecontent("price"+t,i):changecontent("price",i)}function formatCurrency(n){var i,t;try{i=currency_symbol}catch(r){i="$"}try{t=parseInt(prod_decimal_places)}catch(r){t=2}return n=parseFloat(n),n=n.toString(),t>2&&(t-(n.length-(n.indexOf(".")+1))>0&&(t=n.length-(n.indexOf(".")+1)),t<2&&(t=2)),t>0?formatNumberListing(n,t,",",".",i,"","",""):formatNumberListing(n,t,"","",i,"","","")}function formatNumberListing(n,t,i,r,u,f,e,o){var l=Math.round(n*Math.pow(10,t)),h,s,c;for(l>=0&&(e=o=""),h=(""+Math.abs(l)).split(""),s=h.length-t,s<0&&s--,c=s;c<0;c++)h.unshift("0");for(s<0&&(s=1),h.splice(s,0,r),h[0]==r&&h.unshift("0");s>3;)s-=3,h.splice(s,0,i);return u+e+h.join("")+o+f}function check_stock(n,t){var h,a=jQuery("#availability_itemprop").val(),v=jQuery("#allowbackorder").val(),c=jQuery("#allowadvancedoption_waitlist").val(),s=jQuery("#productAvailability-Instock").val(),y=jQuery("#productAvailability-Outofstock").val(),p=jQuery("#productAvailability-Backorder").val(),e=jQuery("#catalogid").val(),u=0,o=window["inventoryarray"+e],l=window["idarray"+e],w=window["aopricearray"+e],b=window["gtinarray"+e],f=new MessageBar,i,r;if(f.initialize(),n.feature_type_id!=null&&n.feature_type_id!=undefined)if(n.feature_type_id.length>0){if(n.feature_type_id[0].value=="MixedPack")for(i=0;i<n.feature_type_id.length;i++){for(data_feature_type_id=n.feature_type_id[i].getAttribute("data-feature_type_id"),data_feature_type_min=parseInt(jQuery("#feature_type_min-"+data_feature_type_id).val()),data_feature_type_max=parseInt(jQuery("#feature_type_max-"+data_feature_type_id).val()),data_feature_type_sum=0,r=0;r<n.getElementsByClassName("qty-mixedpack-"+data_feature_type_id).length;r++)data_feature_type_sum+=parseInt(n.getElementsByClassName("qty-mixedpack-"+data_feature_type_id)[r].value);if((data_feature_type_sum<data_feature_type_min||data_feature_type_sum>data_feature_type_max)&&data_feature_type_sum>0&&document.activeElement.className.indexOf("mixedpack")<0)return jQuery("#divAddToCart").slideUp(),f.alert("error in minimum or maximum quantity."),changecontent("availability",s),!1}}else if(n.feature_type_id.value=="MixedPack"){for(data_feature_type_id=n.feature_type_id.getAttribute("data-feature_type_id"),data_feature_type_min=parseInt(jQuery("#feature_type_min-"+data_feature_type_id).val()),data_feature_type_max=parseInt(jQuery("#feature_type_max-"+data_feature_type_id).val()),data_feature_type_sum=0,r=0;r<n.getElementsByClassName("qty-mixedpack-"+data_feature_type_id).length;r++)data_feature_type_sum+=parseInt(n.getElementsByClassName("qty-mixedpack-"+data_feature_type_id)[r].value);if((data_feature_type_sum<data_feature_type_min||data_feature_type_sum>data_feature_type_max)&&data_feature_type_sum>0&&document.activeElement.className.indexOf("mixedpack")<0)return jQuery("#divAddToCart").slideUp(),f.alert("error in minimum or maximum quantity."),changecontent("availability",s),!1}if(typeof o=="undefined"||o.length==0)return!0;for(i=0;i<o.length;i++)if(h=o[i],field_array=h.split("-"),typeof l!="undefined"&&(soptionid=l[i],aoprice=w[i],aogtin=b[i],field_array[0]==t&&(soptionid!=""&&(changeid(soptionid),jQuery("#itemid_advancedoption").val(soptionid)),aoprice!="0"&&changeprice(aoprice),aogtin!=""&&changegtin(aogtin))),field_array[0]==t){if(changecontent("product_inventory",field_array[1]),eval(GetValue(n,"qty-0"))>field_array[1]||eval(GetValue(n,"qty-0"))==undefined&&c=="1")return u=u+1,v==1?(changecontent("availability",p),!0):(changecontent("availability",y),c=="1")?(jQuery("#divAddToCart").slideUp(),f.alert("The options you selected are not currently available."),jQuery("#divWaitlist_AdvancedOptions").slideDown(),!0):(f.alert("The options you selected are not currently available."),u=u+2,!1);jQuery("#divWaitlist_AdvancedOptions").slideUp();jQuery("#divAddToCart").slideDown()}return u==0?(changecontent("availability",a),!0):u==1?(changecontent("availability",s),!0):void 0}function add_wishlist(){var n=jQuery("#Enabled_Multiple_WishList").val(),t=jQuery("#link_addtolist").val(),i;if(jQuery("body").hasClass("not-logged-in")){window.location.href="/myaccount.asp?catalogid="+jQuery("#catalogid").val();return}n=="1"?(jQuery("#wishlist-modal").modal("show"),i=t):(document.add.action="add_cart.asp?action=addWishList",document.add.submit())}function add_wishlistcustom(n,t,i){document.add.wishListCustomType.value=n;document.add.wishListCustomId.value=t;document.add.wishListCustomname.value=i;document.add.action="add_cart.asp?action=addWishList";document.add.submit()}function processCaptchaEexcute(n,t){if(jQuery("#"+n+' [name="g-recaptcha-response"]')){jQuery("#"+n+" .loading-overlay").show();var i=parseInt(jQuery("#"+n+" .recaptchaRobot").data("widgetid"));jQuery("#"+n+" .recaptchaRobot").data("size")=="invisible"&&grecaptcha.execute(i);setTimeout(function(){window[t]()},500)}else window[t]()}function refereshAllCaptchas(){if(jQuery(".simple-captcha > .captcha > img").length>0){var n=jQuery(".simple-captcha > .captcha > img").first().attr("src");n=n+'?timestamp=" + new Date().getTime()';jQuery(".simple-captcha > .captcha > img").each(function(t,i){jQuery(i).attr("src",n)});jQuery('[name="ramdomWord"]').val("")}jQuery(".recaptchaRobot").length>0&&jQuery(".recaptchaRobot").each(function(n,t){var i=jQuery(t).data("widgetid"),r=jQuery(t).find('textarea[name="g-recaptcha-response"]');grecaptcha.reset(i);jQuery(r).val("")})}function add_giftregistry(){document.add.action="add_cart.asp?action=addGiftRegistry";document.add.submit()}function recommendaFriendRequest(){var f=jQuery.trim(jQuery("#visitorname").val()),i=jQuery.trim(jQuery("#visitormail").val()),e=jQuery.trim(jQuery("#friendname").val()),r=jQuery.trim(jQuery("#friendmail").val()),u=jQuery.trim(jQuery("#recommendafriend-message").val()),o=jQuery("#product_url").val(),s=jQuery.trim(jQuery('#recommendafriend-modal input[name="ramdomWord"]').val()),h=jQuery.trim(jQuery('#recommendafriend-modal input[name="recaptcha_response_field"]').val()),c=jQuery.trim(jQuery('#recommendafriend-modal input[name="recaptcha_challenge_field"]').val()),l=jQuery.trim(jQuery('#recommendafriend-modal  [name="g-recaptcha-response"]').val()),n=!0,t="";if(f==""&&(t+="Please enter your Your Name.. \n",n=!1),i!=""&&validateEmail(i)||(t+="Please enter a valid email address. \n",n=!1),e==""&&(t+="Please enter your Friend's Name. \n",n=!1),r!=""&&validateEmail(r)||(t+="Friend's Email: enter a valid email address. \n",n=!1),(u==""||u.length>500)&&(t+="Please enter your Note to friend:. Max length is 500. \n",n=!1),jQuery("#gdpr_privacy_enforced").val()=="1"&&(jQuery('#recommendafriend-modal input[name="privacy_accepted"]').is(":checked")||(t+=GetLanguagItem("gdpr_privacy-policy-validation-message")+"\n",n=!1)),n){if(jQuery("#recommendafriend-recaptchaRobot").data("size")=="invisible"&&jQuery("#recommendafriend-recaptchaRobot textarea").val()==""){processCaptchaEexcute("recommendafriend-modal","recommendaFriendRequest_normal");console.log(jQuery("#recommendafriend-recaptchaRobot textarea").val());return}jQuery("#recommendafriend-modal .loading-overlay").show();jQuery.ajax({method:"POST",url:"/recommendafriend.asp?action=ajaxSend",data:{catalogid:jQuery("#catalogid").val(),visitorname:f,visitormail:i,friendname:e,friendmail:r,message:u,siteurl:o+"/product.asp?itemid="+jQuery("#catalogid").val(),ramdomWord:s,recaptcha_response_field:h,recaptcha_challenge_field:c,"g-recaptcha-response":l},success:function(n){var t=JSON.parse(n);t.resCode!=undefined&&t.resCode==1?(jQuery("#recommendafriend-modal .loading-overlay").hide(),jQuery("#recommendafriend-modal .modal-response").fadeIn(500)):alert(t.resMsg)},error:function(){alert("Something went wrong. Please try again later.")},complete:function(){jQuery("#recommendafriend-modal .loading-overlay").fadeOut(500)}})}else{jQuery("#recommendafriend-modal .loading-overlay").fadeOut(500);alert(t);return}}function recommendaFriendRequest_normal(){}function recommendaFriendRequest_invisible(){recommendaFriendRequest()}function showRecFriend(){jQuery("#recommendafriend-modal").modal("show")}function sendWaitingListRequest(){var r=jQuery.trim(jQuery("#waitinglist-name").val()),i=jQuery.trim(jQuery("#waitinglist-email").val()),u=jQuery.trim(jQuery("#waitinglist-phone").val()),f=jQuery.trim(jQuery('#waitinglist-modal input[name="ramdomWord"]').val()),e=jQuery.trim(jQuery('#waitinglist-modal input[name="recaptcha_response_field"]').val()),o=jQuery.trim(jQuery('#waitinglist-modal input[name="recaptcha_challenge_field"]').val()),s=jQuery.trim(jQuery('#waitinglist-modal  [name="g-recaptcha-response"]').val()),n=!0,t="";if(r==""&&(t+="Please enter your Name. \n",n=!1),i!=""&&validateEmail(i)||(t+="Please enter your Email. \n",n=!1),u==""&&(t+="Please enter your Phone. \n",n=!1),n){if(jQuery("#waitinglist-recaptchaRobot").data("size")=="invisible"&&jQuery("#waitinglist-recaptchaRobot textarea").val()==""){processCaptchaEexcute("waitinglist-modal","waitinglist_normal");return}jQuery.ajax({method:"POST",url:"/notify.asp?action=ajaxSend",data:{catalogid:jQuery("#catalogid").val(),itemid_advanced:jQuery("#itemid_advancedoption").val(),name:r,email:i,phone:u,ramdomWord:f,recaptcha_response_field:e,recaptcha_challenge_field:o,"g-recaptcha-response":s},success:function(n){var t=JSON.parse(n);t.resCode!=undefined&&(t.resCode==1?(jQuery("#waitinglist-response").text(t.resMsg),jQuery("#waitinglist-modal .modal-response").fadeIn(500),refereshAllCaptchas()):alert(t.resMsg))},error:function(){alert("Something went wrong. Please try again later.")},complete:function(){jQuery("#waitinglist-modal .loading-overlay").fadeOut(500)}})}else{jQuery("#waitinglist-modal .loading-overlay").fadeOut(500);alert(t);return}}function waitinglist_normal(){}function waitinglist_invisible(){sendWaitingListRequest()}function sendMakeAnOfferRequest(){var r=jQuery.trim(jQuery("#makeanoffer-amount").val()),u=jQuery.trim(jQuery("#makeanoffer-name").val()),i=jQuery.trim(jQuery("#makeanoffer-email").val()),f=jQuery.trim(jQuery("#makeanoffer-comment").val()),e=jQuery.trim(jQuery('#makeanoffer-modal input[name="ramdomWord"]').val()),o=jQuery.trim(jQuery('#makeanoffer-modal input[name="recaptcha_response_field"]').val()),s=jQuery.trim(jQuery('#makeanoffer-modal input[name="recaptcha_challenge_field"]').val()),h=jQuery.trim(jQuery('#makeanoffer-modal  [name="g-recaptcha-response"]').val()),n=!0,t="";if(u==""&&(t+="Please enter your Name. \n",n=!1),i!=""&&validateEmail(i)||(t+="Please enter your Email. \n",n=!1),r==""&&(t+="Please enter offer amount. \n",n=!1),n){if(jQuery("#makeanoffer-recaptchaRobot").data("size")=="invisible"&&jQuery("#makeanoffer-recaptchaRobot textarea").val()==""){processCaptchaEexcute("makeanoffer-modal","makeanoffer_normal");return}jQuery("#makeanoffer-modal .loading-overlay").show();jQuery.ajax({method:"POST",url:"/makeanoffer.asp?action=ajaxsend&catalogid="+jQuery("#catalogid").val(),data:{catalogid:jQuery("#catalogid").val(),amount:r,name:u,email:i,comment:f,ramdomWord:e,recaptcha_response_field:o,recaptcha_challenge_field:s,"g-recaptcha-response":h},success:function(n){var t=JSON.parse(n);t.resCode!=undefined&&(t.resCode==1?(jQuery("#makeanoffer-response").text(t.resMsg),jQuery("#makeanoffer-modal .modal-response").fadeIn(500)):(alert(t.resMsg),jQuery("#makeanoffer-error").collapse("show")))},error:function(){alert("Something went wrong. Please try again later.")},complete:function(){jQuery("#makeanoffer-modal .loading-overlay").fadeOut(500)}})}else{alert(t);jQuery("#makeanoffer-modal .loading-overlay").hide();return}}function makeanoffer_normal(){}function makeanoffer_invisible(){sendMakeAnOfferRequest()}function showAddName(){jQuery(".multipleShipToBlock .send-to select").val()=="selectother"?jQuery(".multipleShipToBlock .add-name, .multipleShipToBlock .note").show():jQuery(".multipleShipToBlock .add-name, .multipleShipToBlock .note").hide()}function ask_check_and_add(n,t,i){confirm(i+"\n\n"+GetLanguagItem("recurringorders_replace-confirm"))&&check_and_add(n,t)}function check_and_add(n){var t=validateReqOption(n),i;if(t!=null){reqOptionBar.alert("Please select all required options.");varx1='[name="'+t.name+'"]';jQuery(varx1).closest(".opt-regular").addClass("option-required");return}document.add.std_price==null?jQuery("form#add").submit():(i=validateValues(n,1),i==!0&&document.add.submit())}function initOptionsHelp(){jQuery('[data-toggle="popover"]').popover();jQuery('[data-toggle="link"]').click(function(){window.open(jQuery(this).data("content"),"Help","height=320,width=480")})}function selectOption(n){var i=jQuery("#has_rules").val(),t;(n=null,i=="1")&&(add_overlay("divOptionsBlock",1),t="prod_options.asp?ajax=1&action=buildOptions&strElementType="+escape("")+"&strElementName="+escape("")+"&no-cache="+Math.random(),jQuery.ajax({url:t,dataType:"html",type:"POST",data:jQuery(add).serialize(),cache:!1,success:function(n){var i=jQuery("#divOptionsBlock").find("input:text,textarea"),t;if(jQuery("#divOptionsBlock").html(n),initOptionsHelp(),i.length>0)for(t=0;t<i.length;t++)jQuery("[name='"+i[t].name+"']").val(i[t].value);jQuery('#add input[type="radio"]:checked').each(function(){jQuery(this).next("div.radio-option").addClass("radio-selected");jQuery(this).next("div.swatch-option").addClass("swatch-selected")})},complete:afterOptionSelection,error:reportError}))}function afterOptionSelection(){remove_overlay("divOptionsBlock");return}function getElementById_s(n){var t=null;return document.getElementById?t=get_Element(n):document.all&&(t=document.all[n]),t}function remove_overlay(n){var t=getElementById_s("overlay_"+n);t!=null&&t!="null"&&t!=undefined&&t!="undefined"&&(t.style.display="none")}function add_overlay(n,t){var r=getElementById_s(n),i=document.createElement("div");r&&(i.setAttribute("id","overlay_"+n),i.className="overlay",i.style.position="absolute",i.style.textAlign="center",i.style.width=r.clientWidth+"px",i.style.height=r.clientHeight+"px",r.insertBefore(i,r.firstChild),i.style.display="block",get_Element("overlay_"+n).innerHTML=t==1?'<table border=0 width=100% height=100%><tr><td style="text-align: center;"><img src="assets/templates/common-html5/images/loading.gif"><\/td><\/tr><\/table>':'<table border=0 width=100% height=100%><tr><td align="center"><\/td><\/tr><\/table>')}function get_Element(n){return document.getElementById(n)||document.getElementsByName(n).item(0)}function reportError(n,t){remove_overlay("divOptionsBlock");n.status>0&&alert("Error processing request "+n.status+" - "+t)}function countChars(n,t,i){var r=document.getElementById(n).value,f=r.split("\n").length-1,u;if(document.getElementById(n).maxLength=Number(i)+Number(f*1),u=i-document.getElementById(n).value.length,u<0)return document.getElementById(n).value=r.substring(0,r.length-1),!1;document.getElementById(t).innerHTML=u}function updateRevStats(n,t,i){var u="",r="";r="id="+n;r+="&vote="+i;u="reviewVote_ajax.asp?"+r+"&no-cache="+Math.random();jQuery.ajax({url:u,dataType:"html",type:"GET",cache:!1,success:function(n){n==""?qaUpdateBar.alert(GetLanguagItem("productqa_helpful-notupdated")):(jQuery("#spnReview"+t).html(n),qaUpdateBar.success(GetLanguagItem("productqa_update-helpful")))},error:reportQAError})}function updateQAStats(n,t,i){var u="",r="";r="id="+n;r+="&vote="+i;u="productqaVote_ajax.asp?"+r+"&no-cache="+Math.random();jQuery.ajax({url:u,dataType:"html",type:"GET",cache:!1,success:function(n){n==""?qaUpdateBar.alert(GetLanguagItem("productqa_helpful-notupdated")):(jQuery("#spn"+t).html(n),qaUpdateBar.success(GetLanguagItem("productqa_update-helpful")))},error:reportQAError})}function reportQAError(n){n.status>0&&qaUpdateBar.alert("Error processing request, please try again.")}var reqOptionBar=new MessageBar,stocknum,listing_elemLenght,listing_imgslength,currency_symbol,prod_decimal_places,qaUpdateBar;reqOptionBar.initialize();jQuery(function(){jQuery(".qty-input .qty-up").click(function(){var n=jQuery(this).data("target"),t=parseInt(jQuery(n).val())+1;jQuery(n).val(t)});jQuery(".qty-input .qty-down").click(function(){var t=jQuery(this).data("target"),n=parseInt(jQuery(t).val())-1;n<=1&&(n=1);jQuery(t).val(n)});initOptionsHelp();jQuery(document).ready(function(){jQuery(".flexslider:not(.product-carousel)").flexslider({animation:"slide",animationLoop:!0,slideshow:!1,controlNav:!1,itemWidth:50,minItems:4,maxItems:4,itemMargin:0,prevText:"",nextText:""});setTimeout(function(){jQuery("#addl-images").addClass("addl-images-ready");window.dispatchEvent(new Event("resize"))},100)});jQuery("#rTabs > ul > li").length>0&&(jQuery("#rTabs").responsiveTabs({active:0,rotate:!1,startCollapsed:"accordion",collapsible:"accordion",setHash:!1}),document.body.clientWidth<767&&(jQuery("span.pipe").hide(),jQuery("#rTabs").responsiveTabs("activate",0)),document.body.clientWidth<767&&(jQuery("span.pipe").hide(),jQuery("#rTabs").responsiveTabs("activate",0)));jQuery("#main-image").length<=0&&jQuery("#realmediaBlock").show();jQuery(".prod-thumb").on("touchstart click",function(){var n=jQuery(this).find("a"),t;if(jQuery(n).attr("id")=="showRealMedia")if(jQuery(n).attr("data-multi-video")=="True"){$("#modalVM").modal();$("#modalVM").on("shown.bs.modal",function(){$("#VideoGallery")[0].contentWindow.loadVideoSlider()})}else jQuery("#main-image").hide(),jQuery("#realmediaBlock").show();else jQuery("#realmediaBlock").hide(),jQuery("#main-image").show(),t=jQuery(n).attr("title"),jQuery("#imagecaptiont").text(t)});$("#modalVM").on("hidden.bs.modal",function(){$("#VideoGallery")[0].contentWindow.reloadVideo()});jQuery("#review_count").click(function(n){n.preventDefault();jQuery("#reviewsTab a").click();jQuery("#tab-4").length>0&&jQuery("html, body").animate({scrollTop:jQuery("#tab-4").offset().top},1e3)});typeof get_browsing_history!="undefined"&&get_browsing_history()});stocknum="";listing_elemLenght=-1;listing_imgslength=-1;jQuery("#wishlist-add").click(function(){var n=jQuery(".wishlist-optListType:checked").val(),i=jQuery("#wishlist-drpLists").val(),r=jQuery.trim(jQuery("#wishlist-txtNewList").val()),t;if(n=="1"&&i=="")t=GetLanguagItem("wishlist_multiple-addtolist-select-the-list"),alert(t);else if(n=="2"&&r=="")t=GetLanguagItem("wishlist_multiple-addtolist-enter-the-name-list"),alert(t);else try{add_wishlistcustom(n,i,r)}catch(u){add_wishlistcustom(n,i,r)}});jQuery("#recommendafriend_button").click(function(){recommendaFriendRequest()});jQuery(function(){jQuery("#waitinglist-phone").val()=="[phone]"&&jQuery("#waitinglist-phone").val("");window.location.search.indexOf("waitinglist")!=-1&&jQuery("#waitinglist-modal").modal("show")});jQuery("#waitinglist-btn").click(function(n){n.preventDefault();jQuery("#waitinglist-modal").modal("show")});jQuery("#waitinglist_button").click(function(){sendWaitingListRequest()});jQuery("#makeanoffer-btn").click(function(){jQuery("#makeanoffer-modal").modal("show")});jQuery("#makeanoffer-submit").click(function(){sendMakeAnOfferRequest()});currency_symbol=jQuery("#currency").val();prod_decimal_places=jQuery("#prod_decimal_places").val();validateValues(document.add,1);jQuery("#hdnHasDefaultSelected").length>0&&jQuery("#hdnHasDefaultSelected").val()=="1"&&selectOption(null);jQuery(window).on("load",function(){jQuery("#get_quote-iframe").on("load",function(){jQuery("#get_quote-iframe").length>0&&(document.getElementById("get_quote-iframe").style.height=document.getElementById("get_quote-iframe").contentWindow.document.body.scrollHeight+20+"px")})});qaUpdateBar=new MessageBar;qaUpdateBar.initialize()