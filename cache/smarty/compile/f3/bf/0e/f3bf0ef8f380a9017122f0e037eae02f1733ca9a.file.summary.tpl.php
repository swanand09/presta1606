<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:47
         compiled from "C:\wamp\www\presta1606\admin\themes\default\template\controllers\carrier_wizard\summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15496537af31388e570-62561711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3bf0ef8f380a9017122f0e037eae02f1733ca9a' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin\\themes\\default\\template\\controllers\\carrier_wizard\\summary.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15496537af31388e570-62561711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_multishop' => 0,
    'active_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3138ed587_88182489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3138ed587_88182489')) {function content_537af3138ed587_88182489($_smarty_tpl) {?>

<script type="text/javascript">
	var summary_translation_undefined = '<?php echo smartyTranslate(array('s'=>'[undefined]','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_meta_informations = '<?php echo smartyTranslate(array('s'=>'This carrier is @s1 and the delivery announced is: @s2.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_free = '<strong><?php echo smartyTranslate(array('s'=>'free','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_paid = '<strong><?php echo smartyTranslate(array('s'=>'not free','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_range = '<span class="is_free"><?php echo smartyTranslate(array('s'=>'This carrier can deliver orders from @s1 to @s2.','js'=>1),$_smarty_tpl);?>
</span>';
	var summary_translation_range_limit =  '<?php echo smartyTranslate(array('s'=>'If the order is out of range, the behavior is to @s3.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_shipping_cost = '<?php echo smartyTranslate(array('s'=>'The shipping cost is calculated @s1 and the tax rule @s2 will be applied.','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_price = '<strong><?php echo smartyTranslate(array('s'=>'according to the price','js'=>1),$_smarty_tpl);?>
</strong>';
	var summary_translation_weight = '<strong><?php echo smartyTranslate(array('s'=>'according to the weight','js'=>1),$_smarty_tpl);?>
</strong>';
</script>

<div class="defaultForm">
	<div class="panel">
		<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Carrier name:'),$_smarty_tpl);?>
 <strong id="summary_name"></strong></div>
		<div class="panel-body">
			<p id="summary_meta_informations"></p>
			<p id="summary_shipping_cost"></p>
			<p id="summary_range"></p>
			<div>
			<?php echo smartyTranslate(array('s'=>'This carrier will be proposed for those delivery zones:'),$_smarty_tpl);?>

				<ul id="summary_zones"></ul>
			</div>
			<div>
				<?php echo smartyTranslate(array('s'=>'And it will be proposed for those client groups:'),$_smarty_tpl);?>

				<ul id="summary_groups"></ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value){?>
			<div>
				<?php echo smartyTranslate(array('s'=>'Finally, this carrier will be proposed in those shops:'),$_smarty_tpl);?>

				<ul id="summary_shops"></ul>
			</div>
			<?php }?>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['active_form']->value;?>

</div>
<?php }} ?>