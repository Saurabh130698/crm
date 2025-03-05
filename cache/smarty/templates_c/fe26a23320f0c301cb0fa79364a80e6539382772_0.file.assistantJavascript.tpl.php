<?php
/* Smarty version 4.5.3, created on 2025-03-02 07:05:20
  from 'C:\xampp\htdocs\crm\modules\ModuleBuilder\tpls\assistantJavascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c3f520078144_00389257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe26a23320f0c301cb0fa79364a80e6539382772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\modules\\ModuleBuilder\\tpls\\assistantJavascript.tpl',
      1 => 1740889910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c3f520078144_00389257 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);

<?php if ($_smarty_tpl->tpl_vars['userPref']->value) {?>
	Assistant.processUserPref("<?php echo $_smarty_tpl->tpl_vars['userPref']->value;?>
");
<?php }
if ($_smarty_tpl->tpl_vars['assistant']->value['key'] && $_smarty_tpl->tpl_vars['assistant']->value['group']) {?>
	Assistant.mbAssistant.setBody(SUGAR.language.get('ModuleBuilder','assistantHelp').<?php echo $_smarty_tpl->tpl_vars['assistant']->value['group'];?>
.<?php echo $_smarty_tpl->tpl_vars['assistant']->value['key'];?>
);
<?php }?>

	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}

<?php echo '</script'; ?>
><?php }
}
