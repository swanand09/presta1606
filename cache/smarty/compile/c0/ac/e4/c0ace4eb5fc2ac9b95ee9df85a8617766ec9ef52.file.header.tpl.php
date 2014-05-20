<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 11:49:17
         compiled from "C:\wamp\www\presta1606\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19479537b251d273455-90436691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ace4eb5fc2ac9b95ee9df85a8617766ec9ef52' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19479537b251d273455-90436691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537b251d2c5f28_51236053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b251d2c5f28_51236053')) {function content_537b251d2c5f28_51236053($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
<script type="text/javascript">
     var homeslider_loop=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['loop'];?>
;
     var homeslider_width=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['width'];?>
;
     var homeslider_speed=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
     var homeslider_pause=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;
</script>
<?php }?><?php }} ?>