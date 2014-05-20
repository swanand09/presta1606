<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 11:49:17
         compiled from "C:\wamp\www\presta1606\modules\blockwishlist\blockwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28649537b251de09e32-45480113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa9616ecdea035e1abdc54df9ce78943066e836' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1400567121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28649537b251de09e32-45480113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537b251de26d88_34630052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b251de26d88_34630052')) {function content_537b251de26d88_34630052($_smarty_tpl) {?>

<script type="text/javascript">
	var isLoggedWishlist = <?php if ($_smarty_tpl->tpl_vars['logged']->value){?>true<?php }else{ ?>false<?php }?>;
	var mywishlist_url="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
";
</script><?php }} ?>