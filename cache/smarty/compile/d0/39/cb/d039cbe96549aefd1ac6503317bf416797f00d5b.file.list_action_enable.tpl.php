<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 08:52:10
         compiled from "C:\wamp\www\presta1606\admin6298\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13237537afb9ac416f0-75842707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd039cbe96549aefd1ac6503317bf416797f00d5b' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin6298\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13237537afb9ac416f0-75842707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537afb9ac95890_95401197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537afb9ac95890_95401197')) {function content_537afb9ac95890_95401197($_smarty_tpl) {?>
<a class="list-action-enable <?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value){?>ajax_table_link<?php }?> <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>action-enabled<?php }else{ ?>action-disabled<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?> hidden<?php }?>"></i>
</a>
<?php }} ?>