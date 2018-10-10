<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:04
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\listing\filter\facet-boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4009485245bbca690159ae0-12036956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e368c813b811e01f9a3e21c47f456e8899f65f' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\listing\\filter\\facet-boolean.tpl',
      1 => 1537260011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4009485245bbca690159ae0-12036956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbca69016a690_53611908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbca69016a690_53611908')) {function content_5bbca69016a690_53611908($_smarty_tpl) {?>


    <div class="filter-panel filter--value facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
         data-filter-type="value"
         data-facet-name="<?php echo $_smarty_tpl->tpl_vars['facet']->value->getFacetName();?>
"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

        
            <div class="filter-panel--flyout">

                
                    <label class="filter-panel--title" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                    </label>
                

                
                    <span class="filter-panel--input filter-panel--checkbox">
                        <input type="checkbox"
                               id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               value="1"
                               <?php if ($_smarty_tpl->tpl_vars['facet']->value->isActive()){?>checked="checked" <?php }?>/>

                        <span class="input--state checkbox--state">&nbsp;</span>
                    </span>
                
            </div>
        
    </div>

<?php }} ?>