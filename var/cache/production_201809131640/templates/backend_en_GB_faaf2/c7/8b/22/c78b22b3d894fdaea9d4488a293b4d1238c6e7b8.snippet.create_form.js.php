<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\create_form.js" */ ?>
<?php /*%%SmartyHeaderCode:11407624665bbdaae211f026-68517056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78b22b3d894fdaea9d4488a293b4d1238c6e7b8' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\create_form.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11407624665bbdaae211f026-68517056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae212fa77_84670999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae212fa77_84670999')) {function content_5bbdaae212fa77_84670999($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

//

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Snippet.view.main.CreateForm', {

    extend: 'Enlight.app.Window',
    alias: 'widget.snippet-main-createForm',

    layout: 'fit',
    width: 460,

    minimizable: false,
    maximizable: false,

    border:false,
    height: 280,

    defaultLocaleId: null,
    defaultShopId: null,
    defaultNamespace: '',

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        titleCreateWindow: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'create','default'=>'Create new snippet','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'create','default'=>'Create new snippet','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'create','default'=>'Create new snippet','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonSave:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_save','default'=>'Save','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_save','default'=>'Save','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_save','default'=>'Save','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        labelLocale:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'label_locale','default'=>'Locale','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_locale','default'=>'Locale','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Locale<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_locale','default'=>'Locale','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        labelShop:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'label_shop','default'=>'Shop','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_shop','default'=>'Shop','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_shop','default'=>'Shop','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        labelNamespace: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'label_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Namespace<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        labelName:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'label_name','default'=>'Name','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_name','default'=>'Name','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_name','default'=>'Name','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        labelValue:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'label_value','default'=>'Value','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_value','default'=>'Value','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'label_value','default'=>'Value','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Sets up the ui component
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.title = me.snippets.titleCreateWindow;

        me.form = Ext.create('Ext.form.Panel', {
            monitorValid: true,
            bodyPadding: 10,

            defaultType: 'textfield',
            defaults: {
                labelWidth: 120,
                anchor: '100%'
            },

            bbar: me.getToolbar()
        });

        me.form.add(me.getItems());

        me.items = [ me.form ];

        me.callParent(arguments);
    },

    getToolbar: function() {
        var me = this;

        return Ext.create('Ext.toolbar.Toolbar', {
            items: [{
                text: me.snippets.buttonSave,
                action: 'save',
                cls:'primary',
                formBind: true
            }]
        });
    },

    /**
     * Creates items shown in form panel
     *
     * @return array
     */
    getItems: function() {
        var me        = this,
            formItems = [];

        var localeStore =  Ext.create('Shopware.store.Locales').load({
            callback: function() {
                if (me.defaultShopId) {
                    me.form.getForm().findField('localeId').setValue(me.defaultLocaleId);
                } else {
                    me.form.getForm().findField('localeId').setValue(this.getAt('0').get('id'));
                }
            }
        });

        var shopStore =  Ext.create('Shopware.store.Shop').load({
            callback: function() {

                if (me.defaultShopId) {
                    me.form.getForm().findField('shopId').setValue(me.defaultShopId);
                } else {
                    me.form.getForm().findField('shopId').setValue(this.getAt('0').get('id'));
                }
            }
        });

        formItems.push({
            xtype: 'combobox',
            name: 'localeId',
            fieldLabel:  me.snippets.labelLocale,
            store: localeStore,
            valueField: 'id',
            displayField: 'locale',
            queryMode: 'local',
            required: true,
            editable: false,
            allowBlank: false
        });

        formItems.push({
            xtype:'combobox',
            name:'shopId',
            fieldLabel: me.snippets.labelShop,
            store: shopStore,
            valueField:'id',
            displayField:'name',
            queryMode: 'local',
            required: true,
            editable: false,
            allowBlank: false
        });

        formItems.push({
            fieldLabel: me.snippets.labelNamespace,
            name: 'namespace',
            value: me.defaultNamespace,
            allowBlank: false
        });

        formItems.push({
            fieldLabel: me.snippets.labelName,
            name: 'name',
            allowBlank: false
        });

        formItems.push({
            xtype: 'textarea',
            fieldLabel: me.snippets.labelValue,
            grow: true,
            growMin: 0,
            name: 'value'
        });

        return formItems;
    }
});
//
<?php }} ?>