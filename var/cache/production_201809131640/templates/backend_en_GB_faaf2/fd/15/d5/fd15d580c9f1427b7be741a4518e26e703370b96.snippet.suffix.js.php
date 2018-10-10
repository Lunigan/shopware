<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 14:14:59
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\theme\view\detail\fields\suffix.js" */ ?>
<?php /*%%SmartyHeaderCode:8417545695bbc9bc32e9550-42560860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd15d580c9f1427b7be741a4518e26e703370b96' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\fields\\suffix.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8417545695bbc9bc32e9550-42560860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9bc32ebe97_81955217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9bc32ebe97_81955217')) {function content_5bbc9bc32ebe97_81955217($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.fields.Suffix', {
    extend: 'Ext.form.field.Text',

    alias: 'widget.theme-suffix-field',

    suffix: Ext.undefined,
    fallbackValue: Ext.undefined,
    elementStyle: Ext.undefined,

    initComponent: function() {
        var me = this;

        me.on('blur', function() {
            me.valueChanged(me.getValue())
        });

        if (me.elementStyle !== Ext.undefined) {
            me.setFieldStyle(me.elementStyle);
        }

        return me.callParent(arguments);
    },

    valueChanged: function(value) {
        var me = this;

        value = Ext.String.trim(value) + '';

        if (value.length === 0 && me.fallbackValue !== Ext.undefined) {
            value = me.fallbackValue;
        }

        if (value.length > 0
                && me.suffix !== Ext.undefined
                && value.indexOf(me.suffix) == -1) {

            value = value + me.suffix;
        }

        this.setValue(value);
    }
});

//

<?php }} ?>