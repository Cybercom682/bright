<?php
/* Smarty version 4.3.4, created on 2023-10-20 22:47:50
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\cache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532e7769f24e9_92690069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf4bfa26d344cf378fd9d4ff9acbea3140b03dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\cache.tpl',
      1 => 1697834859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532e7769f24e9_92690069 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    This powerful function empowers users to purge the entire cache within your application. By executing this action,
    they can ensure that all cached data is removed, which is helpful for keeping the application up-to-date,
    eliminating outdated information, and optimizing performance. With this function, your users maintain control over the cache,
    ensuring that the application runs smoothly and stays current without the need to delve into technical details.
</p>
<div class="container-fluid border rounded p-3">
    <form method="post">
    <input type="hidden" name="action" value="cache">
        <button type="submit">clear cache</button>
    </form>
</div><?php }
}
