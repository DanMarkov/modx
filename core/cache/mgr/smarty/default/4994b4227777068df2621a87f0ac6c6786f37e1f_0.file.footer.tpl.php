<?php
/* Smarty version 4.2.1, created on 2022-12-17 16:28:22
  from 'C:\OSPanel\domains\modx\manager\templates\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639dc3f63f7585_88659440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4994b4227777068df2621a87f0ac6c6786f37e1f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx\\manager\\templates\\default\\footer.tpl',
      1 => 1668563380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dc3f63f7585_88659440 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>
    <!-- #modx-content-->
    <div id="modx-footer">
        <?php if ($_smarty_tpl->tpl_vars['_search']->value) {?>
            <div class="modx-subnav" id="modx-manager-search-icon-submenu">
                <div class="modx-subnav-arrow"></div>
                <div id="modx-manager-search" role="search"></div>
            </div>
        <?php }?>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['navb_submenus']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['userNav_submenus']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
    </div>
</div>
<!-- #modx-container -->

</body>
</html><?php }
}
