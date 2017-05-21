<?php
/* Smarty version 3.1.30, created on 2017-05-21 23:07:11
  from "/var/www/html/frendz/application/view/connection/pending.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d04762fcf5_13285100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eca049ef22b0632c1bb60e251ca200b17825961' => 
    array (
      0 => '/var/www/html/frendz/application/view/connection/pending.tpl',
      1 => 1495388182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921d04762fcf5_13285100 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_getgravatar')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/function.getgravatar.php';
if (!is_callable('smarty_modifier_relativedate')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/modifier.relativedate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478392355921d0476173f8_63500768', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2830330875921d04762ef42_49435386', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1478392355921d0476173f8_63500768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connections<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2830330875921d04762ef42_49435386 extends Smarty_Internal_Block
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
connection/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->user_id;?>
"><?php echo smarty_function_getgravatar(array('email'=>$_smarty_tpl->tpl_vars['thread']->value->user_email),$_smarty_tpl);?>
</a>

		</td>
		<td>
			<a href="<?php echo URL;?>
connection/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value->user_first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['thread']->value->user_last_name;?>
</a><br/>

			<a href="<?php echo URL;?>
connection/accept/<?php echo $_smarty_tpl->tpl_vars['thread']->value->user_id;?>
"><i class="fa fa-check" aria-hidden="true"></i>  Accept</a> &nbsp;&nbsp; &nbsp;&nbsp; <a href="<?php echo URL;?>
connection/decline/<?php echo $_smarty_tpl->tpl_vars['thread']->value->user_id;?>
"><i class="fa fa-times" aria-hidden="true"></i> Decline</a>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['thread']->value->note)===null||$tmp==='' ? FALSE : $tmp)) {?>
			<br/><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['thread']->value->note;?>

			<?php }?>
			<br/>request received <?php echo smarty_modifier_relativedate($_smarty_tpl->tpl_vars['thread']->value->created_on);?>


			
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
