<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:53
         compiled from "C:\wamp\www\presta1606\admin\themes\default\template\controllers\products\helpers\tree\tree_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5734537af3192160d2-85518848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d44ddbe9aea957564666de0bce3b854ca10aea' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_categories.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5734537af3192160d2-85518848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'is_category_filter' => 0,
    'nodes' => 0,
    'id' => 0,
    'use_checkbox' => 0,
    'use_search' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3192c0265_37512474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3192c0265_37512474')) {function content_537af3192c0265_37512474($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<div id="block_category_tree"<?php if (!$_smarty_tpl->tpl_vars['is_category_filter']->value){?> style="display:none"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
		<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
			<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

		</ul>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['use_checkbox']->value)&&$_smarty_tpl->tpl_vars['use_checkbox']->value==true){?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);
					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['use_search']->value)&&$_smarty_tpl->tpl_vars['use_search']->value==true){?>
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		});
	<?php }?>
	$(document).ready(function () {
		var tree = $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").tree("collapseAll");

		tree.on('collapse', function() {
			$('#expand-all-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').show();
		});

		tree.on('expand', function() {
			$('#collapse-all-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').show();
		});

		$('#collapse-all-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').hide();
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input[type=radio]").click(
			function()
			{
				location.href = location.href.replace(
					/&id_category=[0-9]*/, "")+"&id_category="
					+$(this).val();
			}
		);

		<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)){?>
			<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		<?php }?>
	});
</script><?php }} ?>