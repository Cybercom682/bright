<?php
/* Smarty version 4.3.4, created on 2023-10-11 14:45:55
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\filemanager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652699031fe058_02480111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535f051662954030acc97b36c8df2b92946587ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\filemanager.tpl',
      1 => 1697025134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652699031fe058_02480111 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="elfinder"></div>

<?php echo '<script'; ?>
>
        $('#elfinder').elfinder({
            url: "http://localhost/bright/admin/controller/tools/elfinderFunc.php"
        });
<?php echo '</script'; ?>
>
<?php }
}
