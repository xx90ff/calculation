<?php /* Smarty version 2.6.25, created on 2021-04-05 22:57:25
         compiled from ffsm/userlog.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title>提示信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no">
<SCRIPT language=javascript src="/statics/user/js/jquery-1.9.1.min.js"></SCRIPT>
<SCRIPT language=javascript src="/statics/user/js/layer.js"></SCRIPT>
<script language="javascript" src="/statics/user/js/comm.js"></script>
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
<div class="jump_c">
          <p class="cg zize_15"><?php echo $this->_tpl_vars['relog']; ?>
</p>
            <div class="p15"><a href="<?php if ($this->_tpl_vars['return_urls']): ?><?php echo $this->_tpl_vars['return_urls']; ?>
<?php else: ?>/?ac=<?php echo $this->_tpl_vars['relogurl']; ?>
<?php endif; ?>" class="imui_btn b_c cf" tab="" his="no">点击此链接进行跳转</a></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/user_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
</body>
</html>