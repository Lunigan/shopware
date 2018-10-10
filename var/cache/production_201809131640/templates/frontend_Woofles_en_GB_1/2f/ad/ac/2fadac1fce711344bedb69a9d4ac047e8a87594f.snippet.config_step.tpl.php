<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:11
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\detail\config_step.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12701698985bbca6970daa70-89470024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fadac1fce711344bedb69a9d4ac047e8a87594f' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\detail\\config_step.tpl',
      1 => 1537260010,
      2 => 'file',
    ),
    '2d994920b47ea0e129d328494c6ab9c6a8b23950' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\detail\\config_reset.tpl',
      1 => 1537260010,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '12701698985bbca6970daa70-89470024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sArticle' => 0,
    'sConfigurator' => 0,
    'groupID' => 0,
    'pregroupID' => 0,
    'theme' => 0,
    'configValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbca6971145a1_03410406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbca6971145a1_03410406')) {function content_5bbca6971145a1_03410406($_smarty_tpl) {?>
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sError']&&$_smarty_tpl->tpl_vars['sArticle']->value['sError']['variantNotAvailable']){?>
        <?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'VariantAreNotAvailable','namespace'=>'frontend/detail/config_step')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'VariantAreNotAvailable','namespace'=>'frontend/detail/config_step'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "The selected option is currently not available";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'VariantAreNotAvailable','namespace'=>'frontend/detail/config_step'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("frontend/_includes/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"error",'content'=>$_tmp1), 0);?>

    <?php }?>


<form method="post" action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('sArticle' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], 'sCategory' => $_smarty_tpl->tpl_vars['sArticle']->value['categoryID'], ))); ?>" class="configurator--form selection--form">
    <?php  $_smarty_tpl->tpl_vars['sConfigurator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sConfigurator']->_loop = false;
 $_smarty_tpl->tpl_vars['groupID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sConfigurator']->key => $_smarty_tpl->tpl_vars['sConfigurator']->value){
$_smarty_tpl->tpl_vars['sConfigurator']->_loop = true;
 $_smarty_tpl->tpl_vars['groupID']->value = $_smarty_tpl->tpl_vars['sConfigurator']->key;
?>

        
        
            <p class="configurator--label"><?php echo $_smarty_tpl->tpl_vars['sConfigurator']->value['groupname'];?>
:</p>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['sConfigurator']->value['groupdescription']){?>
                <p class="configurator--description"><?php echo $_smarty_tpl->tpl_vars['sConfigurator']->value['groupdescription'];?>
</p>
            <?php }?>
        

        <?php $_smarty_tpl->tpl_vars['pregroupID'] = new Smarty_variable($_smarty_tpl->tpl_vars['groupID']->value-1, null, 0);?>
        
        
            <div class="field--select select-field<?php if ($_smarty_tpl->tpl_vars['groupID']->value>0&&empty($_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator'][$_smarty_tpl->tpl_vars['pregroupID']->value]['user_selected'])){?> is--disabled<?php }?>">
                <select<?php if ($_smarty_tpl->tpl_vars['groupID']->value>0&&empty($_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator'][$_smarty_tpl->tpl_vars['pregroupID']->value]['user_selected'])){?> disabled="disabled"<?php }?> name="group[<?php echo $_smarty_tpl->tpl_vars['sConfigurator']->value['groupID'];?>
]"<?php if ($_smarty_tpl->tpl_vars['theme']->value['ajaxVariantSwitch']){?> data-ajax-select-variants="true"<?php }else{ ?> data-auto-submit="true"<?php }?>>

                    
                    <?php if (empty($_smarty_tpl->tpl_vars['sConfigurator']->value['user_selected'])){?>
                        <option value="" selected="selected"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailConfigValueSelect','namespace'=>'frontend/detail/config_step')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigValueSelect','namespace'=>'frontend/detail/config_step'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigValueSelect','namespace'=>'frontend/detail/config_step'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                    <?php }?>

                    <?php  $_smarty_tpl->tpl_vars['configValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configValue']->_loop = false;
 $_smarty_tpl->tpl_vars['optionID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sConfigurator']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configValue']->key => $_smarty_tpl->tpl_vars['configValue']->value){
$_smarty_tpl->tpl_vars['configValue']->_loop = true;
 $_smarty_tpl->tpl_vars['optionID']->value = $_smarty_tpl->tpl_vars['configValue']->key;
?>
                        <option <?php if (!$_smarty_tpl->tpl_vars['sArticle']->value['notification']&&!$_smarty_tpl->tpl_vars['configValue']->value['selectable']){?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['configValue']->value['selected']&&$_smarty_tpl->tpl_vars['sConfigurator']->value['user_selected']){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['configValue']->value['optionID'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['configValue']->value['optionname'];?>
<?php if ($_smarty_tpl->tpl_vars['configValue']->value['upprice']&&!$_smarty_tpl->tpl_vars['configValue']->value['reset']){?> <?php if ($_smarty_tpl->tpl_vars['configValue']->value['upprice']>0){?><?php }?><?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['configValue']->value['selectable']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailConfigValueNotAvailable','namespace'=>'frontend/detail/config_step')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigValueNotAvailable','namespace'=>'frontend/detail/config_step'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 - Not available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigValueNotAvailable','namespace'=>'frontend/detail/config_step'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        
    <?php } ?>

    
        <noscript>
            <input name="recalc" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailConfigActionSubmit','namespace'=>'frontend/detail/config_step')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigActionSubmit','namespace'=>'frontend/detail/config_step'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfigActionSubmit','namespace'=>'frontend/detail/config_step'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
        </noscript>
    
</form>


    <?php /*  Call merged included template "frontend/detail/config_reset.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/detail/config_reset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '12701698985bbca6970daa70-89470024');
content_5bbca697102df5_78220439($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/detail/config_reset.tpl" */?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 15:01:11
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\detail\config_reset.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5bbca697102df5_78220439')) {function content_5bbca697102df5_78220439($_smarty_tpl) {?>
    <?php  $_smarty_tpl->tpl_vars['sConfigurator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sConfigurator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sConfigurator']->key => $_smarty_tpl->tpl_vars['sConfigurator']->value){
$_smarty_tpl->tpl_vars['sConfigurator']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['sConfigurator']->value['user_selected']){?>
            
                <a class="btn is--icon-left reset--configuration" href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('sArticle' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], 'sCategory' => $_smarty_tpl->tpl_vars['sArticle']->value['categoryID'], ))); ?>">
                    <i class="icon--cross"></i>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailConfiguratorReset','namespace'=>'frontend/detail/config_reset','default'=>'Reset selection')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfiguratorReset','namespace'=>'frontend/detail/config_reset','default'=>'Reset selection'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reset selection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailConfiguratorReset','namespace'=>'frontend/detail/config_reset','default'=>'Reset selection'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </a>
            
            <?php break 1?>
        <?php }?>
    <?php } ?>
<?php }} ?>