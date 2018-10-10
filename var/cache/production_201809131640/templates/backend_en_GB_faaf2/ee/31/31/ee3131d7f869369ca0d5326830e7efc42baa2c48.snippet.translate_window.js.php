<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\translate_window.js" */ ?>
<?php /*%%SmartyHeaderCode:14353130245bbdaae2162396-28650246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee3131d7f869369ca0d5326830e7efc42baa2c48' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\translate_window.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14353130245bbdaae2162396-28650246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae2168095_14621957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae2168095_14621957')) {function content_5bbdaae2168095_14621957($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.TranslateWindow', {
    extend: 'Enlight.app.Window',
    alias: 'widget.snippet-main-translateWindow',

    layout: 'fit',
    width: 860,
    height: 600,

    /**
     * Root snippet (the one the user clicked)
     *
     * @object
     */
    rootSnippet: {},

    /**
     * Shop/locale store
     *
     * @object
     */
    shopLocaleStore: {},

    /**
     * Snippet store
     *
     * @object
     */
    snippetStore: {},

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        titleTranslateWindow: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title_translate_window','default'=>'Translate snippet','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title_translate_window','default'=>'Translate snippet','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Translate snippets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title_translate_window','default'=>'Translate snippet','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Sets up the ui component
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.title = me.snippets.titleTranslateWindow;

        me.translationForm = Ext.create('Shopware.apps.Snippet.view.main.TranslateForm', {
            rootSnippet: me.rootSnippet,
            snippetStore: me.snippetStore,
            shopLocaleStore: me.shopLocaleStore
        });
        me.items = [me.translationForm];

        me.callParent(arguments);
    }
});
//
<?php }} ?>