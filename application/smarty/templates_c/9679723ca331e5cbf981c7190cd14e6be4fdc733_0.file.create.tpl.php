<?php
/* Smarty version 3.1.30, created on 2017-05-21 23:22:54
  from "/var/www/html/frendz/application/view/message/create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921d3f6a242b8_44169504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9679723ca331e5cbf981c7190cd14e6be4fdc733' => 
    array (
      0 => '/var/www/html/frendz/application/view/message/create.tpl',
      1 => 1495389151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921d3f6a242b8_44169504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11711448485921d3f6a1bdb7_72760544', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4021761295921d3f6a20681_94680633', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18252890945921d3f6a238a9_41482525', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_11711448485921d3f6a1bdb7_72760544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Create message<?php
}
}
/* {/block 'title'} */
/* {block "head"} */
class Block_4021761295921d3f6a20681_94680633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php echo '<script'; ?>
>
	$( function() {
		var availableTags = <?php echo $_smarty_tpl->tpl_vars['available_users']->value;?>
;
		$( "#to" ).autocomplete({
			source: availableTags,
			select: function( event, ui ) {
				$("#to").val( ui.item.label );
				$("#to_user_id").val( ui.item.value );
				$("#view_profile").html('<a href="<?php echo URL;?>
connection/id/' +  ui.item.value +'"><i class="fa fa-user" aria-hidden="true"></i></a>');
				return false;
			},
			change: function (event, ui) {
                if(!ui.item){
                    $("#to").val("");
                    $("#to_user_id").val("");
                    $("#view_profile").html('<i class="fa fa-user-o" aria-hidden="true"></i>');
                }
            }

		});
	} );
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "head"} */
/* {block 'body'} */
class Block_18252890945921d3f6a238a9_41482525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo URL;?>
message/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to messages</a>
<br/><br/>
<form method="post" action="<?php echo URL;?>
message/create">
	<table>
		<tr>
			<td>To</td>
			<td><input id="to" name="to" value="" placeholder="Name of the user..." required> <span id="view_profile"><i class="fa fa-user-o" aria-hidden="true"></i></span></td>
		</tr>
		<tr>
			<td>
				Message
			</td>
			<td><textarea name="message_content" style="margin: 0px;height: 60px;width: 190px;"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" id="to_user_id" name="to_user_id" value="">
				<input type="submit" name="send_message" value="Send">
			</td>
		</tr>
	</table>

</form>
<?php
}
}
/* {/block 'body'} */
}
