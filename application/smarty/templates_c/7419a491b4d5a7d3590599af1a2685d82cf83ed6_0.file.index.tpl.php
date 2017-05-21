<?php
/* Smarty version 3.1.30, created on 2017-05-21 23:22:52
  from "/var/www/html/frendz/application/view/message/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d3f4cbc445_59560996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7419a491b4d5a7d3590599af1a2685d82cf83ed6' => 
    array (
      0 => '/var/www/html/frendz/application/view/message/index.tpl',
      1 => 1495389164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921d3f4cbc445_59560996 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_getgravatar')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/function.getgravatar.php';
if (!is_callable('smarty_modifier_relativedate')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/modifier.relativedate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14341480435921d3f4cab5f6_13362062', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12657453225921d3f4cbbb14_32355533', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_14341480435921d3f4cab5f6_13362062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Message<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12657453225921d3f4cbbb14_32355533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo URL;?>
message/create"><i class="fa fa-pencil-square" aria-hidden="true"></i> New Message</a>
<br/><br/>
<table class="messagetable">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
	<tr>
		<td>
		<a href="<?php echo URL;?>
message/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->other_user;?>
"><?php echo smarty_function_getgravatar(array('email'=>$_smarty_tpl->tpl_vars['thread']->value->user_email),$_smarty_tpl);?>
</a>

		</td>
		<td>
			<a href="<?php echo URL;?>
message/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->other_user;?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value->user_first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['thread']->value->user_last_name;?>
</a><br/>
			<?php if ($_smarty_tpl->tpl_vars['thread']->value->from_user_id == $_SESSION['user_id']) {?>
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			<?php } else { ?>
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
			<?php }
echo $_smarty_tpl->tpl_vars['thread']->value->message_content;?>

			<br/>
			<?php echo smarty_modifier_relativedate($_smarty_tpl->tpl_vars['thread']->value->created_on);?>

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
