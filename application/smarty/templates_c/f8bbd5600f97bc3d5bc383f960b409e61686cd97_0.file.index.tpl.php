<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:52:55
  from "/var/www/html/frendz/application/view/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fe0bfb49a40_44377113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8bbd5600f97bc3d5bc383f960b409e61686cd97' => 
    array (
      0 => '/var/www/html/frendz/application/view/home/index.tpl',
      1 => 1495260872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_591fe0bfb49a40_44377113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964242595591fe0bfb47df2_86531255', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106603186591fe0bfb493f6_17850242', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1964242595591fe0bfb47df2_86531255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1106603186591fe0bfb493f6_17850242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>You are in the View: application/view/home/index.php (everything in the box comes from this file)</h2>
<p>In a real application this could be the homepage.</p>

<?php
}
}
/* {/block 'body'} */
}
