<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:52:46
  from "/var/www/html/frendz/application/view/problem/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fe0b606b017_61583744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf0b5553d26a324f1e03de056c3a19a1abf59fe' => 
    array (
      0 => '/var/www/html/frendz/application/view/problem/index.tpl',
      1 => 1495261363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_591fe0b606b017_61583744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2065670064591fe0b6068e41_43141838', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10163110591fe0b606a701_86224058', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2065670064591fe0b6068e41_43141838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Application error<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_10163110591fe0b606a701_86224058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <p>This is the Error-page. Will be shown when a page (= controller / method) does not exist.</p>
<?php
}
}
/* {/block 'body'} */
}
