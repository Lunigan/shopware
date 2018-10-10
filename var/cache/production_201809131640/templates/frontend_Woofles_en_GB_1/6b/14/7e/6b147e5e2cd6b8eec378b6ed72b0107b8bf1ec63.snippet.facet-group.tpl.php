<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:04
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\listing\filter\facet-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14672949595bbca69024f6b5-99548704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b147e5e2cd6b8eec378b6ed72b0107b8bf1ec63' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\listing\\filter\\facet-group.tpl',
      1 => 1537260011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14672949595bbca69024f6b5-99548704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbca690254ed5_59636465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbca690254ed5_59636465')) {function content_5bbca690254ed5_59636465($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facet']->value->getLabel()){?>
    <h3 class="filter--set-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>
</h3>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("frontend/listing/actions/action-filter-facets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facets'=>$_smarty_tpl->tpl_vars['facet']->value->getFacetResults()), 0);?>

<?php }} ?>