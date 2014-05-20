<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 08:45:46
         compiled from "C:\wamp\www\presta1606\admin6298\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16893537afa1a5d22f3-09333121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850b9d7a104e83430a9865fbf5fdaed85e53ef60' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin6298\\themes\\default\\template\\content.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16893537afa1a5d22f3-09333121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537afa1a5f4921_39841555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537afa1a5f4921_39841555')) {function content_537afa1a5f4921_39841555($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>