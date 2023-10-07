<?php
/* Smarty version 4.3.4, created on 2023-10-07 18:46:15
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\snippets\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65218b575a6239_78159986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8a4199d20d7f7d837f9de71ef84ed8e5394c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\snippets\\sidebar.tpl',
      1 => 1696697172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65218b575a6239_78159986 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['list']->value)) && !empty($_smarty_tpl->tpl_vars['list']->value)) {?>
    <div class="list-group" id="list-tab" role="tablist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <a class="list-group-item list-group-item-action my-1 py-1 rounded" id="list-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-list" data-bs-toggle="list" href="#list-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab" aria-controls="list-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
}
