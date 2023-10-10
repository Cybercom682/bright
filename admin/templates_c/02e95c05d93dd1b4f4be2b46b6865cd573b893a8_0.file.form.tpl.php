<?php
/* Smarty version 4.3.4, created on 2023-10-10 12:03:28
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\config\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652521702c0f01_68576428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e95c05d93dd1b4f4be2b46b6865cd573b893a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\config\\form.tpl',
      1 => 1696932203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652521702c0f01_68576428 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['head']->value)) && $_smarty_tpl->tpl_vars['head']->value === true) {?>
    <form id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="<?php echo (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? 'post' ?? null : $tmp);?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['foot']->value)) && $_smarty_tpl->tpl_vars['foot']->value === true) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['button']->value)) && $_smarty_tpl->tpl_vars['button']->value === true) {?>
        <button type="submit" id="save-btn-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" onclick="postForm(this)" class="btn btn-<?php echo (($tmp = $_smarty_tpl->tpl_vars['btnBg']->value ?? null)===null||$tmp==='' ? 'primary' ?? null : $tmp);?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['btnText']->value ?? null)===null||$tmp==='' ? 'Submit' ?? null : $tmp);?>
</button>
    <?php }?>
</form>

    <?php echo '<script'; ?>
>
        function postForm(el) {
            var $form = $(el).closest('form'); // Das Formular, zu dem der Button gehört
            var action = $form.attr('action'); // Die Aktion des Formulars

            $.ajax({
                url: action,
                method: 'POST',
                data: $form.serialize(),
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
            return false;
        }
    <?php echo '</script'; ?>
>
<?php }
}
}
