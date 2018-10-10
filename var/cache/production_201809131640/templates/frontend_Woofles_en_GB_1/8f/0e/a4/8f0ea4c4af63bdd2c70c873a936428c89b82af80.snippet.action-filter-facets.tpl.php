<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:04
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\listing\actions\action-filter-facets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537113215bbca69026d957-29820583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0ea4c4af63bdd2c70c873a936428c89b82af80' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\listing\\actions\\action-filter-facets.tpl',
      1 => 1537260011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537113215bbca69026d957-29820583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facets' => 0,
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbca690275c48_69362531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbca690275c48_69362531')) {function content_5bbca690275c48_69362531($_smarty_tpl) {?>

    <?php  $_smarty_tpl->tpl_vars['facet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->key => $_smarty_tpl->tpl_vars['facet']->value){
$_smarty_tpl->tpl_vars['facet']->_loop = true;
?>
        
            <?php if ($_smarty_tpl->tpl_vars['facet']->value->getTemplate()!==null){?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['facet']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facet'=>$_smarty_tpl->tpl_vars['facet']->value), 0);?>

            <?php }?>
        
    <?php } ?>

<?php }} ?>