<?php /* Smarty version 2.6.25, created on 2021-04-05 22:10:19
         compiled from ffsm/taluo/anlian_order.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0"/>
    <title>你暗恋的人喜欢你吗？塔罗占卜-<?php echo $this->_tpl_vars['zhanming']; ?>
</title>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/wx_share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <script src="/statics/ffsm/taluo/aiqing/rem_tool.js"></script>
    <link rel="stylesheet" href="/statics/ffsm/taluo/anlian/common-v=1.0.css">
    <link rel="stylesheet" href="/statics/ffsm/taluo/anlian/preview.css"> 
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">塔罗占卜</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的订单</a></header>
<section class="page">
    <section class="main-wrap flex-column">
        <div class="banner-wrap flex-center">
            <img class="banner" src="/statics/ffsm/taluo/anlian/img/banner.png">
        </div>

        <div class="content-wrap flex-column">
            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <div class="top-wrap flex-column">
                            <div class="guide-wrap flex-column J_testFixedShow">
                                <div class="guide flex-column">
                                    <p class="guide-text first-line" id="first_line">亲爱的<em>测试者</em>：</p>
                                    <p class="guide-text" id="second_line">
                                        你抽到的每张塔罗牌，都有着神圣且独特的意义！接下来，我将透过你所选择的<em>4张牌</em>，揭示你和暗恋的人最终能否牵手...
                                    </p>
                                </div>
                            </div>
                            <div class="card-group flex-column">
                                <img class="card-wall" src="/statics/ffsm/taluo/anlian/img/card_wall.png">
                                <div class="tarot-card tarot-card-1 flex-column">
                                        <img src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['0']['img']; ?>
">
                                        <p class="card-name"><?php echo $this->_tpl_vars['data']['data']['carinfo']['0']['title']; ?>
</p>
                                        <span>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['0']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</span>
                                    </div><div class="tarot-card tarot-card-2 flex-column">
                                        <img src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['1']['img']; ?>
">
                                        <p class="card-name"><?php echo $this->_tpl_vars['data']['data']['carinfo']['1']['title']; ?>
</p>
                                        <span>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['1']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</span>
                                    </div><div class="tarot-card tarot-card-3 flex-column">
                                        <img src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['2']['img']; ?>
">
                                        <p class="card-name"><?php echo $this->_tpl_vars['data']['data']['carinfo']['2']['title']; ?>
</p>
                                        <span>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['2']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</span>
                                    </div><div class="tarot-card tarot-card-4 flex-column">
                                        <img src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['3']['img']; ?>
">
                                        <p class="card-name"><?php echo $this->_tpl_vars['data']['data']['carinfo']['3']['title']; ?>
</p>
                                        <span>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['3']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</span>
                                    </div>                           </div>
                            <div class="price-wrap flex-column">
                                <p class="project-name flex-center">咨询项目: 你暗恋的人喜欢你吗？</p>
                                <div class="price-content flex-row" style="border-top: none">
                                    <div class="price-box flex-column">
                                        <span class="false-price flex-row"><label>原价：</label><em>￥88.80</em></span>
                                        <span class="true-price flex-row"><label>限时优惠</label><em>￥<?php echo $this->_tpl_vars['data']['money']; ?>
</em></span>
                                    </div>
                                    <div class="time-box flex-column">
                                        <span class="time-title">距优惠结束</span>
                                        <span class="time-discount">00: 20: 00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="user-count flex-row">
                                <span>已有<em>226976</em>人测算</span>
                                <span>好评率: <em>99.8%</em></span>
                            </div>
                            <img class="start-btn-top J_payPopupShow" src="/statics/ffsm/taluo/anlian/img/pay_btn.png">
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                <img class="title" src="/statics/ffsm/taluo/anlian/img/guide_title.png">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <img class="desc-subtitle" src="/statics/ffsm/taluo/anlian/img/nav_01.png">
                        <div class="tarot-box flex-column">
                            <img class="card-image" src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['0']['img']; ?>
">
                            <div class="card-intro flex-center">
                                <img src="/statics/ffsm/taluo/anlian/img/num_01.png">
                                <span><?php echo $this->_tpl_vars['data']['data']['carinfo']['0']['title']; ?>
&nbsp;<em>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['0']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</em></span>
                            </div>
                            <div class="explain-box flex-column">
                                <p class="explain-title">对方想法:</p>
                                <p class="explain-text">对方的想法是一张教皇牌，它象征着遵从、期待和信心十足。同时这张正位的教皇牌也代表着容易活在他人的期望之中，容易在感情中存在幻想。结合你所抽到的这张牌来看，目前对方…</p>
                            </div>
                            <div class="card-desc flex-center">
                                <img class="blur-img" src="/statics/ffsm/taluo/anlian/img/blurry_01.png">
                                <div class="parse-box flex-column">
                                    <img class="start-btn-mid J_payPopupShow" data-no="1" src="/statics/ffsm/taluo/anlian/img/unlock.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <img  class="desc-subtitle" src="/statics/ffsm/taluo/anlian/img/nav_02.png">
                        <div class="tarot-box flex-column">
                            <img class="card-image" src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['1']['img']; ?>
">
                            <div class="card-intro flex-center">
                                <img src="/statics/ffsm/taluo/anlian/img/num_02.png">
                                <span><?php echo $this->_tpl_vars['data']['data']['carinfo']['1']['title']; ?>
&nbsp;<em>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['1']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</em></span>
                            </div>
                            <div class="explain-box flex-column">
                                <p class="explain-title">当前阻碍:</p>
                            </div>
                            <div class="card-desc flex-center">
                                <img class="blur-img" src="/statics/ffsm/taluo/anlian/img/blurry_02.png">
                                <div class="parse-box flex-column">
                                    <ul class="parse-list flex-column">
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>对方心里有没有别人？</span></li>
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>什么阻碍了你们的发展？</span></li>
                                    </ul>
                                    <img class="start-btn-mid J_payPopupShow" data-no="2" src="/statics/ffsm/taluo/anlian/img/unlock.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <img  class="desc-subtitle" src="/statics/ffsm/taluo/anlian/img/nav_03.png">
                        <div class="tarot-box flex-column">
                            <img class="card-image" src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['2']['img']; ?>
">
                            <div class="card-intro flex-center">
                                <img src="/statics/ffsm/taluo/anlian/img/num_03.png">
                                <span><?php echo $this->_tpl_vars['data']['data']['carinfo']['2']['title']; ?>
&nbsp;<em>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['2']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</em></span>
                            </div>
                            <div class="explain-box flex-column">
                                <p class="explain-title">暗恋结果:</p>
                            </div>
                            <div class="card-desc flex-center">
                                <img class="blur-img" src="/statics/ffsm/taluo/anlian/img/blurry_03.png">
                                <div class="parse-box flex-column">
                                    <ul class="parse-list flex-column">
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>你们在一起的几率有多大？</span></li>
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>会成为恋人还是朋友？</span></li>
                                    </ul>
                                    <img class="start-btn-mid J_payPopupShow" data-no="3"src="/statics/ffsm/taluo/anlian/img/unlock.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column">
                        <img class="desc-subtitle" src="/statics/ffsm/taluo/anlian/img/nav_04.png">
                        <div class="tarot-box flex-column">
                            <img class="card-image" src="<?php echo $this->_tpl_vars['data']['data']['carinfo']['3']['img']; ?>
">
                            <div class="card-intro flex-center">
                                <img src="/statics/ffsm/taluo/anlian/img/num_04.png">
                                <span><?php echo $this->_tpl_vars['data']['data']['carinfo']['3']['title']; ?>
&nbsp;<em>(<?php if ($this->_tpl_vars['data']['data']['carinfo']['3']['zf'] == 0): ?>逆位<?php else: ?>正位<?php endif; ?>)</em></span>
                            </div>
                            <div class="explain-box flex-column">
                                <p class="explain-title">塔罗指引:</p>
                            </div>
                            <div class="card-desc flex-center">
                                <img class="blur-img" src="/statics/ffsm/taluo/anlian/img/blurry_04.png">
                                <div class="parse-box flex-column">
                                    <ul class="parse-list flex-column">
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>你是否该表达自己的心意？</span></li>
                                        <li class="item flex-row"><img src="/statics/ffsm/taluo/anlian/img/point.png"><span>怎样做才能拉近彼此的距离？</span></li>
                                    </ul>
                                    <img class="start-btn-mid J_payPopupShow" data-no="4" src="/statics/ffsm/taluo/anlian/img/unlock.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

            <div class="content-box flex-column">
                <img class="border border-top" src="/statics/ffsm/taluo/anlian/img/border_top.png">
                <div class="content-panel">
                    <div class="content flex-column comment-box">
                        <p class="comment-title flex-center">已为超过<em>12万</em>人提供情感指引</p>
                        <div class="detail-data flex-row">
                            <span class="person-count flex-row">已测算人数:<em>123343</em></span>
                            <span class="rate-num flex-row"><img src="/statics/ffsm/taluo/anlian/img/emoji.png">好评率:<em>99.8%</em></span>
                        </div>
                        <div class="labels flex-row">
                            <span id="label_0">非常有用(<em>24234</em>)</span>
                            <span id="label_1">符合现状(<em>4532</em>)</span>
                            <span id="label_2">超级准(<em>3842</em>)</span>
                            <span id="label_3">很专业(<em>2408</em>)</span>
                            <span id="label_4">真实(<em>64543</em>)</span>
                        </div>
                        <div class="upto-wrap">
                            <ul class="comment-list info-list-box">
                                <li>
                                        <p class="user">鲁*女士</p>
                                        <p class="detail">以前一直觉得暗恋很累，现在终于明白原因了。解脱自己~</p>
                                    </li><li>
                                        <p class="user">吴*先生</p>
                                        <p class="detail">还可以，比之前测过其他家的好很多，问题和解决方法都很直白！比较推荐！
</p>
                                    </li><li>
                                        <p class="user">马*女士</p>
                                        <p class="detail">准到不行哦！！！以后遇到问题还会来寻求帮助的，谢谢。
</p>
                                    </li><li>
                                        <p class="user">刘*先生</p>
                                        <p class="detail">不管怎么样，解开了我心里的疑惑，以后更有方向啦。
</p>
                                    </li><li>
                                        <p class="user">樊*女士</p>
                                        <p class="detail">确实双方感情正在升温，真的好准。
</p>
                                    </li><li>
                                        <p class="user">李*女士</p>
                                        <p class="detail">内容很丰富，解析很全面，非常明确！！！
</p>
                                    </li><li>
                                        <p class="user">简*先生</p>
                                        <p class="detail">内容上比较有针对性,也很容易懂,个人觉得还是蛮准的,有可行性建议,很值！
</p>
                                    </li><li>
                                        <p class="user">谢*女士</p>
                                        <p class="detail">暗恋总是患得患失，占卜结果说我还不能操之过急，因为勉强为之反而会适得其反，果然我调整了一下心态，很多事都变得顺利了。
</p>
                                    </li><li>
                                        <p class="user">冯*女士</p>
                                        <p class="detail">还行，比之前的好多占卜详细很多，也得到了一些有用的建议！
</p>
                                    </li><li>
                                        <p class="user">王*女士</p>
                                        <p class="detail">准确，知道自己该不该表白了哈哈哈。
</p>
                                    </li><li>
                                        <p class="user">张*女士</p>
                                        <p class="detail">解牌马上就看出了问题的关键，说的很到位，感觉对未来不再是那么迷茫了！
</p>
                                    </li><li>
                                        <p class="user">曹*先生</p>
                                        <p class="detail">跟简介很匹配，想看的都看到了，希望能像说的那样，与自己的意中人甜甜美美！
</p>
                                    </li><li>
                                        <p class="user">许*先生</p>
                                        <p class="detail">终于不用担心猜不透女生的心，不敢行动了
</p>
                                    </li><li>
                                        <p class="user">孙*先生</p>
                                        <p class="detail">我是朋友介绍过来的，没想到这么不错，说的很准！强烈推荐！！！
</p>
                                    </li><li>
                                        <p class="user">沈*女士</p>
                                        <p class="detail">非常有用，按照指引成功接近男神开心！
</p>
                                    </li><li>
                                        <p class="user">赵*先生</p>
                                        <p class="detail">准确，是很好的感情指导工具。
</p>
                                    </li><li>
                                        <p class="user">李*先生</p>
                                        <p class="detail">好评，很专业！细节很到位啊，想找老师帮忙再测点别的。
</p>
                                    </li><li>
                                        <p class="user">陈*先生</p>
                                        <p class="detail">赞赞赞！我喜欢这种不模棱两可的，比较直接。
</p>
                                    </li><li>
                                        <p class="user">魏*女士</p>
                                        <p class="detail">特别特别有用，能说到问题的关键。
</p>
                                    </li><li>
                                        <p class="user">钱*女士</p>
                                        <p class="detail">准！比较详细
</p>
                                    </li><li>
                                        <p class="user">鲁*女士</p>
                                        <p class="detail">以前一直觉得暗恋很累，现在终于明白原因了。解脱自己~</p>
                                    </li><li>
                                        <p class="user">吴*先生</p>
                                        <p class="detail">还可以，比之前测过其他家的好很多，问题和解决方法都很直白！比较推荐！
</p>
                                    </li><li>
                                        <p class="user">马*女士</p>
                                        <p class="detail">准到不行哦！！！以后遇到问题还会来寻求帮助的，谢谢。
</p>
                                    </li><li>
                                        <p class="user">刘*先生</p>
                                        <p class="detail">不管怎么样，解开了我心里的疑惑，以后更有方向啦。
</p>
                                    </li><li>
                                        <p class="user">樊*女士</p>
                                        <p class="detail">确实双方感情正在升温，真的好准。
</p>
                                    </li><li>
                                        <p class="user">李*女士</p>
                                        <p class="detail">内容很丰富，解析很全面，非常明确！！！
</p>
                                    </li><li>
                                        <p class="user">简*先生</p>
                                        <p class="detail">内容上比较有针对性,也很容易懂,个人觉得还是蛮准的,有可行性建议,很值！
</p>
                                    </li><li>
                                        <p class="user">谢*女士</p>
                                        <p class="detail">暗恋总是患得患失，占卜结果说我还不能操之过急，因为勉强为之反而会适得其反，果然我调整了一下心态，很多事都变得顺利了。
</p>
                                    </li><li>
                                        <p class="user">冯*女士</p>
                                        <p class="detail">还行，比之前的好多占卜详细很多，也得到了一些有用的建议！
</p>
                                    </li><li>
                                        <p class="user">王*女士</p>
                                        <p class="detail">准确，知道自己该不该表白了哈哈哈。
</p>
                                    </li><li>
                                        <p class="user">张*女士</p>
                                        <p class="detail">解牌马上就看出了问题的关键，说的很到位，感觉对未来不再是那么迷茫了！
</p>
                                    </li><li>
                                        <p class="user">曹*先生</p>
                                        <p class="detail">跟简介很匹配，想看的都看到了，希望能像说的那样，与自己的意中人甜甜美美！
</p>
                                    </li><li>
                                        <p class="user">许*先生</p>
                                        <p class="detail">终于不用担心猜不透女生的心，不敢行动了
</p>
                                    </li><li>
                                        <p class="user">孙*先生</p>
                                        <p class="detail">我是朋友介绍过来的，没想到这么不错，说的很准！强烈推荐！！！
</p>
                                    </li><li>
                                        <p class="user">沈*女士</p>
                                        <p class="detail">非常有用，按照指引成功接近男神开心！
</p>
                                    </li><li>
                                        <p class="user">赵*先生</p>
                                        <p class="detail">准确，是很好的感情指导工具。
</p>
                                    </li><li>
                                        <p class="user">李*先生</p>
                                        <p class="detail">好评，很专业！细节很到位啊，想找老师帮忙再测点别的。
</p>
                                    </li><li>
                                        <p class="user">陈*先生</p>
                                        <p class="detail">赞赞赞！我喜欢这种不模棱两可的，比较直接。
</p>
                                    </li><li>
                                        <p class="user">魏*女士</p>
                                        <p class="detail">特别特别有用，能说到问题的关键。
</p>
                                    </li><li>
                                        <p class="user">钱*女士</p>
                                        <p class="detail">准！比较详细
</p>
                                    </li><li>
                                        <p class="user">鲁*女士</p>
                                        <p class="detail">以前一直觉得暗恋很累，现在终于明白原因了。解脱自己~</p>
                                    </li><li>
                                        <p class="user">吴*先生</p>
                                        <p class="detail">还可以，比之前测过其他家的好很多，问题和解决方法都很直白！比较推荐！
</p>
                                    </li><li>
                                        <p class="user">马*女士</p>
                                        <p class="detail">准到不行哦！！！以后遇到问题还会来寻求帮助的，谢谢。
</p>
                                    </li><li>
                                        <p class="user">刘*先生</p>
                                        <p class="detail">不管怎么样，解开了我心里的疑惑，以后更有方向啦。
</p>
                                    </li><li>
                                        <p class="user">樊*女士</p>
                                        <p class="detail">确实双方感情正在升温，真的好准。
</p>
                                    </li><li>
                                        <p class="user">李*女士</p>
                                        <p class="detail">内容很丰富，解析很全面，非常明确！！！
</p>
                                    </li><li>
                                        <p class="user">简*先生</p>
                                        <p class="detail">内容上比较有针对性,也很容易懂,个人觉得还是蛮准的,有可行性建议,很值！
</p>
                                    </li><li>
                                        <p class="user">谢*女士</p>
                                        <p class="detail">暗恋总是患得患失，占卜结果说我还不能操之过急，因为勉强为之反而会适得其反，果然我调整了一下心态，很多事都变得顺利了。
</p>
                                    </li><li>
                                        <p class="user">冯*女士</p>
                                        <p class="detail">还行，比之前的好多占卜详细很多，也得到了一些有用的建议！
</p>
                                    </li><li>
                                        <p class="user">王*女士</p>
                                        <p class="detail">准确，知道自己该不该表白了哈哈哈。
</p>
                                    </li><li>
                                        <p class="user">张*女士</p>
                                        <p class="detail">解牌马上就看出了问题的关键，说的很到位，感觉对未来不再是那么迷茫了！
</p>
                                    </li><li>
                                        <p class="user">曹*先生</p>
                                        <p class="detail">跟简介很匹配，想看的都看到了，希望能像说的那样，与自己的意中人甜甜美美！
</p>
                                    </li><li>
                                        <p class="user">许*先生</p>
                                        <p class="detail">终于不用担心猜不透女生的心，不敢行动了
</p>
                                    </li><li>
                                        <p class="user">孙*先生</p>
                                        <p class="detail">我是朋友介绍过来的，没想到这么不错，说的很准！强烈推荐！！！
</p>
                                    </li><li>
                                        <p class="user">沈*女士</p>
                                        <p class="detail">非常有用，按照指引成功接近男神开心！
</p>
                                    </li><li>
                                        <p class="user">赵*先生</p>
                                        <p class="detail">准确，是很好的感情指导工具。
</p>
                                    </li><li>
                                        <p class="user">李*先生</p>
                                        <p class="detail">好评，很专业！细节很到位啊，想找老师帮忙再测点别的。
</p>
                                    </li><li>
                                        <p class="user">陈*先生</p>
                                        <p class="detail">赞赞赞！我喜欢这种不模棱两可的，比较直接。
</p>
                                    </li><li>
                                        <p class="user">魏*女士</p>
                                        <p class="detail">特别特别有用，能说到问题的关键。
</p>
                                    </li><li>
                                        <p class="user">钱*女士</p>
                                        <p class="detail">准！比较详细
</p>
                                    </li>                            </ul>
                        </div>
                    </div>
                </div>
                <img class="border border-bot" src="/statics/ffsm/taluo/anlian/img/border_bot.png">
            </div>

        </div>

        <div class="float-wrap flex-center" style="display:none;">
            <div class="float-btn flex-center">
                <img class="start-btn start-btn-bot" style="margin: 0rem" src="/statics/ffsm/taluo/anlian/img/pay_btn_bot.png">
            </div>
        </div>

    </section>
</section>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="javascript:;" id="publicPayBottom" class="botpost J_payPopupShow"><em><i class="lijijs_1"></i></em><p>付费解锁</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>个人中心</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#2e4c6e; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
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
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<script type="text/javascript" src="/statics/ffsm/taluo/jixu/jquery.min.js"></script>
<script type="text/javascript" src="/statics/ffsm/taluo/jixu/scroll.js"></script>
<div class="public_pay_popup" id="publicPayPopup">
	<div class="public_pp_box">
		<div class="public_pp_close" id="publicPPClose">
			X
		</div>
		<div class="public_pp_tit">
			解锁查看所有测算结果
		</div>
		<div class="public_pp_price">
			<span>统一鉴定价：</span><strong>￥<?php echo $this->_tpl_vars['data']['money']; ?>
元</strong>
		</div>
		<div class="public_pay_box">
			<?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 1 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
&type=1">微信安全支付</a>
          <?php endif; ?>
             <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 2 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
&type=2">支付宝安全支付</a>
          <?php endif; ?>
            <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 4): ?>
          <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
&type=wxpay">微信支付</a>
          <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
&type=alipay">支付宝支付</a>
              <?php endif; ?>
            <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 5): ?>
          <a class="paypal" target="_self" href="/?ct=pay&ac=paypal_go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
">paypal支付</a>
            <?php endif; ?>
			<?php if ($this->_tpl_vars['jf_sys_on'] == 1): ?>
				<a class="m-extpay" target="_self" href="/?ac=extgo&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
">积分支付</a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['vip_on'] == 1): ?>
				<a class="m-vippay" target="_self" href="/?ac=vip_pay&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
">vip免支付</a>
			<?php endif; ?>
		</div>
	</div>
</div>
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
    //底部悬浮
    ;(function($){
        $.fn.publicPopup=function(opt){
            var pp=$('#publicPayPopup');
            var ppClose=$('#publicPPClose');
            var topShow=$(".J_payBottomShow").length>0?$(".J_payBottomShow").offset().top:200;
            var ppShow=$(".J_payPopupShow").length>0?$(".J_payPopupShow"):'';
            return this.each(function(){
                var $this=$(this);
                $(window).scroll(function(){
                    var wt=$(window).scrollTop();
                    wt>topShow?$this.fadeIn():$this.fadeOut();
                });
                $this.on('click',function(){
                    pp.show();
                });
                ppClose.on('click',function(){
                    pp.hide();
                })
                ppShow?ppShow.on('click',function(){pp.show()}):'';
            });
        };
    })(jQuery);
    $("#publicPayBottom").publicPopup();
    //弹出支付功能
    ;(function($){
        $.fn.publicPopup=function(opt){
            var pp=$('#publicPayPopup');
            var ppClose=$('#publicPPClose');
            return this.each(function(){
                var $this=$(this);
                $(window).scroll(function(){
                    var wt=$(window).scrollTop();
                    
                });
                $this.on('click',function(){
                    pp.show();
                });
                ppClose.on('click',function(){
                    pp.hide();
                })
               
            });
        };
    })(jQuery);
    $("#publicPayBottom").publicPopup();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var remain = parseInt("7200");
        remain = 1200;
        initTimer(remain--);
        var animate = setInterval(function () {
            initTimer(remain--);
        }, 1000);

        function initTimer(seconds) {
            if (seconds > 0) {
                var h = Math.floor(seconds / 3600);
                var m = Math.floor((seconds % 3600) / 60);
                var s = Math.ceil((seconds % 3600) % 60);
                h = h < 10 ? ('0' + h) : h;
                m = m < 10 ? ('0' + m) : m;
                s = s < 10 ? ('0' + s) : s;
                $('.time-discount').text(h + ': ' + m + ': ' + s);
            } else {
                window.clearInterval(animate);
                window.location.href = "/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['data']['oid']; ?>
&type=1";
            }
        }
    });
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