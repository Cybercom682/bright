<?php
/* Smarty version 4.3.4, created on 2023-10-14 16:18:45
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652aa34519cb69_85460144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3f6de33275467a5eba7a167c9ee02ed31c4585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\pages.tpl',
      1 => 1697054428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652aa34519cb69_85460144 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <span class="mt-2">Create Page</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="ticket-area" name="ticket-area"></textarea>
    </div>
</div>


    <?php echo '<script'; ?>
>
        CKEDITOR.replace('ticket-area');
    <?php echo '</script'; ?>
>
<?php }
}
