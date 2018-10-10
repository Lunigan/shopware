<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\edit_form.js" */ ?>
<?php /*%%SmartyHeaderCode:17764640435bbdaae21461e7-74903741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '477eb359aa4d8a971f0023a15c27731554237598' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\edit_form.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17764640435bbdaae21461e7-74903741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae214bf93_84817867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae214bf93_84817867')) {function content_5bbdaae214bf93_84817867($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.EditForm', {
    extend: 'Enlight.app.Window',
    alias: 'widget.snippet-main-editForm',

    layout: 'fit',
    width: 860,
    height: 600,

    /**
     * Array containing the records
     *
     * @array
     */
    selectedSnippets: [],

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        titleEditWindow: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title_edit_window','default'=>'Edit Snippets','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title_edit_window','default'=>'Edit Snippets','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit snippets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title_edit_window','default'=>'Edit Snippets','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Sets up the ui component
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.title = me.snippets.titleEditWindow;

        me.items = [{
            xtype: 'snippet-main-form',
            snippets: me.selectedSnippets
        }];

        me.callParent(arguments);
    }
});
//
<?php }} ?>