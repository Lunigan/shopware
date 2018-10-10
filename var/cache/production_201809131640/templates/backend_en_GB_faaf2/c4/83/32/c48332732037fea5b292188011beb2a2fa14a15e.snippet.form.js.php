<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\form.js" */ ?>
<?php /*%%SmartyHeaderCode:18007540825bbdaae20d10d8-50562069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48332732037fea5b292188011beb2a2fa14a15e' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\form.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18007540825bbdaae20d10d8-50562069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae20da3b1_08864781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae20da3b1_08864781')) {function content_5bbdaae20da3b1_08864781($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.snippet-main-form',
    autoScroll: true,
    monitorValid: true,
    layout: 'anchor',
    bodyPadding: 10,

    /**
     * Array containing the records
     *
     * @array
     */
    snippets: [],

    /**
     * Sets up the ui component
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.buttons = me.getButtons();
        me.items = me.getItems();

        me.callParent(arguments);
    },

    /**
     * Creates items shown in form panel
     *
     * @return array
     */
    getItems: function() {
        var me            = this,
            formItems     = [],
            namespaces    = [],
            fieldsetItems = [];

        Ext.each(me.snippets, function(record) {
            if (!Ext.Array.contains(namespaces, record.get('namespace'))) {
                namespaces.push(record.get('namespace'));
            }
        });

        Ext.each(namespaces, function(namespace) {
            fieldsetItems = [];

            Ext.each(me.snippets, function(record) {
                if (record.get('namespace') !== namespace) {
                    return;
                }

                fieldsetItems.push({
                    fieldLabel: record.get('name'),
                    supportText: record.get('defaultValue'),
                    name: record.internalId,
                    value: record.get('value')
                });
            });

            formItems.push({
                xtype: 'fieldset',
                title: namespace,
                defaultType: 'textarea',
                defaults: {
                    layout: 'anchor',
                    grow: true,
                    growMin: 0,
                    labelWidth: 200,
                    anchor: '100%'
                },
                items: fieldsetItems
            });
        });

        return formItems;
    },

    /**
     * Creates buttons shown in form panel
     *
     * @return array
     */
    getButtons: function() {
        return [{
            cls: 'primary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_save_form','default'=>'Save','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_save_form','default'=>'Save','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_save_form','default'=>'Save','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'save',
            formBind: true
        }];
    }
});
//
<?php }} ?>