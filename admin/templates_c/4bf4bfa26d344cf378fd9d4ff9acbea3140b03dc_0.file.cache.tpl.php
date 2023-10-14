<?php
/* Smarty version 4.3.4, created on 2023-10-14 16:18:45
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\cache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652aa3452baf62_37342635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf4bfa26d344cf378fd9d4ff9acbea3140b03dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\cache.tpl',
      1 => 1696969526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../areas/config/form.tpl' => 2,
  ),
),false)) {
function content_652aa3452baf62_37342635 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    This powerful function empowers users to purge the entire cache within your application. By executing this action,
    they can ensure that all cached data is removed, which is helpful for keeping the application up-to-date,
    eliminating outdated information, and optimizing performance. With this function, your users maintain control over the cache,
    ensuring that the application runs smoothly and stays current without the need to delve into technical details.
</p>
<div class="container-fluid border rounded p-3">
    <?php $_smarty_tpl->_assignInScope('formID_cache', "cache_clearForm");?>
    <?php $_smarty_tpl->_subTemplateRender("file:../areas/config/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['formID_cache']->value,'head'=>true), 0, false);
?>
        <input type="hidden" name="action" value="cache">
        <?php $_smarty_tpl->_subTemplateRender("file:../areas/config/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['formID_cache']->value,'foot'=>true,'button'=>true,'btnText'=>"Clear Cache"), 0, true);
?>
</div><?php }
}
