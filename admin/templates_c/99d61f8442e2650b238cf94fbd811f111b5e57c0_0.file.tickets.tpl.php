<?php
/* Smarty version 4.3.4, created on 2023-10-24 14:36:23
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6537ba478d3621_84950342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d61f8442e2650b238cf94fbd811f111b5e57c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\tickets.tpl',
      1 => 1698138564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537ba478d3621_84950342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\bright\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['DataTable'][0], array( array('table'=>"ttickets",'assign'=>"items"),$_smarty_tpl ) );?>

<div class="container-fluid p-0">
    <table class="table table-sm table-hover border">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Task</th>
            <th scope="col">Prio</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Options</th>
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
            <td>
                <ul class="nav-bar nav">
                   <li>
                       <button class="btn btn-sm link-primary border-0" onclick="editTicket(<?php echo $_smarty_tpl->tpl_vars['item']->value['kTicket'];?>
)">
                           <i class="fa-solid fa-pen-to-square"></i>
                       </button>
                   </li>
                    <li>
                        <button class="btn btn-sm link-danger border-0" onclick="deleteTicket(<?php echo $_smarty_tpl->tpl_vars['item']->value['kTicket'];?>
)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </li>
                </ul>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<div class="container-fluid border rounded mt-3 p-3 d-flex justify-content-end">
    <div class="col-4 me-auto my-auto d-flex">
        <span><strong>Ticket Count:</strong></span>&nbsp;
        <div class="border px-2 text-bg-secondary"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value);?>
</div>
    </div>
    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyBootstrapModal'))) {
throw new SmartyException('block tag \'modal\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('modal', array('btnText'=>"Create Ticket"));
$_block_repeat=true;
echo $_block_plugin6->smartyBootstrapModal(array('btnText'=>"Create Ticket"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyBootstrapForm'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"tForm",'method'=>"POST",'action'=>"create",'handler'=>"ticket"));
$_block_repeat=true;
echo $_block_plugin7->smartyBootstrapForm(array('id'=>"tForm",'method'=>"POST",'action'=>"create",'handler'=>"ticket"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="row">
                <div class="col-12 mb-3 form-group">
                    <label for="t-title" class="form-label">Title:</label>&nbsp;
                    <input id="t-title" class="form-control w-100" name="t_title" placeholder="Title">
                </div>
                <div class="col-6 mb-3 form-group">
                    <label for="t-prio" class="form-label">Prio:</label>&nbsp;
                    <select id="t-prio" class="form-select w-100" name="t_prio" placeholder="Medium">
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>
                <div class="col-6 mb-3 form-group">
                    <label for="t-status" class="form-label">Status:</label>&nbsp;
                    <select id="t-status" class="form-select w-100" name="t_status" placeholder="open">
                        <option value="open">Open</option>
                        <option value="closed"></option>
                    </select>
                </div>
                <div class="col-12 mb-3 form-group">
                    <label for="t-task" class="form-label">Task:</label>&nbsp;
                    <textarea class="form-control w-100" id="t-task" name="t_task" placeholder="content..." style="min-height: 150px;"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">create</button>
                </div>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin7->smartyBootstrapForm(array('id'=>"tForm",'method'=>"POST",'action'=>"create",'handler'=>"ticket"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo $_block_plugin6->smartyBootstrapModal(array('btnText'=>"Create Ticket"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php echo '<script'; ?>
>
    function deleteTicket(id){
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = window.location.href;

        var hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'action';
        hiddenInput.value = 'delete';

        var hiddenInput2 = document.createElement('input');
        hiddenInput2.type = 'hidden';
        hiddenInput2.name = 'handler';
        hiddenInput2.value = 'ticket';

        var idValue = document.createElement('input');
        idValue.type = 'hidden';
        idValue.name = 't_id';
        idValue.value = id;

        form.appendChild(hiddenInput);
        form.appendChild(hiddenInput2);
        form.appendChild(idValue);

        document.body.appendChild(form);

        form.submit();
    }
    function editTicket(id){
        console.log('model to edit: ' + id);
    }
<?php echo '</script'; ?>
><?php }
}
