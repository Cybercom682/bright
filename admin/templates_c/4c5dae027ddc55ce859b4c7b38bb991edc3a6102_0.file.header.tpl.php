<?php
/* Smarty version 4.3.4, created on 2023-10-07 20:14:15
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65219ff7c52151_88011516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5dae027ddc55ce859b4c7b38bb991edc3a6102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\header.tpl',
      1 => 1696702452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65219ff7c52151_88011516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17498829865219ff7c478b5_95140485', "bright-admin-header-content");
}
/* {block "bright-admin-header-content"} */
class Block_17498829865219ff7c478b5_95140485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header-content' => 
  array (
    0 => 'Block_17498829865219ff7c478b5_95140485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="container-fluid">
        <div class="row">
            <div id="logo" class="col-2 border-end d-flex justify-content-center bg-dark">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templatePath']->value;?>
/assets/media/logo.png" height="100" width="150" style="filter: invert();">
                <span class="my-auto text-white"><strong>Administration</strong></span>
            </div>
            <div class="col-8 border-bottom d-flex justify-content-center">
                            </div>
            <div class="col-2 border-bottom d-flex">
                            </div>
        </div>
    </header>
<?php
}
}
/* {/block "bright-admin-header-content"} */
}
