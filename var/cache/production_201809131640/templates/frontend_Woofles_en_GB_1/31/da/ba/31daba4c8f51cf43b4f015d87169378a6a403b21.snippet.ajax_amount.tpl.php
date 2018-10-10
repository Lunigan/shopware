<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:24
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\checkout\ajax_amount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18429447875bbca6a4442e72-37261651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31daba4c8f51cf43b4f015d87169378a6a403b21' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\checkout\\ajax_amount.tpl',
      1 => 1537260009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18429447875bbca6a4442e72-37261651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbca6a4493664_31787515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbca6a4493664_31787515')) {function content_5bbca6a4493664_31787515($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include 'C:\\XAMPP\\xampp\\htdocs\\shopware\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'Star','namespace'=>'frontend/checkout/ajax_amount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'frontend/checkout/ajax_amount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'frontend/checkout/ajax_amount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>