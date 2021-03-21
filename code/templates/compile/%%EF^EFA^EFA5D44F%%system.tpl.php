<?php /* Smarty version 2.6.25, created on 2021-03-19 14:06:22
         compiled from admin/system.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language='javascript'>
   return true;
</script>
  <style>
input.s {
    width: 350px;
}
</style>
<div style="width:96%;margin:auto;padding:auto">
<form name="myform" jstype="vali" action="?ct=system&ac=<?php echo $this->_tpl_vars['ac_url']; ?>
" method="POST"  enctype="multipart/form-data">
<input type="hidden" name="even" value="saveedit" />
<table width="100%" class="form">
<?php $_from = $this->_tpl_vars['sys_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
  <?php if ($this->_tpl_vars['v']['name'] == 'pay_type'): ?>
<tr>
  <td width="200">显示支付方式：</td>
  <td>
  <select name="sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][0]" id="equestion" >
                <option value="0"  <?php if ($this->_tpl_vars['v']['config'] == 0): ?>selected<?php endif; ?> >全部显示</option>
                <option value="1" <?php if ($this->_tpl_vars['v']['config'] == 1): ?>selected<?php endif; ?> >显示微信支付</option>
                <option value="2" <?php if ($this->_tpl_vars['v']['config'] == 2): ?>selected<?php endif; ?> >显示支付宝支付</option>
                <option value="3" <?php if ($this->_tpl_vars['v']['config'] == 3): ?>selected<?php endif; ?> >显示微信和支付宝</option>
                <option value="4" <?php if ($this->_tpl_vars['v']['config'] == 4): ?>selected<?php endif; ?> >只显示3方支付</option>
    			<option value="5" <?php if ($this->_tpl_vars['v']['config'] == 5): ?>selected<?php endif; ?> >只显示paypal支付</option>
              </select>
    <input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][1]' class="text s"  value='<?php echo $this->_tpl_vars['v']['title']; ?>
' />
  </td>
</tr>
 <?php endif; ?>
<?php if ($this->_tpl_vars['v']['name'] == 'mobanqh'): ?>

<tr>
  <td width="200">首页模板切换：</td>
  <td>
  <select name="sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][0]" id="equestion" >
                <option value="1" <?php if ($this->_tpl_vars['v']['config'] == 1): ?>selected<?php endif; ?> >默认风格</option>
            <!--    <option value="2" <?php if ($this->_tpl_vars['v']['config'] == 2): ?>selected<?php endif; ?> >风格二</option>
                <option value="3" <?php if ($this->_tpl_vars['v']['config'] == 3): ?>selected<?php endif; ?> >风格三</option> -->
              </select>
    <input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][1]' class="text s"  value='<?php echo $this->_tpl_vars['v']['title']; ?>
' />
    <input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][2]' class="text s"  value='<?php echo $this->_tpl_vars['v']['class']; ?>
' />
  </td>
</tr>
 <?php endif; ?>
  <?php if ($this->_tpl_vars['v']['name'] == 'tjex_on'): ?>
<tr>
  <td width="200">推广积分是否开启：</td>
  <td>
  <select name="sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][0]" id="equestion" >
                <option value="0"  <?php if ($this->_tpl_vars['v']['config'] == 0): ?>selected<?php endif; ?> >关闭</option>
                <option value="1" <?php if ($this->_tpl_vars['v']['config'] == 1): ?>selected<?php endif; ?> >开启</option>
              </select>
    <input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][1]' class="text s"  value='<?php echo $this->_tpl_vars['v']['title']; ?>
' />
	<input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][2]' class="text s"  value='<?php echo $this->_tpl_vars['v']['class']; ?>
' /></td>
  </td>
</tr>
 <?php endif; ?>
  <?php if ($this->_tpl_vars['v']['name'] == 'vip_on'): ?>
<tr>
  <td width="200">VIP是否开启：</td>
  <td>
  <select name="sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][0]" id="equestion" >
                <option value="0"  <?php if ($this->_tpl_vars['v']['config'] == 0): ?>selected<?php endif; ?> >关闭</option>
                <option value="1" <?php if ($this->_tpl_vars['v']['config'] == 1): ?>selected<?php endif; ?> >开启</option>
              </select>
    <input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][1]' class="text s"  value='<?php echo $this->_tpl_vars['v']['title']; ?>
' />
	<input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][2]' class="text s"  value='<?php echo $this->_tpl_vars['v']['class']; ?>
' /></td>
  </td>
</tr>
 <?php endif; ?>
 
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['sys_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
<?php if ($this->_tpl_vars['v']['name'] != 'pay_type' && $this->_tpl_vars['v']['name'] != 'tjex_on' && $this->_tpl_vars['v']['name'] != 'vip_on' && $this->_tpl_vars['v']['name'] != 'mobanqh'): ?>
<tr>
  <td width="10%"><?php echo $this->_tpl_vars['v']['title']; ?>
：</td>
  <td width="12%"><input type='input' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][0]' class="text s"  value='<?php echo $this->_tpl_vars['v']['config']; ?>
' /><input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][1]' class="text s"  value='<?php echo $this->_tpl_vars['v']['title']; ?>
' /><input type='hidden' name='sys[<?php echo $this->_tpl_vars['v']['name']; ?>
][2]' class="text s"  value='<?php echo $this->_tpl_vars['v']['class']; ?>
' /></td>
  <td width="78%">&nbsp;&nbsp;<?php echo $this->_tpl_vars['v']['zhushi']; ?>
</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<tr>
  <td colspan='2' align='left' height='30' >
  <input type='hidden' name='dosubmit' value='true'/>
      <button type="submit" >保存设置</button>
  </td>
</tr>
</table>
</form>
</div>

</body>
</html>