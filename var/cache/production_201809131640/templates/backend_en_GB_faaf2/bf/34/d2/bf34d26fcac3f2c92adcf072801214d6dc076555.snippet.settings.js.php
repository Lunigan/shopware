<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 14:14:59
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\theme\controller\settings.js" */ ?>
<?php /*%%SmartyHeaderCode:4417876945bbc9bc34f2f01-17002028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf34d26fcac3f2c92adcf072801214d6dc076555' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\theme\\controller\\settings.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4417876945bbc9bc34f2f01-17002028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9bc34f6059_52001231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9bc34f6059_52001231')) {function content_5bbc9bc34f6059_52001231($_smarty_tpl) {?>/**
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
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.controller.Settings', {
    extend: 'Enlight.app.Controller',

    refs: [
        { ref: 'listingWindow', selector: 'theme-list-window' }
    ],

    init: function () {
        var me = this;

        me.control({
            'theme-list-window': {
                'open-settings': me.openSettings
            }
        });

        Shopware.app.Application.on('settings-save-successfully', function(controller, result, window, record) {
            window.destroy();
        });

        me.callParent(arguments);
    },

    openSettings: function() {
        var me = this;

        Ext.create('Shopware.apps.Theme.model.Settings').reload({
            callback: function(record) {
                me.settingsWindow = me.getView('settings.Window').create({
                    record: record
                }).show();
            }
        });
    }
});

//
<?php }} ?>