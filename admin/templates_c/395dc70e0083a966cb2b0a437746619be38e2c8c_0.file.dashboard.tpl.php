<?php
/* Smarty version 4.3.4, created on 2023-10-20 21:49:15
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532d9bba42f58_62972479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395dc70e0083a966cb2b0a437746619be38e2c8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\dashboard.tpl',
      1 => 1697126859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532d9bba42f58_62972479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-4 p-3">
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('title'=>"Visitors"));
$_block_repeat=true;
echo $_block_plugin1->smartyBootstrapCard(array('title'=>"Visitors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="row">
                <div class="col-3 d-grid">
                    <span class="fw-bold mb-3">Today:</span>
                    <span class="fw-bold mb-3">This Month:</span>
                    <span class="fw-bold mb-3">This Year:</span>
                </div>
                <div class="col-9 d-grid">
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3"><?php echo $_smarty_tpl->tpl_vars['visitToday']->value;?>
</span>
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3"><?php echo $_smarty_tpl->tpl_vars['visitThisMonth']->value;?>
</span>
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3"><?php echo $_smarty_tpl->tpl_vars['visitThisYear']->value;?>
</span>
                </div>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin1->smartyBootstrapCard(array('title'=>"Visitors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="col-4 p-3">
        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('title'=>"Last Changes.."));
$_block_repeat=true;
echo $_block_plugin2->smartyBootstrapCard(array('title'=>"Last Changes.."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <ul>
                <li>added [SmartyFunc] - 09.10.2023 [10:30 Uhr]</li>
                <li>added [xmlHelper] - 09.10.2023 [10:00 Uhr]</li>
            </ul>
        <?php $_block_repeat=false;
echo $_block_plugin2->smartyBootstrapCard(array('title'=>"Last Changes.."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="col-4 p-3">
        <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('title'=>"Server-Informations"));
$_block_repeat=true;
echo $_block_plugin3->smartyBootstrapCard(array('title'=>"Server-Informations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serverInfo']->value, 'info', false, 'title');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                        <div class="col-3 d-grid">
                            <span class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
:</span>
                        </div>
                        <div class="col-9 d-grid">
                            <span><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</span>
                        </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin3->smartyBootstrapCard(array('title'=>"Server-Informations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="col-4 p-3">
        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('title'=>"Open Tickets"));
$_block_repeat=true;
echo $_block_plugin4->smartyBootstrapCard(array('title'=>"Open Tickets"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['DataTable'][0], array( array('table'=>"ttickets",'assign'=>"items"),$_smarty_tpl ) );?>

            <table class="table table-hover border">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Prio</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value <= 3) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cTitle'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cPrio'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cStatus'];?>
</td>
                    </tr>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php $_block_repeat=false;
echo $_block_plugin4->smartyBootstrapCard(array('title'=>"Open Tickets"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="col-4 p-3">
        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('title'=>"Logs"));
$_block_repeat=true;
echo $_block_plugin5->smartyBootstrapCard(array('title'=>"Logs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logValues']->value, 'log', false, 'key');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value <= 2) {?>
                    <div class="col-12">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['LogFormat'][0], array( array('string'=>$_smarty_tpl->tpl_vars['log']->value),$_smarty_tpl ) );?>
</span>
                        <hr>
                    </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="col-12">
                    <a class="btn btn-secondary btn-sm w-100" onclick="goToTab(this,'#nav-tabContent')" href="#list-Log">
                        show all
                    </a>
                </div>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin5->smartyBootstrapCard(array('title'=>"Logs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php }
}
