<?php
/* Smarty version 3.1.30, created on 2017-05-21 23:22:57
  from "/var/www/html/frendz/application/view/message/id.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d3f976a554_61401727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3b509676898ca53584c7aa0362120722f2b182' => 
    array (
      0 => '/var/www/html/frendz/application/view/message/id.tpl',
      1 => 1495389146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921d3f976a554_61401727 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_getgravatar')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/function.getgravatar.php';
if (!is_callable('smarty_modifier_relativedate')) require_once '/var/www/html/frendz/application/smarty/libs/plugins/modifier.relativedate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5308534105921d3f97572b8_60893250', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10295222255921d3f97592b5_24663283', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19944930345921d3f9769a21_22756139', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_5308534105921d3f97572b8_60893250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Create message<?php
}
}
/* {/block 'title'} */
/* {block "head"} */
class Block_10295222255921d3f97592b5_24663283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<?php
}
}
/* {/block "head"} */
/* {block 'body'} */
class Block_19944930345921d3f9769a21_22756139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="sticky">
	<a href="<?php echo URL;?>
message/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to messages</a>
</div>
<br/>

<table class="messagetable">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
	<tr>
		<td>
			<a href="<?php echo URL;?>
connection/id/<?php echo $_smarty_tpl->tpl_vars['thread']->value->from_user_id;?>
"><?php echo smarty_function_getgravatar(array('email'=>$_smarty_tpl->tpl_vars['thread']->value->user_email,'size'=>'40'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<small><?php echo smarty_modifier_relativedate($_smarty_tpl->tpl_vars['thread']->value->created_on);?>
</small> <br/>
			<?php echo $_smarty_tpl->tpl_vars['thread']->value->user_first_name;?>
 : <?php echo $_smarty_tpl->tpl_vars['thread']->value->message_content;?>

		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
<form method="post" action="<?php echo URL;?>
/message/id/<?php echo $_smarty_tpl->tpl_vars['other_user_id']->value;?>
">
	<table class="middletable">
		<tr>
			<td><?php echo smarty_function_getgravatar(array('email'=>$_SESSION['user_email'],'size'=>'40'),$_smarty_tpl);?>
</td>
			<td><input type="text" name="message_content" placeholder="Type your message..."/></td>
			<td><input type="submit" name="send_message" value="Send" />  &nbsp; <a href="<?php echo URL;?>
/message/id/<?php echo $_smarty_tpl->tpl_vars['other_user_id']->value;?>
"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
		</tr>
	</table>
</form>
<?php
}
}
/* {/block 'body'} */
}
