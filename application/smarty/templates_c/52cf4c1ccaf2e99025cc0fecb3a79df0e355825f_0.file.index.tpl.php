<?php
/* Smarty version 3.1.30, created on 2017-05-21 23:01:24
  from "/var/www/html/frendz/application/view/connection/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921ceecb67731_04978750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52cf4c1ccaf2e99025cc0fecb3a79df0e355825f' => 
    array (
      0 => '/var/www/html/frendz/application/view/connection/index.tpl',
      1 => 1495387875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921ceecb67731_04978750 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_getgravatar')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/function.getgravatar.php';
if (!is_callable('smarty_modifier_relativedate')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/modifier.relativedate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5258611345921ceecb58f52_54722958', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18267114365921ceecb66ac0_20022808', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_5258611345921ceecb58f52_54722958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connections<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18267114365921ceecb66ac0_20022808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo URL;?>
connection"><i class="fa fa-users" aria-hidden="true"></i> My connections</a>
&nbsp;&nbsp; &nbsp;&nbsp; 
<a href="<?php echo URL;?>
connection/add"><i class="fa fa-user-plus" aria-hidden="true"></i> Add connection</a>
&nbsp;&nbsp; &nbsp;&nbsp; 
<a href="<?php echo URL;?>
connection/pending"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Received requests</a>
&nbsp;&nbsp; &nbsp;&nbsp;
<a href="<?php echo URL;?>
connection/requested"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sent requests</a>
 

<br/><br/>
<table class="connectiontable">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
	<tr>
		<td>
		<a href="<?php echo URL;?>
connection/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->other_user;?>
"><?php echo smarty_function_getgravatar(array('email'=>$_smarty_tpl->tpl_vars['thread']->value->user_email),$_smarty_tpl);?>
</a>

		</td>
		<td>
			<a href="<?php echo URL;?>
connection/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->other_user;?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value->user_first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['thread']->value->user_last_name;?>
</a><br/>
			connected since <?php echo smarty_modifier_relativedate($_smarty_tpl->tpl_vars['thread']->value->updated_on);?>

		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<?php
}
}
/* {/block 'body'} */
}
