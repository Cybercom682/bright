<?php
/* Smarty version 4.3.4, created on 2023-10-09 21:53:06
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65245a22627ce4_79664100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcae143de7ba0e1a5ea62ae3ee5efdfb11b66cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\index.tpl',
      1 => 1696881183,
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
function content_65245a22627ce4_79664100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75744300765245a225d9d34_27364114', "bright-admin-head");
?>

    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3618342465245a2260adf9_64968585', "bright-admin-header");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88964666765245a22623ee2_02608057', "bright-admin-main-content");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47913480565245a22626b01_39148900', "bright-admin-footer");
?>

    </body>
</html><?php }
/* {block "bright-admin-head"} */
class Block_75744300765245a225d9d34_27364114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-head' => 
  array (
    0 => 'Block_75744300765245a225d9d34_27364114',
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
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatePath']->value;?>
/assets/css/bright.css">
        </head>
    <?php
}
}
/* {/block "bright-admin-head"} */
/* {block "bright-admin-header"} */
class Block_3618342465245a2260adf9_64968585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header' => 
  array (
    0 => 'Block_3618342465245a2260adf9_64968585',
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
class Block_88964666765245a22623ee2_02608057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-main-content' => 
  array (
    0 => 'Block_88964666765245a22623ee2_02608057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mh-90 border-end bg-dark text-white">
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
class Block_47913480565245a22626b01_39148900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-footer' => 
  array (
    0 => 'Block_47913480565245a22626b01_39148900',
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
