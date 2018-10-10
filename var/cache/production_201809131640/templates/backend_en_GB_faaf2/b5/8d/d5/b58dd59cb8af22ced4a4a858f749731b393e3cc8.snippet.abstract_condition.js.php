<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:15
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\product_stream\view\condition_list\condition\abstract_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:7792618405bbc9723747db9-93207517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58dd59cb8af22ced4a4a858f749731b393e3cc8' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\condition_list\\condition\\abstract_condition.js',
      1 => 1537260006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7792618405bbc9723747db9-93207517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc972374a678_36139841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc972374a678_36139841')) {function content_5bbc972374a678_36139841($_smarty_tpl) {?>/**
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
 * @category   Shopware
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.AbstractCondition', {
    alternateClassName: 'ProductStream.filter.AbstractCondition',

    getLabel: function() {
        throw 'Unimplemented method.';
    },

    isSingleton: function() {
        throw 'Unimplemented method.';
    },

    create: function(callback, container, conditions) {
        throw 'Unimplemented method.';
    },

    load: function(key, value, container) {
        throw 'Unimplemented method.';
    }
});
//<?php }} ?>