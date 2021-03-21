<?php /* Smarty version 2.6.25, created on 2021-03-21 11:23:48
         compiled from ffsm/index.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title><?php echo $this->_tpl_vars['zhanming']; ?>
</title>
<meta name="keywords" content="在线算命,星座测试,塔罗占卜" />
<meta name="description" content="姓名测试打分是根据五格姓名学、周易八字、生肖运势、十二星座等制作而成的，它包含了姓名对人生的影响，五格、三才、人格、地格、总格、外格以及人的性格等的影响。其中还包含吕祖灵签、观音灵签、起名字等供大家参考。" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1, minimum-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="statics/ffsm/favicon.ico"/>
<link href="statics/ffsm/public/wap.min-v=0817.css" rel="stylesheet" type="text/css"/>
<link href="statics/ffsm/index/swiper.min.css" rel="stylesheet" type="text/css"/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/wx_share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="statics/ffsm/index/swiper.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con"><?php echo $this->_tpl_vars['zhanming']; ?>
</h1>
<a href="/?ac=member" class="public_h_menu">个人中心</a></header>
<?php if ($this->_tpl_vars['gundong']): ?><div class="alert-marquee" id="alertMarquee"><p class="inner"><?php echo $this->_tpl_vars['gundong']; ?>
</p></div><?php endif; ?>
<div class="CommonSwiper">
	<div class="swiper-container swiper-container-horizontal swiper-container-wp8-horizontal">
		<div class="swiper-wrapper">





			<div class="swiper-slide">
				<a href="/?ac=taluoxinli"><img src="/statics/ffsm/index/images/1.jpg" class="index_img">
					<p class="img_title"></p>
				</a>
			</div>
			<div class="swiper-slide">
				<a href="/?ac=dashi"><img src="/statics/ffsm/index/images/2.jpg" class="index_img">
					<p class="img_title"></p>
				</a>
			</div>
			
			<div class="swiper-slide">
				<a href="/?ac=aiqingyun"><img src="/statics/ffsm/index/images/6.jpg" class="index_img">
					<p class="img_title"></p>
				</a>
			</div>
			<div class="swiper-slide">
				<a href="/?ac=bazijp"><img src="/statics/ffsm/index/images/5.jpg" class="index_img">
					<p class="img_title"></p>
				</a>
			</div>
			<div class="swiper-slide">
				<a href="/?ac=xydd"><img src="/statics/ffsm/index/images/7.jpg" class="index_img">
					<p class="img_title"></p>
				</a>
			</div>
			</div>
		<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
	</div>
</div>

<div class="menu">
	<ul>
        <li><a href="/?ac=bazijp"><img src="/statics/ffsm/index/images/007.jpg" alt="" class="bg7"><p>八字精批</p></a></li>
        <li><a href="/?ac=bzyy"><img src="/statics/ffsm/index/images/005.jpg" alt="" class="bg5"><p>命中注定</p></a></li>
        <li><a href="/?ac=hehun"><img src="/statics/ffsm/index/images/001.jpg" alt="" class="bg1"><p>八字合婚</p></a></li>
        <li><a href="/?ac=xmpd"><img src="/statics/ffsm/index/images/004.jpg" alt="" class="bg4"><p>男女配对</p></a></li>
		<li><a href="/?ac=taluoanlian"><img src="/statics/ffsm/index/images/002.jpg" alt="" class="bg2"><p>暗恋评估</p></a></li>
		<li><a href="/?ac=taluoyunshi"><img src="/statics/ffsm/index/images/003.jpg" alt="" class="bg3"><p>塔罗占卜</p></a></li>
		<li><a href="/?ac=xingzuo"><img src="/statics/ffsm/index/images/006.png" alt="" class="bg6"><p>星座运势</p></a></li>
      	<li><a href="/?ac=xydd"><img src="/statics/ffsm/index/images/008.jpg" alt="" class="bg8"><p>点灯祈福</p></a></li>

	</ul>
</div>
      
  <div class="xm_item">
    <div class="xm_item_tit">
    <dd>算命街</dd>
    </div>
  <div class="smjlist"> 
   <ul class="clearfix"> 
    <li> <a href="/?ac=gsqm"> <p class="ptit">公司测名</p> <p class="ptxt">最适合的吉祥美名</p> <p class="pimg"><img src="/statics/ffsm/index/images/gsqmi.png" alt="" /></p> </a> </li> 
    <li> <a href="/?ac=yinyuancs"> <p class="ptit">算姻缘</p> <p class="ptxt">想脱单的你必看</p> <p class="pimg"><img src="/statics/ffsm/index/images/0002.jpg" alt="" /></p> </a> </li> 
    <li> <a href="/?ac=hehun"> <p class="ptit">婚前合婚</p> <p class="ptxt">避免短命的婚姻</p> <p class="pimg"><img src="/statics/ffsm/index/images/0003.jpg" alt="" /></p> </a> </li> 
    <li> <a href="/?ac=bazi"> <p class="ptit">算财运</p> <p class="ptxt">财富命盘 偏财运</p> <p class="pimg"><img src="/statics/ffsm/index/images/0004.jpg" alt="" /></p> </a> </li> 
    <li> <a href="/?ac=hmjx"> <p class="ptit">手机号测吉凶</p> <p class="ptxt">解读数字能量</p> <p class="pimg"><img src="/statics/ffsm/index/images/0005.jpg" alt="" /></p> </a> </li>
    <li> <a href="/?ac=xydd"> <p class="ptit">祈福点灯</p> <p class="ptxt">点明灯 招好运</p> <p class="pimg"><img src="/statics/ffsm/index/images/0006.jpg" alt="" /></p> </a> </li> 
   </ul> 
  </div>
  </div>

    
    
 <div class="xm_item">
    <div class="xm_item_tit">
    <dd>全部测算</dd>
    </div>
<div class="sortlist">
 <ul class="clearfix">
    <li>
      <a href="/?ac=xydd">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/12.jpg" alt=""></p>
        <p class="ptxt">点灯祈福，数万缘友加持助你达成心愿！</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>649197测试</span>
          <span>
            <i class="ihp"></i>99%好评</span>
        </p>
      </a>
    </li>
    
    
  
    
    
    
    <li>
      <a href="/?ac=xingzuo">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/xingzuo.jpg" alt=""></p>
        <p class="ptxt">2021年十二星座运势分析专业版</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>254160测试</span>
          <span>
            <i class="ihp"></i>98.8%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=taluoaiqing">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/21.jpg" alt=""></p>
        <p class="ptxt">深度占卜，让你更加透彻的了解自己的感情</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>1080746测试</span>
          <span>
            <i class="ihp"></i>97.8%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=ziwei">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/16.jpg" alt=""></p>
        <p class="ptxt">知流年安太岁，事事顺遂</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>15409测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=taluobieren">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/22.jpg" alt=""></p>
        <p class="ptxt">他心里只有你，还是开始有了别人</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>14501测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=taluoxinli">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/02.jpg" alt=""></p>
        <p class="ptxt">塔罗牌占卜-揭秘Ta的心里究竟有没有你？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>16509测试</span>
          <span>
            <i class="ihp"></i>好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=taluojixu">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/20.jpg" alt=""></p>
        <p class="ptxt">和你现在的恋人该继续发展下去吗？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>92299测试</span>
          <span>
            <i class="ihp"></i>97.1%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=jinnian">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/2020.jpg" alt=""></p>
        <p class="ptxt">2021庚子牛年运势分析、抢占先机</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>514812</span>
          <span>
            <i class="ihp"></i>99.6%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=xmpd">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/05.jpg" alt=""></p>
        <p class="ptxt">从姓名分析你们的缘分深浅</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>684021测试</span>
          <span>
            <i class="ihp"></i>98.3%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=bazijp">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/06.jpg" alt=""></p>
        <p class="ptxt">神准预测！传统八字详批</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>33835测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=hmjx">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/07.jpg" alt=""></p>
        <p class="ptxt">您的手机号码蕴含什么魔力？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>65884测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=hehun">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/08.jpg" alt=""></p>
        <p class="ptxt">[专业合婚配对]开启专属你们的婚姻幸福密码</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>549631测试</span>
          <span>
            <i class="ihp"></i>97.5%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=xmfx">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/xmfx.jpg" alt=""></p>
        <p class="ptxt">你的名字跟你的八字相合还是相冲突，能搭配吗？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>14501测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=bazi">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/10.jpg" alt=""></p>
        <p class="ptxt">想成为有钱人？八字财运告诉你发财机会</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>27949测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=yinyuancs">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/11.jpg" alt=""></p>
        <p class="ptxt">恋爱桃花运 看看你最近异性缘怎么样？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>465181测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=xydd">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/12.jpg" alt=""></p>
        <p class="ptxt">点灯祈福，数万缘友加持助你达成心愿！</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>649197测试</span>
          <span>
            <i class="ihp"></i>99%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=bzyy">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/13.jpg" alt=""></p>
        <p class="ptxt">月老牵线，紧抓真爱机缘</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>329487测试</span>
          <span>
            <i class="ihp"></i>98.6%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=aiqingyun">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/14.jpg" alt=""></p>
        <p class="ptxt">看你什么时候会恋爱结婚</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>38792测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=bazi">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/15.jpg" alt=""></p>
        <p class="ptxt">看事业财运,能否飞黄腾达一看便知</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>291903测试</span>
          <span>
            <i class="ihp"></i>97.9%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=ffqm">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/17.jpg" alt=""></p>
        <p class="ptxt">宝宝起名 送宝宝一世好名（命）</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>204732测试</span>
          <span>
            <i class="ihp"></i>98.7%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=ziwei">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/18.jpg" alt=""></p>
        <p class="ptxt">紫薇命盘，揭命运本质</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>288765测试</span>
          <span>
            <i class="ihp"></i>98.8%好评</span>
        </p>
      </a>
    </li>
    <li>
      <a href="/?ac=taluotuodan">
        <p class="pimg">
          <img src="/statics/ffsm/index/images/19.jpg" alt=""></p>
        <p class="ptxt">未来三个月内你会脱单吗？</p>
        <p class="pbot">
          <span>
            <i class="ics"></i>158751测试</span>
          <span>
            <i class="ihp"></i>96.8%好评</span>
        </p>
      </a>
    </li>
  </ul>
<div class="group_container" id="taluo">
   <div id="tab_scroll_2"></div>
   <img class="part_title" src="/statics/ffsm/index/images/sycy_title1.png" alt="">
   <div class="cs_item">
    <div class="left">
     <a href="/?ac=taluofuhe"><img class="cs_img" src="/statics/ffsm/index/images/taluofuhe.png" alt=""></a>
    </div>
    <a href="/?ac=taluofuhe"><div class="right">
     立即查看
    </div>
    <div class="middle">
     <div class="div_one">
      你能和前任复合吗
     </div>
     <div class="div_two">
      精准分析→你是否应该和前任复合←
     </div>
     <div class="div_three">
      <img src="/statics/ffsm/index/images/cesuan_icon.png" alt="">
      <span>39.15万人查看</span>
      <img class="img_haoping" src="/statics/ffsm/index/images/haoping_icon.png" alt="">
      <span>98.4%好评</span>
     </div>
    </div></a>
   </div>
   <div class="cs_item">
    <div class="left">
     <a href="/?ac=taluozuihou"><img class="cs_img" src="/statics/ffsm/index/images/zuihou.png" alt=""></a>
    </div>
    <a href="/?ac=taluozuihou"><div class="right">
     立即查看
    </div>
    <div class="middle">
     <div class="div_one">
      你和TA能走到最后吗？
     </div>
     <div class="div_two">
      你爱的人和你真的合适吗？
     </div>
     <div class="div_three">
      <img src="/statics/ffsm/index/images/cesuan_icon.png" alt="">
      <span>31.14万人查看</span>
      <img class="img_haoping" src="/statics/ffsm/index/images/haoping_icon.png" alt="">
      <span>96.2%好评</span>
     </div>
    </div></a>
   </div>
   
   <div class="cs_item">
    <div class="left">
     <a href="/?ac=taluofenshou"><img class="cs_img" src="/statics/ffsm/index/images/taluofenshou.png" alt=""></a>
    </div>
    <a href="/?ac=taluofenshou"><div class="right">
     立即查看
    </div>
    <div class="middle">
     <div class="div_one">
      你和他该分手吗？
     </div>
     <div class="div_two">
      失望？心累？感情还要继续吗？
     </div>
     <div class="div_three">
      <img src="/statics/ffsm/index/images/cesuan_icon.png" alt="">
      <span>31.14万人查看</span>
      <img class="img_haoping" src="/statics/ffsm/index/images/haoping_icon.png" alt="">
      <span>96.2%好评</span>
     </div>
    </div></a>
   </div>
</div>

   <div class="cs_item">
    <div class="left">
     <a href="/?ac=taluoanlian"><img class="cs_img" src="/statics/ffsm/index/images/taluoanlian.png" alt=""></a>
    </div>
    <a href="/?ac=taluoanlian"><div class="right">
     立即查看
    </div>
    <div class="middle">
     <div class="div_one">
      塔罗牌暗恋对象评估
     </div>
     <div class="div_two">
      什么相处模式最适合你们？
     </div>
     <div class="div_three">
      <img src="/statics/ffsm/index/images/cesuan_icon.png" alt="">
      <span>31.14万人查看</span>
      <img class="img_haoping" src="/statics/ffsm/index/images/haoping_icon.png" alt="">
      <span>96.2%好评</span>
     </div>
    </div></a>
   </div>
</div>

</div>
</div>
<script type="text/javascript" src="/statics/ffsm/public/js/dibu.js"></script>
<link href="/statics/user/css/extend_module.css" rel="stylesheet" type="text/css"/>
<div class="zcdgbox"><a href="javascript:void(0)" class="back_top" id="back_top" style="display: inline-block;"></a></div>
<div class="zxcs-fixed">
  <div class="tabs-wrapper">
    <div class="tab index-tab">
      <div class="icon icon-sy">
        <img src="/statics/ffsm/index/images/daquan.png"></div>
      <div class="active tab-name">测试大全</div></div>
    <div class="tab index-tab" onclick="window.open('/?ac=dashi','_self')">
      <div class="icon icon-sy">
        <img src="/statics/ffsm/index/images/dashiyy.png"></div>
      <div class="tab-name">大师预约</div></div>
      
      
   
    <!--<div class="tab index-tab" onclick="window.open('?ac=rtcaiyun','_self')">
      <div class="icon icon-sy">
        <img src="/statics/ffsm/index/images/yun.png">
      </div>
      <div class="tab-name">实时运程</div>
    </div>-->
 

  </div>
  
  
  
</div>

<script language="javascript">   
function keypress1() javascript:;
{  
    var text1 = document.getElementById("title").value;  
    var len = 30 - text1.length;  
    var show = "" + len + "";  
    document.getElementById("name").innerText = show;  
}
        function toggle(targetid){
            if (document.getElementById){
                target=document.getElementById(targetid);
                if (target.style.display=="block"){
                    target.style.display="none";
                } else {
                    target.style.display="block";
                }
            }
        }
</script>
<script>
	//图片轮播
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 1,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	//TAB——Box
	var switchBox=$('.m-wrap'),
		switchTit=$('#tab>li');
	function xun(num){
		for(var i=0,len=switchBox.length;i<len;i++){
			if(num == i){
				switchBox[i].style.display="block";
			}else{
				switchBox[i].style.display='none';
			}
		}
	}
	for(var j=0;j<switchTit.length;j++){
		switchTit[j].setAttribute('data-num',j);
		switchTit[j].addEventListener('click',function(){
			var num=this.getAttribute('data-num');
			$(this).parents('ul').find('li').find('div').removeClass('select').siblings('span').removeClass('line');
			$(this).find('div').addClass('select').siblings('span').addClass('line');
			xun(num);
		})
	}
</script>
<footer class="public_footer">
</p>
<?php echo $this->_tpl_vars['shouyedb']; ?>




<img src="/statics/ffsm/index/images/footer.png" alt="">
</footer>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?<?php echo $this->_tpl_vars['tongjidm']; ?>
";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
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