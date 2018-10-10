<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:45
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\model\snippet.js" */ ?>
<?php /*%%SmartyHeaderCode:16579405255bbdaae1f22463-26429831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88aace4ca3e841aadb6b5c140d1056675f98ffb6' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\model\\snippet.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16579405255bbdaae1f22463-26429831',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae1f27a13_78299675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae1f27a13_78299675')) {function content_5bbdaae1f27a13_78299675($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.model.Snippet', {

    /**
     * Extends the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     *
     * @array
     */
    fields : [
        //
        { name: 'namespace', type: 'string' },
        { name: 'value',     type: 'string' },
        { name: 'defaultValue', type: 'string' },
        { name: 'name',      type: 'string' },
        { name: 'shopId',    type: 'int' },
        { name: 'localeId',  type: 'int' }
    ]
});
//
<?php }} ?>