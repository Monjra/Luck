function hasPlugin(t){t=t.toLowerCase();for(var n=0;n<navigator.plugins.length;n++)if(navigator.plugins[n].name.toLowerCase().indexOf(t)>-1)return!0;return!1}function hasIEPlugin(t){try{return new ActiveXObject(t),!0}catch(n){return!1}}function hasFlash(){var t=hasPlugin("Flash");return t||(t=hasIEPlugin("ShockwaveFlash.ShockwaveFlash")),t}function AddAttention(){var t=$("#attention").attr("status");if("0"==t){if(!LT.isLogin())return!1;var n=new Object,e="/Order/AddAttention";n.Id=$("#store_id").val(),successHandler=function(t){if(LT.alertSmall(t.Message),"ok"==t.status){$("#attention").html("取消关注"),$("#attention").attr("status","1");var n=parseInt($("#attentionnum").text().substring(0,1))+1;$("#attentionnum").html(n+' 个关注 <i class="follow_icon inline"></i>')}},errorHandler=function(){LT.alertSmall("关注失败")},options=getAjaxOptions(e,{info:n},successHandler,errorHandler),$.ajax(options)}else CancelAttention()}function CancelAttention(){var t=new Object,n="/Order/CancelAttention";t.Id=$("#store_id").val(),successHandler=function(t){if(LT.alertSmall(t.Message),"ok"==t.status){$("#attention").html('<i class="inline iconcoms icon5"></i>加关注'),$("#attention").attr("status","0");var n=parseInt($("#attentionnum").text().substring(0,1))-1;$("#attentionnum").html(n+' 个关注 <i class="follow_icon inline"></i>')}},errorHandler=function(){LT.alertSmall("取消关注失败")},options=getAjaxOptions(n,{info:t},successHandler,errorHandler),$.ajax(options)}function returnstar(t,n){for(var e=t.split(".")[0],a=t.split(".")[1],i="",r=1;e>=r;r++)i+='<i class="starF inline"></i>';"5"==a&&(i+='<i class="starH inline"></i>'),$(n).html(i)}function ChatIm(t,n){var e=n+1e5;e="lt_"+e+"_9999",NTKF_PARAM={siteid:"lt_1000",settingid:e,uid:window.loginUserId,uname:window.LogUserName,userlevel:"0"},t&&(NTKF_PARAM.ntalkerparam={item:{id:$("#hdnDesignId").val(),name:$("#hdnDesignName").val(),imageurl:window.IMAGE_SERVER_URL+$("#hdnModelUrl").val(),url:window.location.href,siteprice:$("#emAmount").text()}});var a=(document.getElementsByTagName("head").item(0),document.createElement("script"));a.type="text/javascript",a.src="http://download.ntalker.com/b2b/ntkfstat.js?v="+Math.random(100);try{NTKF.im_openInPageChat(e)}catch(i){$.getScript(a.src,function(){NTKF.im_openInPageChat(e)})}}$(document).ready(function(){$("#attention").click(AddAttention);var t=$("#IsAtt").val();"1"==t?($("#attention").html("取消关注"),$("#attention").attr("status","1")):($("#attention").html('<i class="inline iconcoms icon5"></i>加关注'),$("#attention").attr("status","0")),$("#storename").hover(function(){var t=$("#item1").val();returnstar(t,"#itemgrade1"),t=$("#item2").val(),returnstar(t,"#itemgrade2"),t=$("#item3").val(),returnstar(t,"#itemgrade3"),t=$("#item4").val(),returnstar(t,"#itemgrade4"),$("#storeid").show()},function(){$("#storeid").hide()})});