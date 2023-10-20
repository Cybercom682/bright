<?php
/* Smarty version 4.3.4, created on 2023-10-20 21:55:40
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\config\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532db3c911477_85407359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e95c05d93dd1b4f4be2b46b6865cd573b893a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\config\\form.tpl',
      1 => 1697831735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532db3c911477_85407359 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['head']->value)) && $_smarty_tpl->tpl_vars['head']->value === true) {?>
    <form id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="<?php echo (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? 'POST' ?? null : $tmp);?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['foot']->value)) && $_smarty_tpl->tpl_vars['foot']->value === true) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['button']->value)) && $_smarty_tpl->tpl_vars['button']->value === true) {?>
        <button type="submit" id="save-btn-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-<?php echo (($tmp = $_smarty_tpl->tpl_vars['btnBg']->value ?? null)===null||$tmp==='' ? 'primary' ?? null : $tmp);?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['btnText']->value ?? null)===null||$tmp==='' ? 'Submit' ?? null : $tmp);?>
</button>
    <?php }?>
</form>
<?php }
}
}
