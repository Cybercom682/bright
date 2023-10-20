<?php
/* Smarty version 4.3.4, created on 2023-10-21 00:09:34
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532fa9e0e4fa8_79597643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5dae027ddc55ce859b4c7b38bb991edc3a6102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\header.tpl',
      1 => 1697834841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532fa9e0e4fa8_79597643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8128447226532fa9e0e3bf6_06724188', "bright-admin-header-content");
}
/* {block "bright-admin-header-content"} */
class Block_8128447226532fa9e0e3bf6_06724188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header-content' => 
  array (
    0 => 'Block_8128447226532fa9e0e3bf6_06724188',
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
            <div class="col-7 border-bottom d-flex">
                <nav class="navbar w-100">
                    <div class="container-fluid">
                        <form class="d-flex w-100" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-3 border-bottom d-flex">
                <ul class="nav justify-content-end w-100 my-auto">
                    <li class="nav-item px-2">
                        <div class="dropdown">
                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-message"></i>
                                Notify
                            </a>

                            <ul class="dropdown-menu p-3">
                                <li><div class="alert alert-info">Nothing..</div> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn-outline-primary" onclick="window.open('../')" aria-current="page" href="#">
                            <i class="fa-solid fa-pager"></i>
                            Frontend
                        </a>
                    </li>
                    <li class="nav-item ps-2 pe-3">
                        <a class="btn btn-outline-primary" aria-current="page" href="#">
                            <i class="fa-regular fa-user"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
<?php
}
}
/* {/block "bright-admin-header-content"} */
}
