<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:11
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\model\custom_facet.js" */ ?>
<?php /*%%SmartyHeaderCode:16356254475bbc971f0d1199-66906300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a7847ccf81e2b18c4f6d439c013ee44c077787' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\model\\custom_facet.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16356254475bbc971f0d1199-66906300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971f0d4bb8_10495894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971f0d4bb8_10495894')) {function content_5bbc971f0d4bb8_10495894($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Base.model.CustomFacet', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'CustomFacet'
        };
    },

    fields: [
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'displayInCategories', type: 'boolean' },
        { name: 'deletable', type: 'boolean', defaultValue: true },
        { name: 'position', type: 'int' },
        { name: 'facet', type: 'string' }
    ]
});

//
<?php }} ?>