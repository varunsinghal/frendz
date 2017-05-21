<?php
/* Smarty version 3.1.30, created on 2017-05-21 21:25:12
  from "/var/www/html/frendz/application/view/group/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921b8602c03f7_37978397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f4873a58c3dcaa48f0f7b2c2287578f7f40a80f' => 
    array (
      0 => '/var/www/html/frendz/application/view/group/index.tpl',
      1 => 1495261161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_5921b8602c03f7_37978397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7314416715921b8602b7e32_58168928', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11380839765921b8602bf679_24809582', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_7314416715921b8602b7e32_58168928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Groups<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11380839765921b8602bf679_24809582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Groups joined/Admin

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
echo $_smarty_tpl->tpl_vars['group']->value->group_id;?>

<?php echo $_smarty_tpl->tpl_vars['group']->value->group_name;?>

<?php echo $_smarty_tpl->tpl_vars['group']->value->group_description;?>

<br/>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php
}
}
/* {/block 'body'} */
}
