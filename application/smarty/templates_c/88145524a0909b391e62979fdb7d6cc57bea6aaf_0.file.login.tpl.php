<?php
/* Smarty version 3.1.30, created on 2017-05-21 18:31:38
  from "/var/www/html/frendz/application/view/user/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59218fb2dde4e9_68105291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88145524a0909b391e62979fdb7d6cc57bea6aaf' => 
    array (
      0 => '/var/www/html/frendz/application/view/user/login.tpl',
      1 => 1495283555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_59218fb2dde4e9_68105291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161553007959218fb2dd6b01_42708980', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126561125459218fb2dddcc9_47657904', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_161553007959218fb2dd6b01_42708980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_126561125459218fb2dddcc9_47657904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<b>Login</b>
<form action="<?php echo URL;?>
user/login" method="POST">
	<table>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? null : $tmp);?>
" required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" value="" required /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login_user" value="Submit" /></td>
		</tr>
	</table>
</form>


<?php
}
}
/* {/block 'body'} */
}
