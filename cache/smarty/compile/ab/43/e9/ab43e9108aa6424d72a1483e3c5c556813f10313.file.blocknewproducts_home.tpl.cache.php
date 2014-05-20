<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 11:49:18
         compiled from "C:\wamp\www\presta1606\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8613537b251e663e78-16114725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab43e9108aa6424d72a1483e3c5c556813f10313' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8613537b251e663e78-16114725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537b251e670405_21845219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b251e670405_21845219')) {function content_537b251e670405_21845219($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane active','id'=>'blocknewproducts'), 0);?>
<?php }} ?>