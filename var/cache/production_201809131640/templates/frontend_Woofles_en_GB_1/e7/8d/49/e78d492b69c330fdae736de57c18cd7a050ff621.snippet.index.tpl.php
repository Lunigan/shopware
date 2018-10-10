<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:01
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\plugins\seo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:461719295bbc9715e70c34-82882963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e78d492b69c330fdae736de57c18cd7a050ff621' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\plugins\\seo\\index.tpl',
      1 => 1537260011,
      2 => 'file',
    ),
    '6a87e627c782e62cabbd856e7bfcce675f2c2878' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\checkout\\ajax_cart.tpl',
      1 => 1537260009,
      2 => 'file',
    ),
    '44fe819c3009d4d99584f3fbe6b0f2ced434bd0a' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Frontend\\Bare\\frontend\\checkout\\ajax_cart_item.tpl',
      1 => 1537260009,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '461719295bbc9715e70c34-82882963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'basketInfoMessage' => 0,
    'sBasket' => 0,
    'sBasketItem' => 0,
    'sOutputNet' => 0,
    'sDispatchNoOrder' => 0,
    'sDispatches' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9716077ef6_05599882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9716077ef6_05599882')) {function content_5bbc9716077ef6_05599882($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include 'C:\\XAMPP\\xampp\\htdocs\\shopware\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?>
    <div class="ajax--cart">
        
            <div class="buttons--off-canvas">
                
                    <a href="#close-categories-menu" class="close--off-canvas">
                        <i class="icon--arrow-left"></i>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartContinueShopping','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartContinueShopping','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Continue shopping<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartContinueShopping','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                
            </div>
        

        
            <?php if ($_smarty_tpl->tpl_vars['theme']->value['offcanvasCart']){?>
                <?php if ($_smarty_tpl->tpl_vars['basketInfoMessage']->value){?>
                    <div class="alert is--info is--rounded is--hidden">
                        <div class="alert--icon">
                            <div class="icon--element icon--info"></div>
                        </div>
                        <div class="alert--content"><?php echo $_smarty_tpl->tpl_vars['basketInfoMessage']->value;?>
</div>
                    </div>
                <?php }else{ ?>
                    <div class="alert is--success is--rounded is--hidden">
                        <div class="alert--icon">
                            <div class="icon--element icon--check"></div>
                        </div>
                        <div class="alert--content"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartSuccessText','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartSuccessText','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The product was successfully added to your shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartSuccessText','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                    </div>
                <?php }?>
            <?php }?>
        

        
            <div class="item--container">
                
                    <?php if ($_smarty_tpl->tpl_vars['sBasket']->value['content']){?>
                        <?php  $_smarty_tpl->tpl_vars['sBasketItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sBasketItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sBasket']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sBasketItem']->key => $_smarty_tpl->tpl_vars['sBasketItem']->value){
$_smarty_tpl->tpl_vars['sBasketItem']->_loop = true;
?>
                            
                                <?php /*  Call merged included template "frontend/checkout/ajax_cart_item.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/ajax_cart_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('basketItem'=>$_smarty_tpl->tpl_vars['sBasketItem']->value), 0, '461719295bbc9715e70c34-82882963');
content_5bbc9715f034f5_27380732($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/ajax_cart_item.tpl" */?>
                            
                        <?php } ?>
                    <?php }else{ ?>
                        
                            <div class="cart--item is--empty">
                                
                                    <span class="cart--empty-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your shopping cart is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                
                            </div>
                        
                    <?php }?>
                
            </div>
        

        
            <?php if ($_smarty_tpl->tpl_vars['sBasket']->value['content']){?>
                <div class="prices--container">
                    
                        <div class="prices--articles">
                            <span class="prices--articles-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartTotalAmount','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartTotalAmount','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subtotal amount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartTotalAmount','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                            <span class="prices--articles-amount"><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasket']->value['Amount']);?>
</span>
                        </div>
                    
					
                        <p class="prices--tax">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailDataPriceInfo','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailDataPriceInfo','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Prices <?php if ($_smarty_tpl->tpl_vars['sOutputNet']->value){?> plus <?php }else{ ?>incl.<?php }?> VAT <a title="shipping costs" href="<?php echo 'http://localhost/shopware/custom/index/sCustom/28';?>" style="text-decoration:underline">plus shipping costs</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailDataPriceInfo','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </p>
					
                </div>
            <?php }?>
        

        
        
            <div class="button--container">
                
                    
                        <?php if (!($_smarty_tpl->tpl_vars['sDispatchNoOrder']->value&&!$_smarty_tpl->tpl_vars['sDispatches']->value)){?>
                            
                                <a href="<?php ob_start();?><?php echo Shopware()->Config()->get('always_select_payment'); ?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><?php echo 'http://localhost/shopware/checkout/shippingPayment';?><?php }else{ ?><?php echo 'http://localhost/shopware/checkout/confirm';?><?php }?>" class="btn is--primary button--checkout is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Proceed to checkout";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
">
                                    <i class="icon--arrow-right"></i>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to checkout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </a>
                            
                        <?php }else{ ?>
                            
                                <span class="btn is--disabled is--primary button--checkout is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Proceed to checkout";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_tmp3, ENT_QUOTES, 'utf-8', true);?>
">
                                    <i class="icon--arrow-right"></i>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to checkout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </span>
                            
                        <?php }?>
                        
                            <a href="<?php echo 'http://localhost/shopware/checkout/cart';?>" class="btn button--open-basket is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Edit shopping cart";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_tmp4, ENT_QUOTES, 'utf-8', true);?>
">
                                <i class="icon--arrow-right"></i>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit shopping cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </a>
                        
                    
                
            </div>
        
    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:01
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Frontend\Bare\frontend\checkout\ajax_cart_item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5bbc9715f034f5_27380732')) {function content_5bbc9715f034f5_27380732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\XAMPP\\xampp\\htdocs\\shopware\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include 'C:\\XAMPP\\xampp\\htdocs\\shopware\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?>


<?php $_smarty_tpl->tpl_vars['IS_PRODUCT'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_VOUCHER'] = new Smarty_variable(2, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_REBATE'] = new Smarty_variable(3, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_SURCHARGE_DISCOUNT'] = new Smarty_variable(4, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['sConfigurator']){?>
    <?php ob_start();?><?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'detail', 'sArticle' => $_smarty_tpl->tpl_vars['sBasketItem']->value['articleID'], 'number' => $_smarty_tpl->tpl_vars['sBasketItem']->value['ordernumber'], ))); ?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['detailLink'] = new Smarty_variable($_tmp1, null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['detailLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['sBasketItem']->value['linkDetails'], null, 0);?>
<?php }?>

<div class="cart--item<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==1){?> is--premium-article<?php }?>">
    
    
        <div class="thumbnail--container<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['image']['thumbnails'][0]){?> has--image<?php }?>">

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PRODUCT']->value||$_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT']->value){?>
                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['basketItem']->value['articlename'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['thumbnails']){?>
                        <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>
                        <img srcset="<?php echo $_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['thumbnails'][0]['sourceSet'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,160);?>
" class="thumbnail--image" />

                    <?php }elseif($_smarty_tpl->tpl_vars['basketItem']->value['image']['src'][0]){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['basketItem']->value['image']['src'][0];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,160);?>
" class="thumbnail--image" />
                    <?php }?>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT']->value){?>
                    <span class="cart--badge">
                        <span class="badge--free"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For free!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                    </span>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_SURCHARGE_DISCOUNT']->value){?>
                    <div class="basket--badge">
                        <?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['price']>=0){?>
                            <i class="icon--arrow-right"></i>
                        <?php }else{ ?>
                            <i class="icon--percent2"></i>
                        <?php }?>
                    </div>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_VOUCHER']->value){?>
                    <div class="basket--badge">
                        <i class="icon--coupon"></i>
                    </div>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_REBATE']->value){?>
                    <div class="basket--badge">
                        <?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['price']>=0){?>
                            <i class="icon--arrow-right"></i>
                        <?php }else{ ?>
                            <i class="icon--percent2"></i>
                        <?php }?>
                    </div>
                <?php }?>
            
        </div>
    

    
    
        <div class="action--container">
            <?php ob_start();?><?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => "checkout", 'action' => "ajaxDeleteArticleCart", 'sDelete' => $_smarty_tpl->tpl_vars['basketItem']->value['id'], ))); ?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['deleteUrl'] = new Smarty_variable($_tmp2, null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==2){?>
                <?php ob_start();?><?php echo 'http://localhost/shopware/checkout/ajaxDeleteArticleCart/sDelete/voucher';?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['deleteUrl'] = new Smarty_variable($_tmp3, null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']!=4){?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
" method="post">
                    <button type="submit" class="btn is--small action--remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartRemoveArticle','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartRemoveArticle','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartRemoveArticle','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                        <i class="icon--cross"></i>
                    </button>
                </form>
            <?php }?>
        </div>
    

    
    
        <?php $_smarty_tpl->tpl_vars['useAnchor'] = new Smarty_variable(($_smarty_tpl->tpl_vars['basketItem']->value['modus']!=4&&$_smarty_tpl->tpl_vars['basketItem']->value['modus']!=2), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['useAnchor']->value){?>
            <a class="item--link" href="<?php echo $_smarty_tpl->tpl_vars['detailLink']->value;?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['basketItem']->value['articlename']);?>
">
        <?php }else{ ?>
            <div class="item--link">
        <?php }?>
            
                <span class="item--quantity"><?php echo $_smarty_tpl->tpl_vars['basketItem']->value['quantity'];?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartQuantityTimes','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartQuantityTimes','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
&times;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartQuantityTimes','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            
            
                <span class="item--name">
                    <?php if ($_smarty_tpl->tpl_vars['theme']->value['offcanvasCart']){?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['basketItem']->value['articlename']);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['basketItem']->value['articlename'],28,"...",true));?>

                    <?php }?>
                </span>
            
            
                <span class="item--price"><?php if ($_smarty_tpl->tpl_vars['basketItem']->value['amount']){?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['basketItem']->value['amount']);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For free!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'Star','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            
        <?php if ($_smarty_tpl->tpl_vars['useAnchor']->value){?>
            </a>
        <?php }else{ ?>
            </div>
        <?php }?>
    
</div>
<?php }} ?>