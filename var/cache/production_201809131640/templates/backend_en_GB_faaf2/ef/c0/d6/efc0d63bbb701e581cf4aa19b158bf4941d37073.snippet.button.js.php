<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:10
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\component\element\button.js" */ ?>
<?php /*%%SmartyHeaderCode:793314515bbc971e4c6135-79548703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efc0d63bbb701e581cf4aa19b158bf4941d37073' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\component\\element\\button.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '793314515bbc971e4c6135-79548703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971e4c9200_02486527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971e4c9200_02486527')) {function content_5bbc971e4c9200_02486527($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Button', {
    extend: 'Ext.button.Button',
    alias: [
        'widget.base-element-button',
        'widget.base-element-controllerbutton'
    ],
    initComponent:function () {
        var me = this;

        // Add support of open action button
        if (me.controller) {
            me.handler = function() {
                window.openAction(me.controller);
            }
        // Add support of own button handler
        } else if (typeof(me.handler) == 'string' && me.handler.indexOf('function') !== -1) {
            eval('me.handler =' + me.handler + ';');
        }

        me.disabled = false;

        // Move field label to button text
        if(me.fieldLabel) {
            me.text = me.fieldLabel;
            delete me.fieldLabel;
        }

        me.callParent(arguments);
    }
});
<?php }} ?>