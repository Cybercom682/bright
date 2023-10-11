<?php
/* Smarty version 4.3.4, created on 2023-10-11 09:38:47
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65265107013371_57957534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d61f8442e2650b238cf94fbd811f111b5e57c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\tickets.tpl',
      1 => 1697009923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65265107013371_57957534 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <span class="mt-2">Create Ticket</span>
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
