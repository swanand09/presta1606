<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 09:05:05
         compiled from "C:\wamp\www\presta1606\themes\mobiho\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3798537afea18ae109-34565005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2718a650b27c0e31eb7e57986fde6cdc11f748' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\mobiho\\modules\\blockcontact\\nav.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3798537afea18ae109-34565005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537afea18ea825_65280250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537afea18ea825_65280250')) {function content_537afea18ea825_65280250($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value){?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>