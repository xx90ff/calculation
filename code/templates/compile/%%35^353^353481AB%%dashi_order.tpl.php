<?php /* Smarty version 2.6.25, created on 2021-03-21 10:26:55
         compiled from ffsm/dashi/dashi_order.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title><?php echo $this->_tpl_vars['des']; ?>
_大师在线服务-<?php echo $this->_tpl_vars['zhanming']; ?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/dashi/dashi.css" rel="stylesheet" type="text/css"/>
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
<?php if ($this->_tpl_vars['gundong']): ?><div class="alert-marquee" id="alertMarquee"><p class="inner"><?php echo $this->_tpl_vars['gundong']; ?>
</p></div><?php endif; ?>
<header class="public_header">
<h1 class="public_h_con"><?php echo $this->_tpl_vars['names']['username']; ?>
的预约</h1>
<a class="public_h_home" href="/?ac=dashi"></a><a href="?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="<?php echo $this->_tpl_vars['names']['images']; ?>
" alt="<?php echo $this->_tpl_vars['dsyy_row']['project']; ?>
"/>
	<span><?php echo $this->_tpl_vars['des']; ?>
</span>
</div>
<div class="person">
  <div class="hd">
    <img src="/statics/ffsm/dashi/images/renx.png"></div>
  <div class="infos J_testFixedShow">
    <p>姓名：<?php echo $this->_tpl_vars['names']['username']; ?>
</p>
    <p>性别：<?php if ($this->_tpl_vars['names']['gender'] == 1): ?>男<?php else: ?>女<?php endif; ?></p>
    <p>生日：<?php echo $this->_tpl_vars['names']['y']; ?>
年<?php echo $this->_tpl_vars['names']['m']; ?>
月<?php echo $this->_tpl_vars['names']['d']; ?>
日<?php if ($this->_tpl_vars['names']['h'] >= 0): ?><?php echo $this->_tpl_vars['names']['h']; ?>
<?php else: ?>未知<?php endif; ?>时</p>
    <p>电话：<?php echo $this->_tpl_vars['tel']; ?>
</p>
  </div>
</div>
<p class="pcombtn" id="submit2">
    <span class="bediv spsl">2606测试</span>
    <span class="bediv sppj">5评价</span>
    <span class="bediv sphp">96.78%好评</span>
</p>
<div class="fenge"></div>
    <div class="price">
      <p class="tit1 tcenter">预约金额<?php echo $this->_tpl_vars['money']; ?>
元</p>
      <div class="clearfix inner">
        <ul class="pay-type">
          <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 1 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
          <a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1"><li class="on" id="wx_zf">
            <span class="pay-icon icon-wechat"></span>
            <span>微信支付</span>
            <span class="gopaywx">立即支付</span>
          </li></a>
            <?php endif; ?>
          <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 2 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
              <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2"><li id="zfb_zf">
            <span class="pay-icon icon-zfb"></span>
            <span>支付宝支付</span>
            <span class="gopayzfb">立即支付</span>
          </li></a>
            <?php endif; ?>
		<?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 4): ?>
 			 <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=wxpay"><li class="on" id="wx_zf">
            <span class="pay-icon icon-wechat"></span>
            <span>微信支付</span>
            <em class="ico-arrow"></em>
          </li></a>
              <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=alipay"><li id="zfb_zf">
            <span class="pay-icon icon-zfb"></span>
            <span>支付宝支付</span>
            <em class="ico-arrow"></em>
          </li></a>
		<?php endif; ?>
          <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 5): ?>
           <a class="alipay" target="_self" href="/?ct=pay&ac=paypal_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
"><li id="zfb_zf">
            <span class="pay-icon icon-paypal"></span>
            <span>paypal支付</span>
            <em class="ico-arrow"></em>
          </li></a>
         <?php endif; ?>
		 <?php if ($this->_tpl_vars['jf_sys_on'] == 1): ?>
 			 <a class="weixin" target="_self" href="/?ac=extgo&oid=<?php echo $this->_tpl_vars['oid']; ?>
"><li class="on" id="wx_zf">
            <span class="pay-icon icon-extpay"></span>
            <span>积分支付</span>
            <em class="ico-arrow"></em>
          </li></a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['vip_on'] == 1): ?>
		 <a class="weixin" target="_self" href="/?ac=vip_pay&oid=<?php echo $this->_tpl_vars['oid']; ?>
"><li class="on" id="wx_zf">
            <span class="pay-icon icon-vip_pay"></span>
            <span>vip免支付</span>
            <em class="ico-arrow"></em>
          </li></a>
          <?php endif; ?>
        </ul>
      </div>
    </div>
<div class="fenge"></div>
<div class="scsm-box">
    <h1>预约说明</h1>
    <p>预约项目：<?php echo $this->_tpl_vars['names']['title']; ?>
</p>
    <p>请确保联系方式正确，方便我们与您取得联系。</p>
    <p>付款后也可获取为您分配的大师联系方式，可主动联系预约大师。</p>
</div>
  
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="#submit2"class="botpost"><em><i class="lijics_1"></i></em><p>立即预约</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>个人中心</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#d6b168; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
.ainuo_foot_nav li{width: 20%; text-align: center; float: left;}
.ainuo_foot_nav li a{width: 100%; display: block;}
.ainuo_foot_nav .foothover i{color: #f13030;}
.ainuo_foot_nav li i{display: block; line-height: 25px; height: 25px; margin: auto; padding: 0; width: 25px; overflow: hidden; background-size: 100%;}
.ainuo_foot_nav li a.botpost{position: relative; margin-top: -11px; background-color: rgba(0,0,0,0.0);}
.ainuo_foot_nav li a.botpost em{background: #ffffff; padding: 2px; border: 1px solid #d6b168; display: block; border-radius: 50%; width: 30px; height: 30px; margin: 0 auto; margin-bottom: 2px;padding-bottom: 0px;}
.ainuo_foot_nav li p{overflow: hidden; font-size: 12px; height: 16px; line-height: 16px; color: #fff; font-weight: 400;}
.shouye_1{background: url(/statics/ffsm/public/images/shouye.png) no-repeat;}
.wddd_1{background: url(/statics/ffsm/public/images/dingdan.png) no-repeat;}
.lijics_1{background: url(/statics/ffsm/dashi/images/yu.png) no-repeat;width: 28px!important;}
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<script>
    //测算底部悬浮
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
<script type="text/javascript">
  //支付后检测跳转
  <?php if ($this->_tpl_vars['yz_pay'] == 1): ?>
       var inquiry_lock = 0;
    $(function () {
        setInterval(function () {
            inquiry(); 
        }, 1000);
    });
    function inquiry() {
        if (inquiry_lock) {
            return;
        }
        $.get('/?ct=pay&ac=scanquery&oid=<?php echo $this->_tpl_vars['oid']; ?>
', {t: Date.parse(new Date())}, function (data) {
            if (data.status) {
                inquiry = 1;
                $('div.weixin .green').html('支付成功');
                window.location = data.url;
            }
        }, 'json');
    }
  <?php endif; ?>
</script>
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
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/dashi/tuijian.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="height: 0.7rem;"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footers.tpl', 'smarty_include_vars' => array()));
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