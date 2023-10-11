<?php
/* Smarty version 4.3.4, created on 2023-10-11 08:23:57
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65263f7daa2d57_57297293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ef8f6fa520848876a9fe6a4e781ce43327143a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\customize.tpl',
      1 => 1697005434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65263f7daa2d57_57297293 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <span class="mt-2">CustomCSS - Editor</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="css-area" name="css-area"></textarea>
    </div>
</div>

<div class="container-fluid">
    <span class="mt-2">CustomJS - Editor</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="js-area" name="js-area"></textarea>
    </div>
</div>




    <?php echo '<script'; ?>
>
        var editor_css = CodeMirror.fromTextArea(document.getElementById("css-area"), {
            extraKeys: {"Ctrl-Space": "autocomplete"},
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-gss"
        });
        var editor_js = CodeMirror.fromTextArea(document.getElementById("js-area"), {
            extraKeys: {"Ctrl-Space": "autocomplete"},
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/javascript"
        });
    <?php echo '</script'; ?>
>
<?php }
}
