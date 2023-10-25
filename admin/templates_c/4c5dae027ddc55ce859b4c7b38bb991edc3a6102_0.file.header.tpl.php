<?php
/* Smarty version 4.3.4, created on 2023-10-25 12:43:22
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6538f14a7b23b7_70611560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5dae027ddc55ce859b4c7b38bb991edc3a6102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\layout\\header.tpl',
      1 => 1698217435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../areas/config/notify.tpl' => 1,
  ),
),false)) {
function content_6538f14a7b23b7_70611560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9678167346538f14a7b1356_76238505', "bright-admin-header-content");
}
/* {block "bright-admin-header-content"} */
class Block_9678167346538f14a7b1356_76238505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bright-admin-header-content' => 
  array (
    0 => 'Block_9678167346538f14a7b1356_76238505',
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
                        <form class="d-flex w-50" role="search">
                            <input class="form-control me-2 py-0 rounded-0" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-sm btn-outline-dark rounded-0 border-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-3 border-bottom d-flex">
                <ul class="nav justify-content-end w-100 my-auto">
                    <li class="nav-item px-2">
                        <div id="notifys" class="dropdown">
                            <a class="btn btn-sm btn-outline-dark border-0 rounded-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-message"></i>
                                Notify
                            </a>
                            <ul class="dropdown-menu rounded-0 p-0" style="width: 300px;">
                                <li>
                                    <?php $_smarty_tpl->_subTemplateRender("file:../areas/config/notify.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn-sm btn-outline-dark border-0 rounded-0" onclick="window.open('../')" aria-current="page" href="#">
                            <i class="fa-solid fa-pager"></i>
                            Frontend
                        </a>
                    </li>
                    <li class="nav-item ps-2 pe-3">
                        <a class="btn btn-sm btn-outline-dark border-0 rounded-0" aria-current="page" href="#">
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
