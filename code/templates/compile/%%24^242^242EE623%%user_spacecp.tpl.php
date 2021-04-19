<?php /* Smarty version 2.6.25, created on 2021-04-06 18:33:35
         compiled from ffsm/user_spacecp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ffsm/user_spacecp.tpl', 71, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
<title>会员中心-资料设置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<SCRIPT language=javascript src="/statics/user/js/jquery-1.9.1.min.js"></SCRIPT>
<SCRIPT language=javascript src="/statics/user/js/layer.js"></SCRIPT>

<link rel="stylesheet"href="/statics/user/css/frozen.min.css">
<link rel="stylesheet"href="/statics/user/css/style.min.css">
<style type="text/css">
#footer{height:56px;}#footer i{font-size:1.6rem}#footer li.active,#footer li:active,#footer li:hover{font-size:.7rem}
.ui-tiled li{font-size:.7rem}
</style> 
<style>
.open_vip{
background-color: lightcyan;;
}
.ui-border li i em{
font-size: 0.75rem;
}
.aboutpic li{
margin-top: 0.6rem
}
.aboutpic li i img{
width: 2.5rem;
height: 2.5rem;
}
</style>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/user_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<header id="header" class="ui-header ui-header-positive ui-border-b" >
<h1></h1>
</header>

<div class="aui-super-box">
  <div class="aui-flex">
    <div class="aui-flex-user">
      <img src="<?php if ($this->_tpl_vars['member']['headimgurl']): ?><?php echo $this->_tpl_vars['member']['headimgurl']; ?>
<?php else: ?>/statics/user/images/userlogo.png<?php endif; ?>" alt=""></div>
    <div class="aui-flex-box">
      <h2>
        <?php echo $this->_tpl_vars['member']['nickname']; ?>

          <em>【<?php if ($this->_tpl_vars['member']['class'] == 1): ?>注册用户<?php elseif ($this->_tpl_vars['member']['class'] == 2): ?>微信用户<?php else: ?>QQ用户<?php endif; ?>】</em>
      </h2>
      <div class="dianh">
        <?php if ($this->_tpl_vars['member']['phone']): ?>电话:
          <?php echo $this->_tpl_vars['member']['phone']; ?>

            <a href="?ac=user_spacecp">
              <span>修改资料</span></a>
            <?php else: ?>您还未设置个人资料
              <a href="?ac=user_spacecp">
                <span>设置资料</span></a>
              <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="jifenjinbi">
    <em>佣金：
      <?php echo $this->_tpl_vars['member']['dl_syjf']; ?>
元</em>┃
    <em>积分：
      <?php echo $this->_tpl_vars['member']['integral']; ?>
个</em></div>
  <div class="aui-super-nav">
    <div class="aui-flex">
      <div class="aui-flex-box">
        <h3>
          <i class="icon icon-vip"></i>
            <?php if ($this->_tpl_vars['member']['vip_type'] == 38 || $this->_tpl_vars['member']['vip_type'] == 39 || $this->_tpl_vars['member']['vip_type'] == 40): ?>
			<?php if ($this->_tpl_vars['member']['vip_time'] < $this->_tpl_vars['times']): ?>已过期<?php else: ?>到期时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['vip_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
<?php endif; ?>
                    <?php else: ?>免费测试所有项目
                      <?php endif; ?></h3>
      </div>
      <?php if ($this->_tpl_vars['member']['vip_type'] == 38 || $this->_tpl_vars['member']['vip_type'] == 39 || $this->_tpl_vars['member']['vip_type'] == 40): ?>
        <?php else: ?>
          <div class="aui-more-eay">
            <button>
              <a href="?ac=vip">开启VIP</a></button>
          </div>
          <?php endif; ?>
    </div>
  </div>
</div>

<section class="jilu" style="margin-top: 2.2%;"> 
<div class="daili-tixian-body">
<form class="think-form" id="TxForm" class="TxForm" action="/?ac=user_spacecp" method="post" >
<div class="group-box am-margin-0 am-padding-0">
<div class="am-margin-top-0 am-padding-bottom-sm menu-list">
<ul>
<?php if ($this->_tpl_vars['member']['class'] != 2 && $this->_tpl_vars['member']['class'] != 3): ?>
<li class="am-padding-left am-padding-right">
<div class=" am-fr menu-list-r"><?php echo $this->_tpl_vars['member']['user_name']; ?>
</div> <div class="am-fl menu-list-l">账号</div>
</li>
<?php endif; ?>
<li class="am-padding-left am-padding-right">
<div class="color-red am-fr menu-list-r"><?php echo $this->_tpl_vars['member']['dl_syjf']; ?>
元</div> <div class="am-fl menu-list-l">佣金</div>
</li>
<li class="am-padding-left am-padding-right"><div class="am-fr menu-list-r">
<input type="text" name="phone" id="phone" class="inputstyle" placeholder="请输入您的手机号码" value="<?php echo $this->_tpl_vars['member']['phone']; ?>
"></div>
<div class="am-fl menu-list-l">电话</div>
</li>

<li class="am-padding-left am-padding-right"><div class="am-fr menu-list-r">
<input type="text" name="qq" id="qq" class="inputstyle" placeholder="QQ" value="<?php echo $this->_tpl_vars['member']['qq']; ?>
"></div>
<div class="am-fl menu-list-l">QQ</div>
</li>

</ul>
<div class="am-padding-left am-padding-right am-margin-top-sm">
<input type="submit" name="zlbc" id="submit" class="am-btn am-radius btn-full btn-default" value="保存"></div>
</div>
</div>

</form>
</div>
</section>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/user_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
 