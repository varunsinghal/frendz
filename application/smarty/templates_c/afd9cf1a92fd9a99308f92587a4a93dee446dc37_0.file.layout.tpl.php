<?php
/* Smarty version 3.1.30, created on 2017-05-21 22:32:38
  from "/var/www/html/frendz/application/view/_templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921c82ea67ad0_57063059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd9cf1a92fd9a99308f92587a4a93dee446dc37' => 
    array (
      0 => '/var/www/html/frendz/application/view/_templates/layout.tpl',
      1 => 1495386156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5921c82ea67ad0_57063059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18454694525921c82ea50929_52192149', 'title');
?>
 | Frendz</title>
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

  
    <link href="<?php echo URL;?>
css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>
css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>
css/style.css" rel="stylesheet">
    
    <?php echo '<script'; ?>
 src="<?php echo URL;?>
js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URL;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13714131865921c82ea54ec8_97668564', 'head');
?>


</head>
<body>
<div id="container" style="margin: 0px auto; width: 760px;">

        <div id="header" style="background-image: url("<?php echo URL;?>
img/header.jpg");">&nbsp;</div>

        <div id="menu">
            <?php if ((($tmp = @$_SESSION['user_id'])===null||$tmp==='' ? FALSE : $tmp)) {?>
            <a title="home" href="<?php echo URL;?>
">home</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="my groups" href="<?php echo URL;?>
group">my groups</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="my connections" href="<?php echo URL;?>
connection">my connections</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="messages" href="<?php echo URL;?>
message">messages</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="logout" href="<?php echo URL;?>
home/logout">logout</a>
            <?php } else { ?>
            <a title="home" href="<?php echo URL;?>
">home</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="about us" href="<?php echo URL;?>
site/about">about us</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="register" href="<?php echo URL;?>
user/register">register</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="login" href="<?php echo URL;?>
user/login">login</a>
            <?php }?>
        </div>

        <div id="box">
            <div id="content">
                <div class="overflow">
                    <div id="textpadding">
                        <h2>frendz - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['module_name']->value)===null||$tmp==='' ? 'home' : $tmp);?>
</h2>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? FALSE : $tmp)) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13437960845921c82ea65bf4_94273050', 'body');
?>

                    </div>

                </div>
            </div>
        </div>

        <div id="footer">created by varun singhal and gaurav sharma. copyrights &copy; 2012.</div>

    </div>

</body>


<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<?php echo '<script'; ?>
>
    var url = "<?php echo URL;?>
";
<?php echo '</script'; ?>
>

<!-- our JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo URL;?>
js/application.js"><?php echo '</script'; ?>
>

</html>
<?php }
/* {block 'title'} */
class Block_18454694525921c82ea50929_52192149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_13714131865921c82ea54ec8_97668564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_13437960845921c82ea65bf4_94273050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
