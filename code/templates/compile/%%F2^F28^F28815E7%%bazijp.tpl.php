<?php /* Smarty version 2.6.25, created on 2021-03-21 10:45:43
         compiled from ffsm/bazijp.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>四柱八字精批测试_2021流年运程分析大全_八字测试-<?php echo $this->_tpl_vars['zhanming']; ?>
</title>
<meta name="Keywords" content="八字精批,八字测试,运程分析,流年运程" />
<meta name="Description" content="根据出生年月日排算出周易八字信息，对八字进行精批测试，分析命主的流年运势，八字中可以分析一生运势旺衰，可以达到趋吉避凶让运势一帆风顺。" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/bazimf/wap.min-v=0817.css" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/bazimf/style.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="/statics/ffsm/bazimf/sty.css"/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/wx_share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="statics/ffsm/public/js/require/require.min.js"></script>
<script src="statics/ffsm/public/js/common.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">2021年八字精批</h1>
<a class="public_h_home" href="/"></a><a href="?ac=history" class="public_h_menu">我的测试</a></header>
<?php if ($this->_tpl_vars['gundong']): ?><div class="alert-marquee" id="alertMarquee"><p class="inner"><?php echo $this->_tpl_vars['gundong']; ?>
</p></div><?php endif; ?>
<div class="public_banner"  id="submit2">
	<img src="statics/ffsm/bazimf/images/banner_1.jpg" alt="八字精批"/>
    <img src="statics/ffsm/bazimf/images/person.jpg" alt="八字精批"/>
</div>
<div class="public_bg_color">
	<form class="J_ajaxForm J_testFixedShow" id="submit1" action="?ac=bazijp" name="login" method="post" onSubmit="return checkForm();">
		<div class="public_form_wrap" id="miaodian">
			<ul>
				<li>
				<div class="left">
					您的姓名
				</div>
				<div class="auto">
					<input type="text" class="bg_no" id="username" name="username" placeholder="请输入名字（必须汉字）" value=""/>
				</div>
				</li>
				<li>
				<div class="left">
					您的性别
				</div>
				<div class="auto sex sex J_sex">
					<span class="cur" data-value="1"><i></i><font>男</font></span><span data-value="0"><i></i><font>女</font></span><input type="hidden" name="gender" value="1"/>
				</div>
				</li>
				<li>
				<div class="left">
					出生日期
				</div>
				<div class="auto">
					<input type="text" id="birthday" data-input-id="b_input" class="Js_date" data-type="0" value="请选择出生日期" placeholder="请选择日期" data-toid-hour="birthday">
				</div>
				</li>
                <input type="hidden" name="h"  class="auto input J-time" id='j_dd'  value="">
                <input type="hidden" name=y  value="0">
                <input type="hidden" name=m  value="0">
                <input type="hidden" name=d  value="0">
                
                <input type="hidden" name=i  value="0">
                <input type="hidden" name=cY  value="">
                <input type="hidden" name=cM  value="">
                <input type="hidden" name=cD  value="">
                <input type="hidden" name=cH  value="">
                <input type="hidden" name=term1  value="">
                <input type="hidden" name=term2  value="">
                <input type="hidden" name=start_term  value="">
                <input type="hidden" name=end_term  value="">
                <input type="hidden" name=start_term1  value="">
                <input type="hidden" name=end_term1  value="">
                <input type="hidden" name=lDate  value="">
			</ul>
		</div>
		<div class="public_btn_s">
        	<input type="button" value="立即测试" class="J_ajax_submit_btnsub">
		</div>
	</form>
</div>
<div class="public_bg_color">
	<div class="know_img">
		<img src="statics/ffsm/bazimf/images/jp_1.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_2.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_3.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_4.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_5.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_6.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_8.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_9.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_10.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_11.png" alt="测试后您将知道以下信息"/>
		<img src="statics/ffsm/bazimf/images/jp_12.png" alt="测试后您将知道以下信息"/>
	</div>
</div>
<style type="text/css">
.input_btn {
    margin: 10px 2px;
    overflow: hidden;
}

.input_btn a {
    width: 100%;
    float: left;
	margin:0 auto;
    box-sizing: border-box;
    height: 36px;
    line-height: 36px;
    color: #fff;
    text-align: center;
}

.as_form .input_btn .cancel {
    background-color: #999;
	border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
	
}

.input_btn .sure {
    border: 1px solid #f90;
    background-color: #f90;
}

.input_text, .as_form .input_textarea {
    position: relative;
    display: block;
    overflow: hidden;
    padding: 0 0 0 100px;
    height: 32px;
    margin: 6px 4px;
}

.input_text span, .as_form .input_textarea span {
    width: 94px;
    padding: 0 0 0 6px;
    position: absolute;
    left: 0;
    top: 0;
    height: 32px;
    line-height: 32px;
}
.input_text input, .as_form .input_textarea textarea {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    height: 32px;
    padding: 0 4px;
}

.as_form {
    position: relative;
	margin:0;
}
</style>
<div class="lunpan_box" style="display:none;">
	<div class="lunpan">
		<img src="statics/ffsm/bazisyy/1/images/luopan.png" alt="轮盘">
		<img src="statics/ffsm/bazisyy/1/images/zhizheng.png" alt="轮盘">
	</div>
	<div class="lunpan_color"></div>
</div>
<script>
        $(function(){
            // 服务轮播
            var scrollTop=0;
            var scrollUl=$('#feedbackScroll').children('ul');
            function scrollTip(){
                var top=scrollUl.children('li').eq(0).outerHeight();
                if(Math.abs(scrollTop)==Math.abs(top)){
                    scrollUl.children('li').eq(0).appendTo(scrollUl);
                    scrollUl.css("top",0);
                    scrollTop=0;
                }else{
                    scrollTop--;
                    scrollUl.css("top",scrollTop);
                }
            }
            setInterval(scrollTip,50);
        })
    </script>
<div class="protocol_pop_box" id="protocolPopBox">
	<div class="ppb_content">
		<div class="ppb_title">
			个人隐私协议
		</div>
		<div class="ppb_text">
			<p>
				尊敬的用户，欢迎阅读本协议：
			</p>
			<p>
				<?php echo $this->_tpl_vars['zhanming']; ?>
依据本协议的规定提供服务，本协议具有合同效力。您必须完全同意以下所有条款，才能保证享受到更好的服务。您使用服务的行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
			</p>
			<p>
				用户在申请<?php echo $this->_tpl_vars['zhanming']; ?>
服务过程中，需要填写一些必要的个人信息，为了更好的为用户服务，请保证提供的这些个人信息的真实、准确、合法、有效并注意及时更新。<strong>若因填写的信息不完整或不准确，则可能无法使用本服务或在使用过程中受到限制。如因用户提供的个人资料不实或不准确，给用户自身造成任何性质的损失，均由用户自行承担。</strong>
			</p>
			<p>
				保护用户个人信息是<?php echo $this->_tpl_vars['zhanming']; ?>
的一项基本原则，<?php echo $this->_tpl_vars['zhanming']; ?>
运用各种安全技术和程序建立完善的管理制度来保护用户的个人信息，以免遭受未经授权的访问、使用或披露。<strong>未经用户许可<?php echo $this->_tpl_vars['zhanming']; ?>
不会向第三方（<?php echo $this->_tpl_vars['zhanming']; ?>
公司或关联、运营合作单位除外）公开、透露用户个人信息，但由于政府要求、法律政策需要等原因除外。</strong>
			</p>
			<p>
				在用户发送信息的过程中和本网站收到信息后，<strong>本网站将遵守行业通用的标准来保护用户的私人信息。但是任何通过因特网发送的信息或电子版本的存储方式都无法确保100%的安全性。因此，本网站会尽力使用商业上可接受的方式来保护用户的个人信息，但不对用户信息的安全作任何担保。</strong>
			</p>
			<p>
				此外，您已知悉并同意：<strong>在现行法律法规允许的范围内，<?php echo $this->_tpl_vars['zhanming']; ?>
可能会将您非隐私的个人信息用于市场营销，使用方式包括但不限于：在网页或者app平台中向您展示或提供广告和促销资料，向您通告或推荐服务或产品信息，使用，短信等方式推送其他此类根据您使用<?php echo $this->_tpl_vars['zhanming']; ?>
服务或产品的情况所认为您可能会感兴趣的信息。</strong>
			</p>
			<p>
				本网站有权在必要时修改服务条例，<strong>本网站的服务条例一旦发生变动，将会在本网站的重要页面上提示修改内容，用户如不同意新的修改内容，须立即停止使用本协议约定的服务，否则视为用户完全同意并接受新的修改内容。</strong>根据客观情况及经营方针的变化，本网站有中断或停止服务的权利，用户对此表示理解并完全认同。
			</p>
			<p>
				如果您还有其他问题和建议，可以通过<?php echo $this->_tpl_vars['lianxifs']; ?>
或者微信关注【<?php echo $this->_tpl_vars['weixinhao']; ?>
】联系我们。
			</p>
			<p>
				<?php echo $this->_tpl_vars['zhanming']; ?>
保留对本协议的最终解释权。
			</p>
		</div>
		<div class="ppb_close" id="protocolHideBtn">
			<b>关闭</b>
		</div>
	</div>
</div>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测试首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="#submit2"class="botpost"><em><i class="lijics_1"></i></em><p>立即测试</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测试</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>个人中心</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#ff5e5e; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
.ainuo_foot_nav li{width: 20%; text-align: center; float: left;}
.ainuo_foot_nav li a{width: 100%; display: block;}
.ainuo_foot_nav .foothover i{color: #f13030;}
.ainuo_foot_nav li i{display: block; line-height: 25px; height: 25px; margin: auto; padding: 0; width: 25px; overflow: hidden; background-size: 100%;}
.ainuo_foot_nav li a.botpost{position: relative; margin-top: -11px; background-color: rgba(0,0,0,0.0);}
.ainuo_foot_nav li a.botpost em{background: #ffffff; padding: 2px; border: 1px solid #ff5e5e; display: block; border-radius: 50%; width: 30px; height: 30px; margin: 0 auto; margin-bottom: 2px;padding-bottom: 0px;}
.ainuo_foot_nav li p{overflow: hidden; font-size: 12px; height: 16px; line-height: 16px; color: #fff; font-weight: 400;}
.shouye_1{background: url(/statics/ffsm/public/images/shouye.png) no-repeat;}
.wddd_1{background: url(/statics/ffsm/public/images/dingdan.png) no-repeat;}
.lijics_1{background: url(/statics/ffsm/public/images/suan.png) no-repeat;}
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<script>
$('.J_ajax_submit_btnsub').click(function(){
	if ("undefined" == typeof layer) {
		alert("正在准备中，请稍等...");
		$('.lunpan_box').css('display','none');
		document.login.username.focus();
		return false;
	}
        $('.lunpan_box').css('display','block');
            setTimeout(function(){checkForm();},1000);
});
</script>

<script>
    //测试底部悬浮
    (function(){
    	var topShow=$(".J_testFixedShow");
    	if(topShow.length){
            var topShow=topShow.offset().top;
    		var testBtn=$("#testFixedBtn");
    		$(window).scroll(function(){
                var wt=$(window).scrollTop();
                wt>topShow?(testBtn.fadeIn(),$('.public_footer_servers').css('padding-bottom','50px')):(testBtn.fadeOut(),$('.public_footer_servers').css('padding-bottom','20px'));
            });
            testBtn.add('.J_testScrollTop').on('click',function(){$('html,body').scrollTop(topNum)})
    	}
    })()
</script>
<script src="statics/suanming.js"></script>
<script type="text/javascript">
function _resize(){
    var html= document.getElementsByTagName('html')[0];
    var hW = html.offsetWidth > 750 ? 750 : html.offsetWidth;
    var fS = 100/750 * hW;
    html.style.fontSize = fS+"px"
}
_resize();
window.onresize = function(){
    _resize();
};
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/dl_ck.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>