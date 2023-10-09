<?php
/* Smarty version 4.3.4, created on 2023-10-09 22:28:51
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\snippets\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6524628313f8c9_38559237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8a4199d20d7f7d837f9de71ef84ed8e5394c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\snippets\\sidebar.tpl',
      1 => 1696883327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524628313f8c9_38559237 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['list']->value)) && !empty($_smarty_tpl->tpl_vars['list']->value)) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['pos']->value)) && !empty($_smarty_tpl->tpl_vars['pos']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['pos']->value === 'tab') {?>
            <div class="list-group" id="list-tab" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'items');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['items']->value->section))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value->section, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                                <span class="mt-2"><?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
</span>
                                <hr class="my-1">
                            <div class="p-2 mb-1" style="background: #444;">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->area, 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
?>
                                    <a class="list-group-item list-group-item-action my-1 p-1 bg-secondary text-white"
                                       id="list-<?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>
-list"
                                       data-bs-toggle="list"
                                       href="#list-<?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>
"
                                       role="tab"
                                       aria-controls="list-<?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>

                                    </a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pos']->value === 'content') {?>
            <div class="tab-content" id="nav-tabContent">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'items');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['items']->value->section))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value->section, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->area, 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
?>
                                <div class="tab-pane fade show" id="list-<?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>
" role="tabpanel" aria-labelledby="list-<?php echo $_smarty_tpl->tpl_vars['area']->value['title'];?>
-list">
                                    <div class="mt-5">
                                        <?php if ($_smarty_tpl->tpl_vars['area']->value['tpl'] == 'true') {?>
                                            <?php $_smarty_tpl->_subTemplateRender(("../areas/").($_smarty_tpl->tpl_vars['area']->value['file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['area']->value['tpl'] == 'false' && (isset($_smarty_tpl->tpl_vars['area']->value['file']))) {?>
                                                                                        <?php $_smarty_tpl->_subTemplateRender(("../docs/").($_smarty_tpl->tpl_vars['area']->value['file']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php } else { ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['area']->value['content']))) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['area']->value['content'];?>

                                            <?php }?>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php }
}
}
}
