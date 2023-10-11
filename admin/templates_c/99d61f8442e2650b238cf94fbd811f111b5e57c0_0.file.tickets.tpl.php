<?php
/* Smarty version 4.3.4, created on 2023-10-11 22:00:54
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6526fef68fb3d0_42121931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d61f8442e2650b238cf94fbd811f111b5e57c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\tickets.tpl',
      1 => 1697054419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526fef68fb3d0_42121931 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['DataTable'][0], array( array('table'=>"ttickets",'assign'=>"items"),$_smarty_tpl ) );?>

<div class="container-fluid">
    <table class="table table-hover border">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Task</th>
            <th scope="col">Prio</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cTitle'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cContent'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cPrio'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cStatus'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['dErstellt'];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
