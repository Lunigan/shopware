<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:15
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\article\model\link.js" */ ?>
<?php /*%%SmartyHeaderCode:14506171505bbc9723504b78-77791142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2752203d2842c78fd5a795a1be4c9bc13da6810' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\article\\model\\link.js',
      1 => 1537259994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14506171505bbc9723504b78-77791142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9723508883_50760289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9723508883_50760289')) {function content_5bbc9723508883_50760289($_smarty_tpl) {?>/**
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
 *
 * Shopware Model - Article backend module.
 *
 * @link http://www.shopware.de/
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
Ext.define('Shopware.apps.Article.model.Link', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    belongsTo: 'Shopware.apps.Article.model.Article',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'link', type: 'string' },
        { name: 'target', type: 'boolean', defaultValue: true }
    ]

});
//
<?php }} ?>