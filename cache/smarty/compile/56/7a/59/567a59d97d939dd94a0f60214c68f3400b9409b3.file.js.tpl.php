<?php /* Smarty version Smarty-3.1.14, created on 2014-05-20 06:15:50
         compiled from "C:\wamp\www\presta1606\admin\themes\default\template\controllers\modules\js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30254537af31611dc02-47285388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567a59d97d939dd94a0f60214c68f3400b9409b3' => 
    array (
      0 => 'C:\\wamp\\www\\presta1606\\admin\\themes\\default\\template\\controllers\\modules\\js.tpl',
      1 => 1397138952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30254537af31611dc02-47285388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'autocompleteList' => 0,
    'currentIndex' => 0,
    'token' => 0,
    'dirNameCurrentIndex' => 0,
    'ajaxCurrentIndex' => 0,
    'installed_modules' => 0,
    'error_module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_537af3161f7125_65921451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537af3161f7125_65921451')) {function content_537af3161f7125_65921451($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\presta1606\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<script type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['autocompleteList']->value;?>
</script>
<script type="text/javascript">
    var header_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Confirm reset'),$_smarty_tpl);?>
';
    var body_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Would you like to delete the content related to this module ?'),$_smarty_tpl);?>
';
    var left_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'No - reset only the parameters'),$_smarty_tpl);?>
';
    var right_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Yes - reset everything'),$_smarty_tpl);?>
';
	var currentIndex = '<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
';
	var currentIndexWithToken = '<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var dirNameCurrentIndex = '<?php echo $_smarty_tpl->tpl_vars['dirNameCurrentIndex']->value;?>
';
	var ajaxCurrentIndex = '<?php echo $_smarty_tpl->tpl_vars['ajaxCurrentIndex']->value;?>
';
	var installed_modules = <?php if (isset($_smarty_tpl->tpl_vars['installed_modules']->value)&&count($_smarty_tpl->tpl_vars['installed_modules']->value)){?><?php echo $_smarty_tpl->tpl_vars['installed_modules']->value;?>
<?php }else{ ?>false<?php }?>;
	var by = '<?php echo smartyTranslate(array('s'=>'by'),$_smarty_tpl);?>
';
	var errorLogin = '<?php echo smartyTranslate(array('s'=>'PrestaShop was unable to login to Addons. Please check your credentials and your internet connection.'),$_smarty_tpl);?>
';
	var confirmPreferencesSaved = '<?php echo smartyTranslate(array('s'=>'Preferences saved'),$_smarty_tpl);?>
';
	<?php if (isset($_GET['anchor'])&&!isset($_smarty_tpl->tpl_vars['error_module']->value)){?>var anchor = '<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(htmlentities($_GET['anchor']),'(',''),')',''),'{',''),'}',''),'\'',''),'/','');?>
';<?php }else{ ?>var anchor = '';<?php }?>

	<?php if (isset($_GET['module_name'])&&!isset($_smarty_tpl->tpl_vars['error_module']->value)){?>var module_name = '<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(htmlentities($_GET['module_name']),'(',''),')',''),'{',''),'}',''),'\'',''),'/','');?>
';<?php }else{ ?>var module_name = '';<?php }?>

	

	function getPrestaStore(){if(getE("prestastore").style.display!='block')return;$.post(dirNameCurrentIndex+"/ajax.php",{page:"prestastore"},function(a){getE("prestastore-content").innerHTML=a;})}
	function truncate_author(author){return ((author.length > 20) ? author.substring(0, 20)+"..." : author);}
	function modules_management(action)
	{
		var modules = document.getElementsByName('modules');
		var module_list = '';
		for (var i = 0; i < modules.length; i++)
		{
			if (modules[i].checked == true)
			{
				rel = modules[i].getAttribute('rel');
				if (rel != "false" && action == "uninstall")
				{
					if (!confirm(rel))
						return false;
				}
				module_list += '|'+modules[i].value;
			}
		}
		document.location.href=currentIndex+'&token='+token+'&'+action+'='+module_list.substring(1, module_list.length);
	}

	$('document').ready( function() {
		// ScrollTo
		if (anchor != '')
			$.uiTableFilter($('#moduleContainer').find('table'), anchor);

		if (module_name != '')
			$.uiTableFilter($('#moduleContainer').find('table'), module_name);
		
		$('#moduleQuicksearch').on('keyup', function(){
			val = this.value;
			if ($('#filter_all').hasClass('active'))
				$.uiTableFilter($('#moduleContainer').find('table'), val);
			else
				$('#filter_all').trigger('click');
				var interval = setInterval(function () {
				if (!$('#loader_module_list').length)
				{
					$.uiTableFilter($('#moduleContainer').find('table'), val);
					clearInterval(interval);
					interval = null;
				}
			
		}, 100);
	
			
		}).on('keydown', function(e){
			if (e.keyCode == 13)
				return false;
		});
		
		$('input[name="filtername"]').result(function(event, data, formatted) {
			$('#filternameForm').submit();
		});

		// Method to check / uncheck all modules checkbox
		$('#moduleContainer').on("click", "#checkme", function()
		{
			if ($(this).attr("rel") == 'false')
			{
				$(this).attr("checked", true);
				$(this).attr("rel", "true");
				$("input[name=modules]").attr("checked", true);
			}
			else
			{
				$(this).removeAttr("checked");
				$(this).attr("rel", "false");
				$("input[name=modules]").removeAttr("checked");
			}
		});		

		// Method to reload filter in ajax
		$('.categoryModuleFilterLink').click(function()
		{
			if ($(this).hasClass('active'))
				return false;
			$('.categoryModuleFilterLink').removeClass('active');
			$(this).addClass('active');
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : $(this).attr('href')+'&rand=' + new Date().getTime(),
					headers: {"cache-control": "no-cache"},
					async: true,
					cache: false,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "reloadModulesList"
					},
					beforeSend: function(xhr){
						$('#moduleContainer').html('<img id="loader_module_list" src="../img/loader.gif" alt="" border="0" />');
					},
					success: function(data, status, request){
						if (request.getResponseHeader('Login') === 'true')
							return window.location.reload();

						$('#moduleContainer').html(data);
						$('.dropdown-toggle').dropdown();
					}
				});
			}
			catch(e){}
			return false;
		});

		// Method to get modules_list.xml from prestashop.com and default_country_modules_list.xml from addons.prestashop.com
		try
		{
			resAjax = $.ajax({
				type:"POST",
				url: ajaxCurrentIndex,
				headers: {"cache-control": "no-cache"},
				async: true,
				cache: false,
				data: {
					ajaxMode : "1",
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "refreshModuleList"
				},
				success: function(data){
					if (data == '{"status":"refresh"}')
						window.location.href = window.location.href;
				}
			});
		}
		catch(e) { }

		// Method to log on PrestaShop Addons WebServices
		$('#addons_login_button').click(function()
		{
			var username_addons = $("#username_addons").val();
			var password_addons = $("#password_addons").val();
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "logOnAddonsWebservices",
						username_addons : username_addons,
						password_addons : password_addons
					},
					beforeSend: function(xhr){
						$('#addons_loading').html('<img src="../img/loader.gif" alt="" border="0" />');
					},
					success : function(data){
						if (data == 'OK')
						{
							$('#addons_loading').html('');
							$('#addons_login_div').fadeOut();
							window.location.href = currentIndexWithToken + '&conf=32';
						}
						else
							$('#addons_loading').html(errorLogin);
					}
				});
			}
			catch(e){}
			return false;
		});

		// Method to log out PrestaShop Addons WebServices
		$('#addons_logout_button').click(function()
		{
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "logOutAddonsWebservices"
					},
					beforeSend: function(xhr){
						$('#addons_loading').html('<img src="../img/loader.gif" alt="" border="0" />');
					},
					success: function(data) {
						if (data == 'OK')
						{
							$('#addons_loading').html('');
							$('#addons_login_div').fadeOut();
							window.location.href = currentIndexWithToken;
						}
						else
							$('#addons_loading').html(errorLogin);
					}
				});
			}
			catch(e){}
			return false;
		});

		// Method to set filter on modules
		function setFilter()
		{
			var module_type = $("#module_type_filter").val();
			var module_install = $("#module_install_filter").val();
			var module_status = $("#module_status_filter").val();
			var country_module_value = $("#country_module_value_filter").val();
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "setFilter",
						module_type : module_type,
						module_install : module_install,
						module_status : module_status,
						country_module_value : country_module_value,
						filterModules : 'Filter'
					},
					success : function(data){
						if (data == 'OK')
							window.location.href = currentIndexWithToken;
					}
				});
			}
			catch(e){}
			return false;
		}

		$(document).on('change', '#module_type_filter, #module_install_filter, #module_status_filter, #country_module_value_filter', function() { 
			setFilter(); 
		});

		$('.moduleTabPreferencesChoise').change(function()
		{			
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			module_pref = module_pref.substring(2, module_pref.length);

			$.ajax({
				type:"POST",
				url : ajaxCurrentIndex,
				async: true,
				data : {
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "saveTabModulePreferences",
					module_pref : module_pref,
					value_pref : value_pref
				},
				success : function(data){
					if (data == 'OK')
						showSuccessMessage(confirmPreferencesSaved);
				}
			});
		});
		
		// Method to save favorites preferences
		$('.moduleFavorite').change(function()
		{
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			var action_pref = module_pref.substring(0, 1);
			module_pref = module_pref.substring(2, module_pref.length);
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "saveFavoritePreferences",
						action_pref : action_pref,
						module_pref : module_pref,
						value_pref : value_pref
					},
					success : function(data){
						if (data == 'OK')
							showSuccessMessage(confirmPreferencesSaved);
					}
				});
			}
			catch(e){}
			return false;
		});

		$('#moduleContainer').on("click", ".toggle_favorite", function()
	    {
	      var el = $(this);
	      var value_pref = el.data('value');
	      var module_pref = el.data('module');
	      var action_pref = 'f';
	      var total_favorites = parseInt($('#favorite-count').html());

	      try
	      {
	        resAjax = $.ajax({
	            type:"POST",
	            url : ajaxCurrentIndex,
	            async: true,
	            data : {
	              ajax : "1",
	              token : token,
	              controller : "AdminModules",
	              action : "saveFavoritePreferences",
	              action_pref : action_pref,
	              module_pref : module_pref,
	              value_pref : value_pref
	            },
	            success : function(data)
	            {
	              // res.status  = cache or refresh
	              if (data == 'OK')
	              {
	                el.toggle();
	                el.parent('li').siblings().find('a.toggle_favorite').toggle();

					if (value_pref)
						$('#favorite-count').html(total_favorites+1);
					else
						$('#favorite-count').html(total_favorites-1);
	              }
	                
	            },
	            error: function(res,textStatus,jqXHR)
	            {
	              //jAlert("TECHNICAL ERROR"+res);
	            }
	        });
	      }
	      catch(e){}
	      return false;
	    });
	});

	
</script>
<?php }} ?>