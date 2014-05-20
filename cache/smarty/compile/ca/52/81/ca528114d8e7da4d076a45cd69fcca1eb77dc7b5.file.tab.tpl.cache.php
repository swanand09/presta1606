<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 09:05:03
         compiled from "C:\wamp\www\presta1606\themes\mobiho\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10891537afe9f848525-79127596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca528114d8e7da4d076a45cd69fcca1eb77dc7b5' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\themes\\mobiho\\modules\\blockbestsellers\\tab.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10891537afe9f848525-79127596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537afe9f86eea1_54268871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537afe9f86eea1_54268871')) {function content_537afe9f86eea1_54268871($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\presta1606\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>