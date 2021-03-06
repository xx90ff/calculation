<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title><{$sh_title}></title>
  <meta name="viewport" content="minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="email=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="screen-orientation" content="portrait">
  <meta name="x5-orientation" content="portrait">
  <meta http-equiv="Cache-Control" content="no-siteapp">

  <link rel="stylesheet" href="/statics/ffsm/ssjs/css/swiper.min.css">
  <link rel="stylesheet" href="/statics/ffsm/ssjs/css/style.css">
  
  <link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
  <link href="/statics/ffsm/ssjs/css/page1.css" rel="stylesheet" type="text/css"/>
  <link href="/statics/ffsm/ssjs/css/wap.css" rel="stylesheet" type="text/css"/>

  <script src="/statics/ffsm/ssjs/js/vue.min.js"></script>
  <script src="/statics/ffsm/ssjs/js/jquery.min.js"></script>
  <link rel="stylesheet" href="/statics/ffsm/ssjs/layui/css/layui.css">  
  <link rel="stylesheet" href="/statics/ffsm/ssjs/css/font/iconfont.css">
  <link rel="stylesheet" href="/statics/ffsm/ssjs/css/public.css">
  <link rel="stylesheet" type="text/css" href="/statics/ffsm/ssjs/css/mobileSelect.css">
  <script src="/statics/ffsm/ssjs/js/mobileSelect.min.js" type="text/javascript"></script>
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
</head>
<body>
<script src="/statics/ffsm/ssjs/layui/layui.js"></script>
<div id="order">
<div class="public_header">
<a class="public_h_con" href="/?ac=ssjs">????????????</a><a href="javascript:void(0)" class="public_h_menu"<{if $nologin}>  onclick="layui.use('layer', function(){layer.msg('??????????????????',{time: 20000,btn: ['?????????','??????'],yes: function(index, layero){
location.href='?ac=userlogin&return_url=<{$return_url}>';
}});});"<{else}>:class="show" @click="chooseCoupon"<{/if}> ><img src="/statics/ffsm/ssjs/img/wddd.png" /></a></div>
<div class="alert-marquee" id="alertMarquee"><span><img src="/statics/ffsm/ssjs/img/laba.png" /></span><p class="inner"><{$gundong}></p></div>
<div :class="show?'shadow':'shadowHide'" @click="chooseCoupon">

	</div>
<div id="coupon" :class="show?'coupon':'couponHide'">
		
		<div class="choseType">
			<div class="chose">
				<span @click="switchType(0)">????????????({{couPonData.length}})</span>
			</div>
          	<div class="chose_gb">
				<span @click="switchType(1)">??????</span>
			</div>
			<div :class="transNum?'redBorder2':'redBorder'"></div>
		</div>
		<div style="
    overflow: scroll;
    height: 100%;
">
			<div class="flexCol couponCard" v-for="(item,index) in dataObj" :key="index" @click="useCoupon(item.money,index+1,item.isUse)">
				<div v-if="item.isUse" class="flexRow couponCardHeader">
					<div class="flexCol money">
						<div class="sale">{{item.useMessage}}</div>
						<div class="word">??????:{{item.time}}</div>
					</div>
					<div class="flexCol date">
						<div class="title">{{item.name}}</div>
						<div class="word">??????(???):{{item.date}}</div>
					</div>
					<a v-bind:href="item.url" class="couponMsg">
						??????
					</a>
				</div>
				
			</div>
		</div>
	</div>
</div> 
<div class="userinfo <{if $data.data.gender==1}>userinfo_n<{else}>userinfo_v<{/if}>">	
	<div class="userinfo_box">
		<div class="userinfo_box_left">
			<div class="userinfo_left_info">
				<p class="name"><{$data.data.username}><{if $data.data.gender==1}><span class="male">???</span><{else}><span class="female">???</span><{/if}></p>
				<p class="birthday" id="edit_hour">?????????<{$data.data.y}>???<{$data.data.m}>???<{$data.data.d}>??? <{$data.data.h}>??? <i class="layui-icon layui-icon-edit"></i></p>
				<p class="birthday">?????????<{$data.data.lDate}></p>
			</div>
		</div>
		<div class="userinfo_right" >
			<div class="userinfo_right_btn <{$return.wx_col}> layui-anim layui-anim-scale" id="sx_tip">
			<i class="icon iconfont <{$return.sx_icon}>"></i></div>
		</div>
	</div>
</div>
<{include file='./ffsm/ssjs/ss_icon.tpl'}>
<div class="userinfo_jqs">
	<div class="jqsjdwk">
	<div class="skillbar-title ji_jd"><span>?????? : <{$ssysdata.date_jqs.jin}></span></div>
		<div class="skillbar clearfix " data-percent="<{$ssysdata.date_jqs.jin}>%">
			<div class="skillbar-bar ji_jd_cl"></div>
			<div class="skill-bar-percent"></div>
		</div> 
	</div>
	<div class="jqsjdwk">
	<div class="skillbar-title qi_jd"><span>?????? : <{$ssysdata.date_jqs.qi}></span></div>
		<div class="skillbar clearfix " data-percent="<{$ssysdata.date_jqs.qi}>%">
			<div class="skillbar-bar qi_jd_cl"></div>
			<div class="skill-bar-percent"></div>
		</div> 
	</div>
	<div class="jqsjdwk">
	<div class="skillbar-title shen_jd"><span>?????? : <{$ssysdata.date_jqs.shen}></span></div>
		<div class="skillbar clearfix " data-percent="<{$ssysdata.date_jqs.shen}>%">
			<div class="skillbar-bar shen_jd_cl"></div>
			<div class="skill-bar-percent"></div>
		</div> 
	</div>	
</div> 

<div class="later_tip_bgsz">
 
<div class="layui-collapse" lay-accordion>
 <div class="layui-colla-item">
    <h2 class="layui-colla-title sxtit bg_fff">????????????</h2>
    <div class="layui-colla-content bg_fff  ztxy_3vw">
	
	<p>??????:<{$ssysdata.my_attr.collocation}></p>
	<p>??????:<{$ssysdata.my_attr.class}></p>
	<p>??????:<{$ssysdata.my_attr.content}></p>
	</div>
  </div>
	<div class="layui-colla-item">
		<h2 class="layui-colla-title sxtit bg_fff">?????????????????????</h2>
		<div class="layui-colla-content bg_fff  ztxy_3vw">
		
		<table class="layui-table">
		  <colgroup>
			<col width="19%">
			<col width="22%">
			<col>
		  </colgroup>
		  <thead>
			<tr>
			  <th>??????</th>
			  <th>??????</th>
			  <th>??????</th>
			</tr> 
		  </thead>
		  <tbody>
		  <{foreach from=$ssysdata.attr key=k item=v}>
			<tr>
			  <td><{$v.collocation}></td>
			  <td><{$v.class}></td>
			  <td><{$v.content}></td>
			</tr>
			<{/foreach}>
		  </tbody>
		</table>
		</div>
	  </div>
</div>
</div>
<div class="taohuazhi J_testFixedShow">
	<div class="taohuazhi_tit">
	???????????????
	<span class="taohuazhi_tit_l"></span><span class="taohuazhi_tit_r"></span>
	</div>
	<div class="taohuazhi_jd clearfix " data-percent="<{$ssysdata.date_jqs.th}>%">
		<div class="taohuazhi_jd_bar"></div>
		<div class="taohuazhi_jd_bar_percent"><{$ssysdata.date_jqs.th}>%</div>
	</div>
	<div class="taohuazhi_data">
		<div class="taohuazhi_data_info">
			<span class="taohuazhi_data_info_l">?????????</span><span class="taohuazhi_data_info_r"><{$ssysdata.date_jqs.ml}>/100</span>
		</div>
		<div class="taohuazhi_data_info">
			<span class="taohuazhi_data_info_l">?????????</span><span class="taohuazhi_data_info_r"><{$ssysdata.date_jqs.ql}>/100</span>
		</div>
		<div class="taohuazhi_data_info">
			<span class="taohuazhi_data_info_l">?????????</span><span class="taohuazhi_data_info_r"><{$ssysdata.date_jqs.zl}>/100</span>
		</div>
		<div class="taohuazhi_data_info">
			<span class="taohuazhi_data_info_l">?????????</span><span class="taohuazhi_data_info_r"><{$ssysdata.date_jqs.jl}>/100</span>
		</div>
		
	</div>
</div>
<script type="text/javascript">
		$(function(){
			$('.taohuazhi_jd').each(function(){
				$(this).find('.taohuazhi_jd_bar').animate({
					width:$(this).attr('data-percent')
				},1000);
			});
			$('.skillbar').each(function(){
				$(this).find('.skillbar-bar').animate({
					width:$(this).attr('data-percent')
				},1000);
			});
		});
	</script>  
<div class="later_tip_bgsz bg_fff" style="padding: 0;">
	<div class="layui-card">
	  <div class="layui-card-header sxtit_by"><i class="layui-icon layui-icon-chart-screen"></i> ????????????</div>
	  <div class="layui-card-body">
        </br>
		<p>??? ????????????????????????????????????<font color="red">?????????</font>???????????????1?????????1-3????????????</p></br>
		<p>??? ????????????<font color="red">??????3??????</font>??????????????????<font color="red">??????</font>??? ????????????????????????????????????</p></br>
		<p>??? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p></br>
	  </div>
	</div>
</div>
<div class="wrapper">
    <div class="tabs">
        <a href="javascript:;" class="on">????????????</a>
        <a href="javascript:;">????????????</a>
		<a href="javascript:;">????????????</a>
        <a href="javascript:;">????????????</a>
    </div>

    <div class="swiper-container swiper-tabs1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="tabs2">
					<a href="javascript:;"><{$date_time.q3}></a>
					<a href="javascript:;"><{$date_time.q2}></a>
					<a href="javascript:;"><{$date_time.q1}></a>
					<a href="javascript:;" class="on"><{$date_time.td}></a>
					<a href="javascript:;"><{$date_time.h1}></a>
					<a href="javascript:;"><{$date_time.h2}></a>
				</div>			
				<div class="swiper-container swiper-tabs2">
					<div class="swiper-wrapper swiper-no-swiping  layui-ssys-tb">
					
						<div class="swiper-slide">
						<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_q3}></th></tr>
							<tr>
							
							 <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_q3 key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							  <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
							
							
						</div>
						<div class="swiper-slide">
							
							<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_q2}></th></tr> 
							<tr>
							
							  <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_q2 key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							 <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
						</div>
						<div class="swiper-slide">
							<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_q1}></th></tr> 
							<tr>
							
							   <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_q1 key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							 <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
						</div>
						<div class="swiper-slide">

							<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_td}></th></tr> 
							<tr>
							
							   <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_td key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							 <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
							
						</div>
						<div class="swiper-slide">
							<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_h1}></th></tr> 
							<tr>
							
							  <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_h1 key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							 <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
						</div>
						<div class="swiper-slide">
							<table class="layui-table" lay-even>
						  <colgroup>
							<col>
							<col>
							<col>
							<col>
						  </colgroup>
						  <thead>
							<tr><th colspan="5" class="date_show"><{$date_time.date_h2}></th></tr> 
							<tr>
							
							   <th>??????</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
							  <th>???<br>(??????)</th>
                              <th><font color="red">?????????</font></th>
							  
							</tr> 
						  </thead>
						  <tbody>
						  <{foreach from=$ssysdata.date_h2 key=k item=v}>
							<tr>
							  <td><i class="layui-icon layui-icon-log"></i> <{$k}>:00</td>
							  <td><{if $v.zybl.j>=3}><font color="red"><{$v.zybl.j}></font><{else}><{$v.zybl.j}><{/if}></td>
							 <td><{if $v.zybl.q>=3}><font color="red"><{$v.zybl.q}></font><{else}><{$v.zybl.q}><{/if}></td>
							  <td><{if $v.zybl.s>=3}><font color="red"><{$v.zybl.s}></font><{else}><{$v.zybl.s}><{/if}></td>
							  <td><{if $v.zybl.zh>=80}><font color="red"><{$v.zybl.zh}>%</font><{else}><{$v.zybl.zh}>%<{/if}></td>
							</tr>
							<{/foreach}>							
						  </tbody>
						</table>
						</div>
						
					</div>
				</div>
            </div>
			
			
            <div class="swiper-slide">
			<hr class="layui-bg-orange">
				
			   <fieldset class="layui-elem-field">
				  <legend><i class="layui-icon layui-icon-rate-solid layui-bg-orange"></i> ??????:</legend>
				  <div class="layui-field-box">
					?????????????????????????????????(??????)??????(??????)??????(??????)????????????????????????????????????????????????????????????
				  </div>
				</fieldset>
				
				
			<div class="ssyunshi_info ztxy_3vw">
			<table class="layui-table">
				  <colgroup>
					<col>
					<col>
					<col>
				  </colgroup>
				  <thead>
					<tr>
					  <th>??????</th>
					  <th>??????</th>
					  <th>??????</th>
					</tr> 
				  </thead>
				  <tbody>
					<tr>
					  <td>0-1</td>
					  <td>???</td>
					  <td>???????????????????????????</td>
					</tr>
					<tr>
					  <td>1-2</td>
						<td>??????</td>
						<td>????????????????????????</td>
					</tr>
					<tr>
					  <td>2-3</td>
						<td>??????</td>
						<td>????????????????????????</td>
					</tr>
					<tr>
					  <td>3-100</td>
						<td>???</td>
						<td>????????????????????????</td>
					</tr>
				  </tbody>
				</table>
					
				</div>		
				
								
						
      
			</div>
        
			<div class="swiper-slide">
             <hr class="layui-bg-orange">
			 <fieldset class="layui-elem-field">
				  <legend><i class="layui-icon layui-icon-rate-solid layui-bg-orange"></i> ??????:</legend>
				  <div class="layui-field-box">
					??????????????????????????????????????????????????????????????????????????????????????????3?????????????????????????????????????????????????????????????????????
				  </div>
				</fieldset>
				
			
			<div class="layui-collapse mg_bt150" lay-accordion>
			<{foreach from=$ssysdata.ins key=k item=v}>
			  <div class="layui-colla-item">
				<h2 class="layui-colla-title sxtit"><{if $v.jqs==1}>???<{elseif $v.jqs==2}>???<{else}>???<{/if}> ?????????<{$v.score}> <{$v.level}> </h2>
				<div class="ztxy_3vw2 layui-colla-content  <{if $k==11}>layui-show<{/if}>"><{$v.content}></div>
			  </div>
			  <{/foreach}>
			  
			</div>
			 
			
				
				
			</div>
            <div class="swiper-slide">
			<hr class="layui-bg-orange">
		<div class="ssyunshi_info ztxy_3vw">
		<table class="layui-table tabf">
				  <colgroup>
					<col>
					<col>
					<col>
				  </colgroup>
				  <thead>
					<tr>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
						<th>??????</th>
					</tr> 
				  </thead>
				  <tbody>
					 <tr>
					<td>??????</td>
					<td class="col"><{$pp.yg}></td>
					<td class="col"><{$pp.mg}></td>
					<td class="col"><{$pp.rg}></td>
					<td class="col"><{$pp.hg}></td>
					<td class="col"><{$pp.taiyuan_g}></td>
					<td class="col"><{$pp.minggong_g}></td>
					<td class="col"><{$pp.shengong_g}></td>
					</tr>
				  <tr>
					<td>??????</td>
					<td class="col"><{$pp.yz}></td>
					<td class="col"><{$pp.mz}></td>
					<td class="col"><{$pp.rz}></td>
					<td class="col"><{$pp.hz}></td>
					<td class="col"><{$pp.taiyuan_z}></td>
					<td class="col"><{$pp.minggong_z}></td>
					<td class="col"><{$pp.shengong_z}></td>
					</tr>
				  <tr>
					<td>??????</td>
					<td class="col"><{$pp.wuxing.yg}><{$pp.wuxing.yz}></td>
					<td class="col"><{$pp.wuxing.mg}><{$pp.wuxing.mz}></td>
					<td class="col"><{$pp.wuxing.rg}><{$pp.wuxing.rz}></td>
					<td class="col"><{$pp.wuxing.hg}><{$pp.wuxing.hz}></td>
					<td class="col"><{$pp.wuxing.tyg}><{$pp.wuxing.tyz}></td>
					<td class="col"><{$pp.wuxing.mgg}><{$pp.wuxing.mgz}></td>
					<td class="col"><{$pp.wuxing.sgg}><{$pp.wuxing.sgz}></td>

					</tr>
				  <tr>
					<td>??????</td>
					<td class="col"><{$pp.shishen1}></td>
					<td class="col"><{$pp.shishen2}></td>
					<td class="col1">??????</td>
					<td class="col"><{$pp.shishen4}></td>
					<td class="col"><{$pp.shishen5}></td>
					<td class="col"><{$pp.shishen6}></td>
					<td class="col"><{$pp.shishen7}></td>
					</tr>
				  <tr>
					<td>??????</td>
					<td class="col"><{$pp.zanggan1}></td>
					<td class="col"><{$pp.zanggan2}></td>
					<td class="col"><{$pp.zanggan3}></td>
					<td class="col"><{$pp.zanggan4}></td>
					<td class="col"><{$pp.zanggan5}></td>
					<td class="col"><{$pp.zanggan6}></td>
					<td class="col"><{$pp.zanggan7}></td>
					</tr>
				  <tr>
					<td>????????????</td>
					<td class="col"><{$pp.z_shishen1}></td>
					<td class="col"><{$pp.z_shishen2}></td>
					<td class="col"><{$pp.z_shishen3}></td>
					<td class="col"><{$pp.z_shishen4}></td>
					<td class="col"><{$pp.z_shishen5}></td>
					<td class="col"><{$pp.z_shishen6}></td>
					<td class="col"><{$pp.z_shishen7}></td>
					</tr>
				  <tr>
					<td>??????</td>
					<td class="col"><{$pp.nayin1}></td>
					<td class="col"><{$pp.nayin2}></td>
					<td class="col"><{$pp.nayin3}></td>
					<td class="col"><{$pp.nayin4}></td>
					<td class="col"><{$pp.nayin5}></td>
					<td class="col"><{$pp.nayin6}></td>
					<td class="col"><{$pp.nayin7}></td>
					</tr>
				  <tr>
					<td>??????</td>
					<td colspan="7"><{$pp.xkrgz}></td>
				  </tr>
				  <tr>
					<td>????????????</td>
					<td colspan="7"><{$pp.nayinminggong}></td></tr>
				  </tbody>
				</table>
				
				
			
          


			</div>		
      
    
            </div>
        </div>
    </div>
</div>

<script>

	layui.use('element', function(){
	  var element = layui.element;
	  
	});
	
  $('#sx_tip').on('click', function(){
    layui.use('layer', function(){
		layer.msg('?????????<{$return.user.sx}>');
      });
    
    
	});
	var hourArr=["00:00-00:59??????", "01:00-01:59???", "02:00-02:59???", "03:00-03:59???", "04:00-04:59???", "05:00-05:59???", "06:00-06:59???", "07:00-07:59???", "08:00-08:59???", "09:00-09:59???", "10:00-10:59???", "11:00-11:59???", "12:00-12:59???", "13:00-13:59???", "14:00-14:59???", "15:00-15:59???", "16:00-16:59???", "17:00-17:59???", "18:00-18:59???", "19:00-19:59???", "20:00-20:59???", "21:00-21:59???", "22:00-22:59???", "23:00-23:59??????"];
	var mobileSelect1 = new MobileSelect({
		trigger: '#edit_hour',
		title: '????????????',
		triggerDisplayData:false,
		wheels: [
					{data: hourArr}
				],
		position:[<{$data.data.h}>], 
		transitionEnd:function(indexArr, data){
			//console.log(data);
		},
		callback:function(modhour, data){
		layui.use('layer', function(){
			$.ajax({
				type : "POST",
				url : "?ac=rtcaiyun",
				data:{"modhour":modhour[0],"oid":"<{$oid}>"},
				dataType: 'json',
				timeout: 30000,
				success : function(data) {
					if (data.code==200) {
					layer.msg('????????????', {time: 2000},function(){
						window.location.reload();
					});
					}else{
						layer.msg('????????????,???????????????', {time: 2000});
					}
					
				},
				error : function(){
					layer.msg('????????????,???????????????', {time: 2000});
				}

			});
			
			});
		}
	});
	

</script>
  <script src="/statics/ffsm/ssjs/js/swiper.min.js"></script>
  
  
  <script>
  $(function () {
    var tabsSwiper = new Swiper('.swiper-tabs1', {
      autoHeight: true,
	  on: {
        slideChangeTransitionStart: function() {
            $('.tabs .on').removeClass('on');
            $('.tabs a').eq(tabsSwiper.activeIndex).addClass('on');
        },
	},
    });

    $('.tabs a').on('touchstart mousedown', function() {
        var _ = $(this);
        _.addClass('on').siblings().removeClass('on');
        tabsSwiper.slideTo(_.index());
        return false;
    });
	var tabsSwiper2 = new Swiper('.swiper-tabs2', {
      autoHeight: true,
	initialSlide :3,
    });

    $('.tabs2 a').on('touchstart mousedown', function() {
        var _ = $(this);
        _.addClass('on').siblings().removeClass('on');
        tabsSwiper2.slideTo(_.index());
        return false;
    });
});
  </script>
  <script type="text/javascript">
    var home = new Vue({
        el:'#order',
        data:{

            transNum:0,
           
           couPonData:[
			 <{foreach key =k item=i from=$my_order}>
    <{if $i.oid  && $i.status==1}>
	{"name":'<{$i.data.username}>',"time":"<{$i.createtime|date_format:'%m???%d'}>","useMessage":"<{$i.typename}>","date":"<{$i.data.y}>-<{$i.data.m}>-<{$i.data.d}> <{$i.data.h}>???","url":"<{$i.url}>",'isUse':true},
     <{/if}>
 <{/foreach}> 
            ],
            dataObj:[],
            show:false,
            useMoney:'',
            yesClick:null
        },
        created(){
            this.dataObj = this.couPonData;
        },
        methods:{
            switchType(val){
                this.transNum = val;
                switch (val) {
                    case 0:
                        this.dataObj = this.couPonData;
                        break;
                    case 1:
                        this.show = !this.show;
                        break;
                }
            },
            chooseCoupon(){
                this.show = !this.show;
            }
        }
    })
</script>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="?ac=ssjs"><i class="shouye_1"></i><p>????????????</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>????????????</p></a></li>
     <li><a href="?ac=ssjs"><em><i class="lijics_1"></i></em><p>????????????</p></a></li>
     <li><a href="javascript:void(0)" onclick="dcwjalert()"><i class="gengduo_1"></i><p>????????????</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>????????????</p></a></li>
    </ul>
</div>

<script>
//??????????????????
    (function(){
    	var topShow=$(".J_testFixedShow");
    	if(topShow.length){
            var topShow=topShow.offset().top;
    		var testBtn=$("#testFixedBtn");
    		$(window).scroll(function(){
                var wt=$(window).scrollTop();
                wt>topShow?(testBtn.fadeIn(),$('.public_footer_servers').css('padding-bottom','50px')):(testBtn.fadeOut(),$('.public_footer_servers').css('padding-bottom','20px'));
            });
    	}
    })();
	
	
			function dcwjalert(){
				layui.use('layer', function(){
					layer.open({
					  type: 2,
					  title: '????????????',
					  shadeClose: true,
					  shade: 0.8,
					  area: ['100vw', '100vh'],
					  content: 'https://wj.qq.com/s2/6019766/97dc/' 
					});
				  });
			}
			$(function() {
				function setCurrentSlide(ele, index) {
					$(".swiper1 .swiper-slide").removeClass("selected");
					ele.addClass("selected");
					//swiper1.initialSlide=index;
				}

				var swiper1 = new Swiper('.swiper1', {
					slidesPerView: 6,
					paginationClickable: true,//??????????????????true???????????????????????????????????????????????????Swiper?????????
					spaceBetween: 10,//slide????????????????????????px??????
					freeMode: true,//?????????false??????????????????slide??????????????????????????????????????????wrapper????????????true?????????free?????????slide???????????????????????????????????????
					loop: false,
					onTab: function(swiper) {
						var n = swiper1.clickedIndex;
					}
				});
				if(!swiper1.slides){
					return;
				}
				swiper1.slides.each(function(index, val) {
					var ele = $(this);
					ele.on("click", function() {
						setCurrentSlide(ele, index);
						swiper2.slideTo(index, 500, false);
						//mySwiper.initialSlide=index;
					});
				});

				var swiper2 = new Swiper('.swiper2', {
					freeModeSticky: true,
					direction: 'horizontal',//Slides?????????????????????????????????(horizontal)?????????(vertical)???
					loop: false,
//					effect : 'fade',//??????
					//effect : 'cube',//??????
					effect : 'coverflow',//3D???
//					effect : 'flip',//3D??????
					autoHeight: false,//????????????????????????true??????wrapper???container???????????????slide???????????????????????????
					onSlideChangeEnd: function(swiper) {  //???????????????swiper?????????slide??????????????????slide??????????????????
						var n = swiper.activeIndex;
						setCurrentSlide($(".swiper1 .swiper-slide").eq(n), n);
						swiper1.slideTo(n, 500, false);
					}
				});
			});
		</script>
<{include file='./ffsm/ssjs/footer_jg.tpl'}>
<{include file='./ffsm/ss_share.tpl'}>
  </body>
