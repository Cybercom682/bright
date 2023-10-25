<?php
/* Smarty version 4.3.4, created on 2023-10-24 14:36:23
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\cache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6537ba478ea5f0_07099095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf4bfa26d344cf378fd9d4ff9acbea3140b03dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\cache.tpl',
      1 => 1697839658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537ba478ea5f0_07099095 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    This powerful function empowers users to purge the entire cache within your application. By executing this action,
    they can ensure that all cached data is removed, which is helpful for keeping the application up-to-date,
    eliminating outdated information, and optimizing performance. With this function, your users maintain control over the cache,
    ensuring that the application runs smoothly and stays current without the need to delve into technical details.
</p>
<div class="container-fluid border rounded p-3">
    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyBootstrapForm'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"cForm",'method'=>"POST",'action'=>"cache"));
$_block_repeat=true;
echo $_block_plugin8->smartyBootstrapForm(array('id'=>"cForm",'method'=>"POST",'action'=>"cache"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <button class="btn btn-primary" type="submit">clear cache</button>
    <?php $_block_repeat=false;
echo $_block_plugin8->smartyBootstrapForm(array('id'=>"cForm",'method'=>"POST",'action'=>"cache"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }
}
