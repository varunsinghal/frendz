<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:24:39
  from "/var/www/html/frendz/application/view/user/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fda1f86ee37_63705856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f78614569a1ffc799fdfce5c04423cd90a07b08' => 
    array (
      0 => '/var/www/html/frendz/application/view/user/register.tpl',
      1 => 1495259677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_templates/layout.tpl' => 1,
  ),
),false)) {
function content_591fda1f86ee37_63705856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149170639591fda1f869a39_68509962', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_905817819591fda1f86c9b7_55503885', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:_templates/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1149170639591fda1f869a39_68509962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_905817819591fda1f86c9b7_55503885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="box">
        <h3>Register</h3>
        <form action="<?php echo '<?php ';?>echo URL; <?php echo '?>';?>user/register" method="POST">
        <label>First Name</label>
        <input type="text" name="first_name" value="" required />
        <label>Last Name</label>
        <input type="text" name="last_name" value="" required />
            <label>E-mail</label>
            <input type="text" name="email" value="" required />
            <label>Password</label>
            <input type="password" name="pass" value="" required />

            <input type="checkbox" name="terms" value="Y" required>I agree to the Terms and conditions
            <input type="submit" name="register_user" value="Register" />
        </form>
    </div>
<?php
}
}
/* {/block 'body'} */
}
