<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 08:45:21
         compiled from "C:\wamp\www\presta1606\themes\default-bootstrap\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9941537afa01a0e3b2-21479540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3e40573341869d5c853bc77cd4039d942ad117' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\default-bootstrap\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9941537afa01a0e3b2-21479540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537afa01a70c44_40022485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537afa01a70c44_40022485')) {function content_537afa01a70c44_40022485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\presta1606\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php }else{ ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1){?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>