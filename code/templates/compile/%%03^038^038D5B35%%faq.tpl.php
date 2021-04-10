<?php /* Smarty version 2.6.25, created on 2021-03-19 14:16:17
         compiled from ffsm/faq.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>常见问题解答-<?php echo $this->_tpl_vars['zhanming']; ?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/ssxo/css/wap.css" rel="stylesheet" type="text/css"/>
<link href="/statics/VIP/vip.css" rel="stylesheet" type="text/css"/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/wx_share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="/statics/ffsm/ssxo/js/jquery.min.js"></script>
</head>
<body>
<div class="aui-loan-body">
<h1>常见问题解答</h1>
<p><?php echo $this->_tpl_vars['faq_subject']; ?>
</p>
</div>
<div class="faq-menu">
	<ul>
		<li><a href="javascript:history.back(-1)"><img src="/statics/ffsm/ssxo/img/faq_back.png" alt="" class="bg2"><p>返回上页</p></a></li>

		<li><a href="/?ac=member"><img src="/statics/ffsm/ssxo/img/faq_member.png" alt="" class="bg3"><p>个人中心</p></a></li>
		<li><a href="javascript:void(0)" onclick="MobileChatWindow.openChatWindow()"><img src="/statics/ffsm/ssxo/img/lx_icon.png" alt="" class="bg5"><p>联系客服</p></a></li>

	</ul>
</div>
<style type="text/css">
  #minxtmsgtitlecontainer,#agentListdiv{display: none !important;}
</style>
<script type="text/javascript" src="https://3.molinsoft.com/jsCode?publishId=297eb8b371f0bce10171f4ea058d77fb"></script>
<div class="wenxintishi">
<?php $_from = $this->_tpl_vars['faq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>			  
<h5><?php echo $this->_tpl_vars['k']+1; ?>
.<?php echo $this->_tpl_vars['v']['question']; ?>
</h5>
<p><?php echo $this->_tpl_vars['v']['answer']; ?>
</p>
<p></p><br>
<?php endforeach; endif; unset($_from); ?>
</div>

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
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/ss_share.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>