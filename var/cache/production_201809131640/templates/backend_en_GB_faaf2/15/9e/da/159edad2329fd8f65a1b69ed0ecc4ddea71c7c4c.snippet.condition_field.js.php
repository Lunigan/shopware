<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:15
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\customer\view\customer_stream\condition_field.js" */ ?>
<?php /*%%SmartyHeaderCode:10787306465bbc97239cb1d0-21983845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159edad2329fd8f65a1b69ed0ecc4ddea71c7c4c' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\customer\\view\\customer_stream\\condition_field.js',
      1 => 1537260001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10787306465bbc97239cb1d0-21983845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc97239ce965_51050788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc97239ce965_51050788')) {function content_5bbc97239ce965_51050788($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.ConditionField', {
    extend: 'Ext.form.FieldContainer',
    cls: 'customer-stream-condition-field',
    layout: { type: 'vbox', align: 'stretch' },
    mixins: {
        formField: 'Ext.form.field.Base'
    },

    getValue: function() {
        var me = this,
            values = { };

        Ext.each(me.items.items, function(item) {
            if (Ext.isFunction(item.getValue)) {
                values[item.name] = item.getValue();
            }
        });
        return values;
    },

    setValue: function(values) {
        var me = this;

        Ext.each(me.items.items, function(field) {
            if (values.hasOwnProperty(field.name)) {
                field.setValue(values[field.name]);
            }
        });
    },

    getSubmitData: function() {
        var value = { };
        value[this.name] = this.getValue();
        return value;
    }
});
// 
<?php }} ?>