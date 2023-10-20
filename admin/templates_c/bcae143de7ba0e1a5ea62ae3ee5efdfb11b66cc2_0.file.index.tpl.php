<?php
/* Smarty version 4.3.4, created on 2023-10-20 21:49:15
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532d9bb93d495_17695689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcae143de7ba0e1a5ea62ae3ee5efdfb11b66cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\index.tpl',
      1 => 1697302151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:../snippets/sidebar.tpl' => 2,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6532d9bb93d495_17695689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16125451536532d9bb91a808_43204272', "bright-admin-head");
?>

    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6353302686532d9bb92ddf8_05959945', "bright-admin-header");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3896049976532d9bb9372a1_68429344', "bright-admin-main-content");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14564501346532d9bb93b5f4_69256649', "bright-admin-footer");
?>

    </body>
</html><?php }
/* {block "bright-admin-head"} */
class Block_16125451536532d9bb91a808_43204272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-head' => 
  array (
    0 => 'Block_16125451536532d9bb91a808_43204272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['templatePath']->value;?>
/assets/media/icon.ico">
            <title>Admin - Bright v1.0.0.1a</title>
            <meta charset="utf-8">
            <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"><?php echo '</script'; ?>
>    
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
            <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/lint/lint.css">
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/lint/lint.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/lint/javascript-lint.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/lint/json-lint.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/lint/css-lint.js"><?php echo '</script'; ?>
>
            <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/lib/codemirror.css">
            <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/hint/show-hint.css">
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/edit/matchbrackets.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/hint/show-hint.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/codemirror/addon/hint/css-hint.js"><?php echo '</script'; ?>
>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatePath']->value;?>
/assets/css/bright.css">
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['includesPath']->value;?>
libs/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
            <link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['vendorPath']->value;?>
studio-42/elfinder/css/elfinder.min.css">
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['vendorPath']->value;?>
studio-42/elfinder/js/elfinder.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="../<?php echo $_smarty_tpl->tpl_vars['vendorPath']->value;?>
studio-42/elfinder/main.default.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templatePath']->value;?>
/assets/js/bright.js"><?php echo '</script'; ?>
>
        </head>
    <?php
}
}
/* {/block "bright-admin-head"} */
/* {block "bright-admin-header"} */
class Block_6353302686532d9bb92ddf8_05959945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header' => 
  array (
    0 => 'Block_6353302686532d9bb92ddf8_05959945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "bright-admin-header"} */
/* {block "bright-admin-main-content"} */
class Block_3896049976532d9bb9372a1_68429344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-main-content' => 
  array (
    0 => 'Block_3896049976532d9bb9372a1_68429344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="container-fluid overflow-auto">
                <div class="row">
                    <div class="col-2 border-end bg-dark text-white sb-h">
                        <?php $_smarty_tpl->_subTemplateRender("file:../snippets/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['sidebar']->value,'pos'=>'tab'), 0, false);
?>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="nav-tabContent">
                            <?php $_smarty_tpl->_subTemplateRender("file:../snippets/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['sidebar']->value,'pos'=>'content'), 0, true);
?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block "bright-admin-main-content"} */
/* {block "bright-admin-footer"} */
class Block_14564501346532d9bb93b5f4_69256649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-footer' => 
  array (
    0 => 'Block_14564501346532d9bb93b5f4_69256649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "bright-admin-footer"} */
}
