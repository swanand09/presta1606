<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:16:01
         compiled from "C:\wamp\www\presta1606\admin\themes\default\template\helpers\modules_list\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26835537af32114fcf8-79500722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8d8a24614d9c9585adfdd93df306d8fc9a279d' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin\\themes\\default\\template\\helpers\\modules_list\\list.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26835537af32114fcf8-79500722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_list' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3211aca89_07251728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3211aca89_07251728')) {function content_537af3211aca89_07251728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\presta1606\\tools\\smarty\\plugins\\function.counter.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\wamp\\www\\presta1606\\tools\\smarty\\plugins\\function.cycle.php';
?>

<div class="panel">
	<h3>
		<i class="icon-list-ul"></i>
		<?php echo smartyTranslate(array('s'=>'Modules list'),$_smarty_tpl);?>

	</h3>
	<div id="modules_list_container_tab" class="row">
		<div class="col-lg-12">
			<?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)){?>
				<table class="table">
					<?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

						<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>	
							<div><?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['count']->value%3==0){?>
							<?php }?>
						<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

					<?php } ?>
				</table>
			<?php }else{ ?>
				<table class="table">
					<tr>
						<td>
							<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</div>
						</td>
					</tr>
				</table>
			<?php }?>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script><?php }} ?>