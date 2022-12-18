<?php
/* Smarty version 4.2.1, created on 2022-12-17 16:27:45
  from 'C:\OSPanel\domains\modx\setup\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639dc3d174bb06_33359366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dddee99be2e4fbd9f3753a62902b77db008c89e4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx\\setup\\templates\\footer.tpl',
      1 => 1668563382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dc3d174bb06_33359366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\modx\\core\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
            </div>
        </div>
    </div>

    <!-- start footer -->
    <footer>
        <div class="wrapper">
            <div class="copyrite">
                <p><?php ob_start();
echo date('Y');
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
            </div>
            <div class="copyrite_info">
                <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
<?php }
}
