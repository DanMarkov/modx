<?php
/* Smarty version 4.2.1, created on 2022-12-17 16:28:20
  from 'C:\OSPanel\domains\modx\manager\templates\default\dashboard\configcheck.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639dc3f4d80969_99477700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b867332e9c13f6eaa83e5b116f652dbd6d11fb3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx\\manager\\templates\\default\\dashboard\\configcheck.tpl',
      1 => 1668563380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dc3f4d80969_99477700 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
    <h4><?php echo $_smarty_tpl->tpl_vars['_lang']->value['configcheck_notok'];?>
</h4>
    <ul class="configcheck">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li>
                <h5 class="warn"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h5>
                <p><i class="icon icon-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
