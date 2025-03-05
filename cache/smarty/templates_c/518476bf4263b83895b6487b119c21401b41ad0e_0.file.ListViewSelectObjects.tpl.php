<?php
/* Smarty version 4.5.3, created on 2025-03-02 05:51:28
  from 'C:\xampp\htdocs\crm\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c3e3d07b1163_27990681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '518476bf4263b83895b6487b119c21401b41ad0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1740889998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c3e3d07b1163_27990681 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
