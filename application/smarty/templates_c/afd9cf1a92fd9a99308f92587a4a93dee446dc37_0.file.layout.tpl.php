<?php
/* Smarty version 3.1.30, created on 2017-05-20 11:24:39
  from "/var/www/html/frendz/application/view/_templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591fda1f888952_24519884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd9cf1a92fd9a99308f92587a4a93dee446dc37' => 
    array (
      0 => '/var/www/html/frendz/application/view/_templates/layout.tpl',
      1 => 1495259650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591fda1f888952_24519884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1838618940591fda1f881c96_17906503', 'title');
?>
 | Frendz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL;?>
css/style.css" rel="stylesheet">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1911535070591fda1f884ab8_26721781', 'head');
?>


</head>
<body>
    <!-- logo -->
    <div class="logo">
        FRENDZ
    </div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL;?>
">home</a>
        <a href="<?php echo URL;?>
home/exampleone">subpage</a>
        <a href="<?php echo URL;?>
home/exampletwo">subpage 2</a>
        <a href="<?php echo URL;?>
songs">songs</a>
    </div>

    <div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396531379591fda1f887348_33428776', 'body');
?>

    </div>

<!-- backlink to repo on GitHub, and affiliate link to Rackspace if you want to support the project -->
    <div class="footer">
        Find <a href="https://github.com/panique/mini">MINI on GitHub</a>.
        If you like the project, support it by <a href="http://tracking.rackspace.com/SH1ES">using Rackspace</a> as your hoster [affiliate link].
    </div>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>

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
</body>
</html>
<?php }
/* {block 'title'} */
class Block_1838618940591fda1f881c96_17906503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_1911535070591fda1f884ab8_26721781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_396531379591fda1f887348_33428776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
