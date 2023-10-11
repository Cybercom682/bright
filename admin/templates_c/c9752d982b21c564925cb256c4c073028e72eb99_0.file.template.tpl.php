<?php
/* Smarty version 4.3.4, created on 2023-10-11 20:34:30
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6526eab6145bb3_81365457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9752d982b21c564925cb256c4c073028e72eb99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\template.tpl',
      1 => 1696932842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../areas/config/form.tpl' => 2,
  ),
),false)) {
function content_6526eab6145bb3_81365457 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid border rounded p-3">
    <?php $_smarty_tpl->_assignInScope('formID', "tpl_saveForm");?>
    <?php $_smarty_tpl->_subTemplateRender("file:../areas/config/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['formID']->value,'head'=>true), 0, false);
?>
                <input type="hidden" name="tpl_name" value="Bright">
        <input type="hidden" name="tpl_version" value="1.0.0.1a">
                <div class="mb-3">
            <label for="inputPassword2" class="form-label">Header</label>
            <select class="form-select">
                <option selected>In Future.....</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../areas/config/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['formID']->value,'foot'=>true,'button'=>true), 0, true);
?>
</div><?php }
}
