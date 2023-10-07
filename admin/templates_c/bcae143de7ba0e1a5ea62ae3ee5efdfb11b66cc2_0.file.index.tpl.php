<?php
/* Smarty version 4.3.4, created on 2023-10-07 20:05:02
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65219dceb73061_92917629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcae143de7ba0e1a5ea62ae3ee5efdfb11b66cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\index.tpl',
      1 => 1696701899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:../snippets/sidebar.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_65219dceb73061_92917629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140332849265219dceb332f3_90767231', "bright-admin-head");
?>

    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58423175665219dceb3e926_75864082', "bright-admin-header");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183845432465219dceb49b87_82803490', "bright-admin-main-content");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80497081165219dceb70ce3_27999335', "bright-admin-footer");
?>

    </body>
</html><?php }
/* {block "bright-admin-head"} */
class Block_140332849265219dceb332f3_90767231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-head' => 
  array (
    0 => 'Block_140332849265219dceb332f3_90767231',
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
class Block_58423175665219dceb3e926_75864082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header' => 
  array (
    0 => 'Block_58423175665219dceb3e926_75864082',
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
class Block_183845432465219dceb49b87_82803490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-main-content' => 
  array (
    0 => 'Block_183845432465219dceb49b87_82803490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mh-90 border-end bg-dark text-white">
                        <?php $_smarty_tpl->_assignInScope('list', array('Dashboard'=>'dashboard.tpl','Template'=>'template.tpl'));?>
                        <?php $_smarty_tpl->_subTemplateRender("file:../snippets/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['list']->value), 0, false);
?>
                    </div>
                    <div class="col-10">
                        <?php if ((isset($_smarty_tpl->tpl_vars['list']->value)) && !empty($_smarty_tpl->tpl_vars['list']->value)) {?>
                            <div class="tab-content" id="nav-tabContent">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <div class="tab-pane fade show" id="list-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tabpanel" aria-labelledby="list-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-list">
                                        <div class="mt-5">
                                            <?php $_smarty_tpl->_subTemplateRender(("../areas/").($_smarty_tpl->tpl_vars['item']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>                    
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block "bright-admin-main-content"} */
/* {block "bright-admin-footer"} */
class Block_80497081165219dceb70ce3_27999335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-footer' => 
  array (
    0 => 'Block_80497081165219dceb70ce3_27999335',
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
