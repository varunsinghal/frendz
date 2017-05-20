<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:57:04
  from "/var/www/html/frendz/application/view/user/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fe1b8d9bc55_84749564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88145524a0909b391e62979fdb7d6cc57bea6aaf' => 
    array (
      0 => '/var/www/html/frendz/application/view/user/login.tpl',
      1 => 1495261610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_591fe1b8d9bc55_84749564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1313062719591fe1b8d997d9_11016829', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1158716084591fe1b8d9b5e9_09776379', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1313062719591fe1b8d997d9_11016829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1158716084591fe1b8d9b5e9_09776379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="box">
    <h3>Login</h3>
    <form action="<?php echo URL;?>
user/login" method="POST">
        <label>E-mail</label>
        <input type="text" name="email" value="" required />
        <label>Password</label>
        <input type="password" name="pass" value="" required />
        <input type="submit" name="login_user" value="Submit" />
    </form>
</div>

<?php
}
}
/* {/block 'body'} */
}
