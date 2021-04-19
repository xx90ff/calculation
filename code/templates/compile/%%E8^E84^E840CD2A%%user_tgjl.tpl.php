<?php /* Smarty version 2.6.25, created on 2021-04-05 22:55:32
         compiled from ffsm/user_tgjl.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ffsm/user_tgjl.tpl', 74, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
<title>会员中心-推广记录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<!--a-->
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
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
<?php else: ?>/statics/user/images/userlogo.png<?php endif; ?>" alt="" onclick='location.href="/?ac=member"'></div>
    <div class="aui-flex-box">
      <h2>
        <?php echo $this->_tpl_vars['member']['nickname']; ?>

          <em>【
            <?php if ($this->_tpl_vars['member']['class'] == 1): ?>注册用户
              <?php elseif ($this->_tpl_vars['member']['class'] == 2): ?>微信用户
                <?php else: ?>QQ用户
                  <?php endif; ?>】</em>
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
  
  <?php $_from = $this->_tpl_vars['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?> 
  <?php if ($this->_tpl_vars['i']['oid']): ?>
  <div class="public_ddxx">
      <div class="public_k">
           <span class="public_des">[<?php echo $this->_tpl_vars['i']['type']; ?>
] <?php echo $this->_tpl_vars['i']['data']['username']; ?>
</span><span class="public_pyzt"><?php if ($this->_tpl_vars['i']['status'] == 1): ?><font color="#ff5e5e" >已付款</font><?php else: ?>未付款<?php endif; ?></span>      </div>
        <div class="public_k">
      <span class="public_pyzt_ddxx">订单号：<?php echo $this->_tpl_vars['i']['oid']; ?>
</span>
    </div>
          <div class="public_k">
      <span class="public_pyzt_ddxx"><?php if ($this->_tpl_vars['i']['dl_status'] == 1): ?>已<?php else: ?>未<?php endif; ?>获得提成：<font color="#ff0000" ><?php echo $this->_tpl_vars['i']['dl_money']; ?>
元</font></span>
    </div>
      <div class="public_k">
      <span class="public_pyzt_ddxx">下单时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['createtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span>
    </div>
      <div class="public_k public_bddd">
      <a class="public_pyzt__look" href="<?php echo $this->_tpl_vars['i']['url']; ?>
">点击查看</a>
    </div>
  </div>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
    

<div class="page" align="center"> 
<a href="/?ac=member">首页</a> <a href="/?ac=user_tgjl&page=<?php echo $this->_tpl_vars['pagepre']; ?>
" >< 上一页</a> <a href="/?ac=user_tgjl&page=<?php echo $this->_tpl_vars['pagenext']; ?>
">下一页 ></a> <a href="/?ac=user_tgjl&page=<?php echo $this->_tpl_vars['endpage']; ?>
">末页</a></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/user_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="https://www.yiabs.com/yixue/api.php?mod=js&bid=84"></script>
</body>
</html>
 