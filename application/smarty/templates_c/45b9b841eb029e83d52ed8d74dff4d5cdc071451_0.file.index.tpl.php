<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:54:37
  from "/var/www/html/frendz/application/view/site/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fe125f00666_92298636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b9b841eb029e83d52ed8d74dff4d5cdc071451' => 
    array (
      0 => '/var/www/html/frendz/application/view/site/index.tpl',
      1 => 1495261455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_591fe125f00666_92298636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689228059591fe125efe729_31971617', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1647933044591fe125effd05_83683678', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_689228059591fe125efe729_31971617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Site<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1647933044591fe125effd05_83683678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

hello index
<?php
}
}
/* {/block 'body'} */
}
