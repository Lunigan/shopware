<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\store\snippet.js" */ ?>
<?php /*%%SmartyHeaderCode:392458875bbdaae21b1165-58091691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f029d279442d14e14cb411d66c1c5c05ef3dfec' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\store\\snippet.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392458875bbdaae21b1165-58091691',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae21bdc24_82099028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae21bdc24_82099028')) {function content_5bbdaae21bdc24_82099028($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Snippet.store.Snippet', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model : 'Shopware.apps.Snippet.model.Snippet',
    pageSize: 30,
    remoteFilter: true,
    remoteSort: true,

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read: '<?php echo '/shopware/backend/snippet/getSnippets';?>',
            create: '<?php echo '/shopware/backend/snippet/createSnippet';?>',
            update: '<?php echo '/shopware/backend/snippet/updateSnippet/targetField/snippets';?>',
            destroy: '<?php echo '/shopware/backend/snippet/removeSnippet';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>