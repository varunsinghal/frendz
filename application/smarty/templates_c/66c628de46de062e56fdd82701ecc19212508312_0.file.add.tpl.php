<?php
/* Smarty version 3.1.30, created on 2017-05-21 21:41:33
  from "/var/www/html/frendz/application/view/connection/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921bc355658d8_54845196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c628de46de062e56fdd82701ecc19212508312' => 
    array (
      0 => '/var/www/html/frendz/application/view/connection/add.tpl',
      1 => 1495383090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921bc355658d8_54845196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18926398625921bc3555a2c4_32926642', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13234864515921bc35561229_95599853', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16779593335921bc35564b62_63286845', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_18926398625921bc3555a2c4_32926642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connections<?php
}
}
/* {/block 'title'} */
/* {block "head"} */
class Block_13234864515921bc35561229_95599853 extends Smarty_Internal_Block
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
class Block_16779593335921bc35564b62_63286845 extends Smarty_Internal_Block
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
<form method="post" action="<?php echo URL;?>
connection/add">
	<table>
		<tr>
			<td>Name</td>
			<td><input id="to" name="to" value="" placeholder="Name of the user..." required> <span id="view_profile"><i class="fa fa-user-o" aria-hidden="true"></i></span></td>
		</tr>
		<tr>
			<td>
				Note
			</td>
			<td><textarea name="message_content" style="margin: 0px;height: 60px;width: 190px;" placeholder="Introduce yourself..."></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" id="to_user_id" name="to_user_id" value="">
				<input type="submit" name="send_request" value="Add">
			</td>
		</tr>
	</table>

</form>

<?php
}
}
/* {/block 'body'} */
}
