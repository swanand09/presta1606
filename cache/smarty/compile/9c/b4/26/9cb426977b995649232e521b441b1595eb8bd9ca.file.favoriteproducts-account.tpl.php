<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:36
         compiled from "C:\wamp\www\presta1606\themes\default-bootstrap\modules\favoriteproducts\views\templates\front\favoriteproducts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10483537af3081037e1-61864349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb426977b995649232e521b441b1595eb8bd9ca' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\front\\favoriteproducts-account.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10483537af3081037e1-61864349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'favoriteProducts' => 0,
    'favoriteProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3081d79d7_64272962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3081d79d7_64272962')) {function content_537af3081d79d7_64272962($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'My account','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
	<span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="favoriteproducts_block_account">
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['favoriteProducts']->value){?>
    	<ul class="row">
			<?php  $_smarty_tpl->tpl_vars['favoriteProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favoriteProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoriteProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favoriteProduct']->key => $_smarty_tpl->tpl_vars['favoriteProduct']->value){
$_smarty_tpl->tpl_vars['favoriteProduct']->_loop = true;
?>
			<li class="col-xs-12">
            	<div class="favoriteproduct clearfix inner-content">
                    <a 
                    class="product_img_link"
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
                        <img 
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['favoriteProduct']->value['image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        alt=""/>
                    </a>
                    <p class="s_title_block">
                    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
                    		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favoriteProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    	</a>
                    </p>
                    <div class="product_desc"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['favoriteProduct']->value['description_short']), ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="remove">
                    	<a href="#" onclick="return false" rel="ajax_id_favoriteproduct_<?php echo $_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'];?>
">
                    		<i class="icon-remove"></i>
                    	</a>
                    </div>
                </div>
			</li>
			<?php } ?>
        </ul>
	<?php }else{ ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No favorite products have been determined just yet. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links clearfix">
		<li>
			<a 
			class="btn btn-default button button-small" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to your account','mod'=>'favoriteproducts'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
	</ul>
</div><?php }} ?>