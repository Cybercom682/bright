<?php
/* Smarty version 4.3.4, created on 2023-10-21 01:28:26
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\plugins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65330d1a22b5e9_69726534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1af37246ec87abe3d3936e1e259ae2265a023d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\plugins.tpl',
      1 => 1697842657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65330d1a22b5e9_69726534 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-hover border">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Plugin</th>
        <th scope="col">Description</th>
        <th scope="col">Version</th>
        <th scope="col">Folder</th>
        <th scope="col">Status</th>
        <th scope="col">Options</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginList']->value, 'plugin', false, 'key');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value["@attributes"]['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value["@attributes"]['description'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value["@attributes"]['version'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value["@attributes"]['validate'];?>
</td>
            <td class="mx-auto"><i class="fa-solid fa-check text-success"></i></td>
            <td>Options at the Future...</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php }
}
