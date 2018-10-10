<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\window.js" */ ?>
<?php /*%%SmartyHeaderCode:8540996985bbdaae201daa1-61961066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0091d67f578585243a01d8b2e09764b6b2b84862' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\window.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8540996985bbdaae201daa1-61961066',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae2042056_29467046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae2042056_29467046')) {function content_5bbdaae2042056_29467046($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.Window', {
    extend: 'Enlight.app.Window',
    alias: 'widget.snippet-main-window',

    layout: 'border',
    width: 980,
    height: '90%',
    stateful: true,
    stateId: 'shopware-snippet-main-window',

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        title:                  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Snippet administration','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Snippet administration','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippet administration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Snippet administration','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonInstallLanguage:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_install_language','default'=>'Install new Language','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_install_language','default'=>'Install new Language','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Install new Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_install_language','default'=>'Install new Language','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonRemoveLanguage:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_remove_language','default'=>'Remove Language','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_remove_language','default'=>'Remove Language','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_remove_language','default'=>'Remove Language','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonLanguages:        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_languages','default'=>'Languages','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_languages','default'=>'Languages','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Languages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_languages','default'=>'Languages','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonImportExport:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_import_export','default'=>'Import / Export','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_import_export','default'=>'Import / Export','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import / export<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_import_export','default'=>'Import / Export','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonExpert:           '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_expert','default'=>'Expert-Mode','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_expert','default'=>'Expert-Mode','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expert mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_expert','default'=>'Expert-Mode','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Initializes the component and builds up the main interface
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.title = me.snippets.title;

        me.items = [{
            xtype: 'snippet-main-navigation',
            region: 'west',
            width: 180,
            store: me.nSpaceStore
        }, {
            xtype: 'snippet-main-snippetPanel',
            region: 'center',
            nSpaceStore: me.nSpaceStore,
            snippetStore: me.snippetStore,
            shoplocaleStore: me.shoplocaleStore
        }];

        me.tbar = me.getToolbar();

        me.callParent(arguments);
    },

    /**
     * Creates the toolbar.
     *
     * @return [object] generated Ext.toolbar.Toolbar
     */
    getToolbar: function() {
        var me      = this,
            buttons = [];

        buttons.push({
            xtype: 'button',
            text: me.snippets.buttonImportExport,
            action: 'export',
            iconCls: 'sprite-arrow-circle-double-135'
        });

        buttons.push({
            xtype: 'tbseparator'
        });

        buttons.push({
            xtype: 'button',
            iconCls: 'sprite-construction',
            text: me.snippets.buttonExpert,
            action: 'expert',
            enableToggle: true
        });

        return {
            xtype: 'toolbar',
            ui: 'shopware-ui',
            items: buttons
        };
    }
});
//
<?php }} ?>