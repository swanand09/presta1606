<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:36
         compiled from "C:\wamp\www\presta1606\themes\default-bootstrap\modules\mailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16244537af308a7f924-71091479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ad5836e196eecdb3cf201312e39db745c194ee' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\default-bootstrap\\modules\\mailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16244537af308a7f924-71091479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af308aaff17_94010593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af308aaff17_94010593')) {function content_537af308aaff17_94010593($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>