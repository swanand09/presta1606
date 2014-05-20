<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:46
         compiled from "C:\wamp\www\presta1606\themes\default-bootstrap\supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648537af3124328d0-76533257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b69df6a8c15c1a129b43f82e4b1810fc842805f' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\default-bootstrap\\supplier.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648537af3124328d0-76533257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'supplier' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3124b57a8_37952901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3124b57a8_37952901')) {function content_537af3124b57a8_37952901($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by supplier:'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)){?>
		<div class="description_box rte">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
		<div class="content_sortPagiBar">
	    	<div class="sortPagiBar clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
	    	<div class="top-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	        </div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


		<div class="content_sortPagiBar">
	        <div class="bottom-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

	        </div>
		</div>
	<?php }else{ ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this supplier.'),$_smarty_tpl);?>
</p>
	<?php }?> 
<?php }?>
<?php }} ?>