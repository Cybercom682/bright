<?php
/* Smarty version 4.3.4, created on 2023-10-09 10:40:36
  from 'C:\xampp\htdocs\bright\admin\templates\bootstrap\areas\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6523bc84ee8f47_04713733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395dc70e0083a966cb2b0a437746619be38e2c8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bright\\admin\\templates\\bootstrap\\areas\\dashboard.tpl',
      1 => 1696840834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6523bc84ee8f47_04713733 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid border rounded p-3">
    <div class="row">
        <div class="col-4">
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('type'=>"success",'title'=>"Visitors"));
$_block_repeat=true;
echo $_block_plugin1->smartyBootstrapCard(array('type'=>"success",'title'=>"Visitors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['alert'][0], array( array('type'=>"info",'message'=>"Momentan nicht gelistet!"),$_smarty_tpl ) );?>

            <?php $_block_repeat=false;
echo $_block_plugin1->smartyBootstrapCard(array('type'=>"success",'title'=>"Visitors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <div class="col-4">
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('type'=>"success",'title'=>"Last Changes.."));
$_block_repeat=true;
echo $_block_plugin2->smartyBootstrapCard(array('type'=>"success",'title'=>"Last Changes.."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <ul>
                    <li>added [SmartyFunc] - 09.10.2023 [10:30 Uhr]</li>
                    <li>added [xmlHelper] - 09.10.2023 [10:00 Uhr]</li>
                </ul>
            <?php $_block_repeat=false;
echo $_block_plugin2->smartyBootstrapCard(array('type'=>"success",'title'=>"Last Changes.."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <div class="col-4">
            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyBootstrapCard'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('type'=>"success",'title'=>"Server"));
$_block_repeat=true;
echo $_block_plugin3->smartyBootstrapCard(array('type'=>"success",'title'=>"Server"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serverInfo']->value, 'info', false, 'title');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
                    <span class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
:</span>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</span><br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_block_plugin3->smartyBootstrapCard(array('type'=>"success",'title'=>"Server"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>
</div><?php }
}
