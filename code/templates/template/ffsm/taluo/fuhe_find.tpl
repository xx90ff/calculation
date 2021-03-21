<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0"/>
    <title>你们有机会复合吗？塔罗占卜-<{$zhanming}></title>
	<{include file='./ffsm/wx_share.tpl'}>
    <script src="/statics/ffsm/taluo/aiqing/rem_tool.js"></script>
    <link rel="stylesheet" href="/statics/ffsm/taluo/fuhe/common.css">
    <link rel="stylesheet" href="/statics/ffsm/taluo/fuhe/result.css">
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">塔罗占卜</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的订单</a></header>
<section class="page" style="padding-bottom: 1.2rem;">
    <section class="main-wrap flex-column">
        <div class="banner-wrap flex-center">
            <img class="banner" src="/statics/ffsm/taluo/fuhe/img/banner.png">
        </div>
        <div class="content-wrap flex-column">
            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/fuhe/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <div class="top-wrap flex-column">
                            <div class="guide-wrap flex-column">
                                <img class="frame frame-top" src="/statics/ffsm/taluo/fuhe/img/frame_top.png">
                                <div class="guide flex-column">
                                    <p class="guide-text first-line" id="first_line">亲爱的<em>测试者</em>：</p>
                                    <p class="guide-text" id="second_line">
                                        曾经相爱的你们，有办法再重修旧好，回到昔日的甜蜜吗？关于你们是否有机会复合，我将根据你所选择的4张牌，给予进一步指引...
                                    </p>
                                </div>
                                <img class="frame frame-bot" src="/statics/ffsm/taluo/fuhe/img/frame_bot.png">
                            </div>
                            <div class="card-group flex-column J_testFixedShow">
                                <img class="card-wall"
                                     src="/statics/ffsm/taluo/fuhe/img/card_wall.png">
                                <div class="tarot-card tarot-card-1 flex-column">
                                        <img src="<{$data.data.carinfo.0.img}>">
                                        <p class="card-name"><{$data.data.carinfo.0.title}></p>
                                        <span>(<{if $data.data.carinfo.0.zf==0}>逆位<{else}>正位<{/if}>)</span>
                                    </div><div class="tarot-card tarot-card-2 flex-column">
                                        <img src="<{$data.data.carinfo.1.img}>">
                                        <p class="card-name"><{$data.data.carinfo.1.title}></p>
                                        <span>(<{if $data.data.carinfo.1.zf==0}>逆位<{else}>正位<{/if}>)</span>
                                    </div><div class="tarot-card tarot-card-3 flex-column">
                                        <img src="<{$data.data.carinfo.2.img}>">
                                        <p class="card-name"><{$data.data.carinfo.2.title}></p>
                                        <span>(<{if $data.data.carinfo.2.zf==0}>逆位<{else}>正位<{/if}>)</span>
                                    </div><div class="tarot-card tarot-card-4 flex-column">
                                        <img src="<{$data.data.carinfo.3.img}>">
                                        <p class="card-name"><{$data.data.carinfo.3.title}></p>
                                        <span>(<{if $data.data.carinfo.3.zf==0}>逆位<{else}>正位<{/if}>)</span>
                                    </div>                            </div>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/fuhe/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                    <img class="border border-top" src="/statics/ffsm/taluo/fuhe/img/border_top.png">
                    <div class="content-panel">
                        <div class="content flex-column">
                            <img class="desc-subtitle"
                                 src="/statics/ffsm/taluo/fuhe/img/subtitle_01.png">
                            <div class="tarot-box flex-column">
                                <img class="card-image" src="<{$data.data.carinfo.0.img}>">
                                <div class="card-intro flex-center">
                                    <img src="/statics/ffsm/taluo/fuhe/img/num_01.png">
                                    <span><{$data.data.carinfo.0.title}><em style="font-size: 14px;">(<{if $data.data.carinfo.0.zf==0}>逆位<{else}>正位<{/if}>)</em></span>
                                </div>
                                <div class="explan-box flex-column">
                                    <p class="explan-title">象征意义:</p>
                                    <p class="explan-text"><{$data.data.carinfo.0.des}></p>
                                    <p class="explan-title">牌面理解:</p>
                                    <p class="explan-text"><{$data.data.carinfo.0.c1}></p>
                                    <p class="explan-title">
                                        对方想法:                                                                                                                                                            </p>
                                    <p class="explan-text"><{$data.data.carinfo.0.c2}></p>
                                </div>
                            </div>
                                                    </div>
                    </div>
                    <img class="border border-bot" src="/statics/ffsm/taluo/fuhe/img/border_bot.png">
                </div><div class="content-box flex-column">
                    <img class="border border-top" src="/statics/ffsm/taluo/fuhe/img/border_top.png">
                    <div class="content-panel">
                        <div class="content flex-column">
                            <img class="desc-subtitle"
                                 src="/statics/ffsm/taluo/fuhe/img/subtitle_02.png">
                            <div class="tarot-box flex-column">
                                <img class="card-image" src="<{$data.data.carinfo.1.img}>">
                                <div class="card-intro flex-center">
                                    <img src="/statics/ffsm/taluo/fuhe/img/num_02.png">
                                    <span><{$data.data.carinfo.1.title}><em style="font-size: 14px;">(<{if $data.data.carinfo.1.zf==0}>逆位<{else}>正位<{/if}>)</em></span>
                                </div>
                                <div class="explan-box flex-column">
                                    <p class="explan-title">象征意义:</p>
                                    <p class="explan-text"><{$data.data.carinfo.1.des}></p>
                                    <p class="explan-title">牌面理解:</p>
                                    <p class="explan-text"><{$data.data.carinfo.1.c1}></p>
                                    <p class="explan-title">
                                                                                当前阻碍:                                                                                                                    </p>
                                    <p class="explan-text"><{$data.data.carinfo.1.c2}></p>
                                </div>
                            </div>
                                                    </div>
                    </div>
                    <img class="border border-bot" src="/statics/ffsm/taluo/fuhe/img/border_bot.png">
                </div><div class="content-box flex-column">
                    <img class="border border-top" src="/statics/ffsm/taluo/fuhe/img/border_top.png">
                    <div class="content-panel">
                        <div class="content flex-column">
                            <img class="desc-subtitle"
                                 src="/statics/ffsm/taluo/fuhe/img/subtitle_03.png">
                            <div class="tarot-box flex-column">
                                <img class="card-image" src="<{$data.data.carinfo.2.img}>">
                                <div class="card-intro flex-center">
                                    <img src="/statics/ffsm/taluo/fuhe/img/num_03.png">
                                    <span><{$data.data.carinfo.2.title}><em style="font-size: 14px;">(<{if $data.data.carinfo.2.zf==0}>逆位<{else}>正位<{/if}>)</em></span>
                                </div>
                                <div class="explan-box flex-column">
                                    <p class="explan-title">象征意义:</p>
                                    <p class="explan-text"><{$data.data.carinfo.2.des}></p>
                                    <p class="explan-title">牌面理解:</p>
                                    <p class="explan-text"><{$data.data.carinfo.2.c1}></p>
                                    <p class="explan-title">
                                                                                                                        复合机率:                                                                            </p>
                                    <p class="explan-text"><{$data.data.carinfo.2.c2}></p>
                                </div>
                            </div>
                                                    </div>
                    </div>
                    <img class="border border-bot" src="/statics/ffsm/taluo/fuhe/img/border_bot.png">
                </div><div class="content-box flex-column">
                    <img class="border border-top" src="/statics/ffsm/taluo/fuhe/img/border_top.png">
                    <div class="content-panel">
                        <div class="content flex-column">
                            <img class="desc-subtitle"
                                 src="/statics/ffsm/taluo/fuhe/img/subtitle_04.png">
                            <div class="tarot-box flex-column">
                                <img class="card-image" src="<{$data.data.carinfo.3.img}>">
                                <div class="card-intro flex-center">
                                    <img src="/statics/ffsm/taluo/fuhe/img/num_04.png">
                                    <span><{$data.data.carinfo.3.title}><em style="font-size: 14px;">(<{if $data.data.carinfo.3.zf==0}>逆位<{else}>正位<{/if}>)</em></span>
                                </div>
                                <div class="explan-box flex-column">
                                    <p class="explan-title">象征意义:</p>
                                    <p class="explan-text"><{$data.data.carinfo.3.des}></p>
                                    <p class="explan-title">牌面理解:</p>
                                    <p class="explan-text"><{$data.data.carinfo.3.c1}></p>
                                    <p class="explan-title">
                                                                                                                                                                塔罗指引:                                    </p>
                                    <p class="explan-text"><{$data.data.carinfo.3.c2}></p>
                                </div>
                            </div>
                            <img class="end-image"
                                     src="/statics/ffsm/taluo/fuhe/img/end_image.png">                        </div>
                    </div>
                    <img class="border border-bot" src="/statics/ffsm/taluo/fuhe/img/border_bot.png">
                </div>

            

        </div>

        <{include file="./index/taluo/footer.tpl"}>

        

    </section>

    <div id="loadingbox" class="loadingbox flex-center">
        <div class="loading flex-column">
            <img src="/statics/ffsm/taluo/fuhe/img/loading.png" class="loading">
            <p class="loading">正在解析中...</p>
        </div>
    </div>
    <div class="toastbox" style="white-space: nowrap; width: auto; height: auto; padding: 0 0.4rem"></div>
</section>

<script type="text/javascript" src="/statics/ffsm/taluo/aiqing/jquery.min.js"></script>
<script type="text/javascript" src="/statics/ffsm/taluo/aiqing/jquery.raty.min.js"></script>
<script type="text/javascript" src="/statics/ffsm/taluo/fuhe/zwSdk-v=19041313.js"></script>
<script type="text/javascript">
    //--初始化评论区--//
    var scores = 5;
    $(function () {
        if(zwDivine.result){
            zwDivine.result();
        }

        document.onreadystatechange = function () {
            if(document.readyState=="complete") {
                $('.loadingbox').hide();
            }
        };

	})
</script>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="/"class="botpost"><em><i class="lijics_1"></i></em><p>继续测算</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>个人中心</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#341159; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
.ainuo_foot_nav li{width: 20%; text-align: center; float: left;}
.ainuo_foot_nav li a{width: 100%; display: block;text-decoration: none;}
.ainuo_foot_nav .foothover i{color: #f13030;}
.ainuo_foot_nav li i{display: block; line-height: 25px; height: 25px; margin: auto; padding: 0; width: 25px; overflow: hidden; background-size: 100%;}
.ainuo_foot_nav li a.botpost{position: relative; margin-top: -11px; background-color: rgba(0,0,0,0.0);text-decoration: none;}
.ainuo_foot_nav li a.botpost em{background: #ffffff; padding: 2px; border: 1px solid #ff5e5e; display: block; border-radius: 50%; width: 30px; height: 30px; margin: 0 auto; margin-bottom: 6px;padding-bottom: 0px;}
.ainuo_foot_nav li p{overflow: hidden; font-size: 12px; height: 16px; line-height: 16px; color: #fff; font-weight: 400;}
.shouye_1{background: url(/statics/ffsm/public/images/shouye.png) no-repeat;}
.wddd_1{background: url(/statics/ffsm/public/images/dingdan.png) no-repeat;}
.lijijs_1{background: url(/statics/ffsm/public/images/jiesuo.png) no-repeat;}
.lijics_1{background: url(/statics/ffsm/public/images/suan.png) no-repeat;}
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<script src="/statics/ffsm/taluoyunshi/jquery.min.js"></script>
<script src="/statics/ffsm/taluoyunshi/jquery.raty.min.js"></script>
<{include file='./ffsm/footer.tpl'}>
<{include file='./ffsm/dl_ck.tpl'}>
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
    	}
    })()
</script>
</body>
</html>