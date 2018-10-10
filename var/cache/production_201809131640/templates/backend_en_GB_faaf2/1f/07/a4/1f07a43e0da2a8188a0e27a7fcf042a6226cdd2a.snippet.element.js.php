<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 14:14:59
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\theme\model\element.js" */ ?>
<?php /*%%SmartyHeaderCode:9226559125bbc9bc30da554-64909237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f07a43e0da2a8188a0e27a7fcf042a6226cdd2a' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\theme\\model\\element.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9226559125bbc9bc30da554-64909237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9bc30e33e4_36728576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9bc30e33e4_36728576')) {function content_5bbc9bc30e33e4_36728576($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.Element', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'type', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'helpText', type: 'string', mapping: 'help' },
        { name: 'position', type: 'int' },
        { name: 'defaultValue', useNull: true },
        { name: 'selection', useNull: true },
        { name: 'fieldLabel', type: 'string', useNull: true },
        { name: 'supportText', type: 'string', useNull: true },
        { name: 'allowBlank', type: 'boolean', defaultValue: true },
        { name: 'attributes' },

        //no type definition for auto typing
        { name: 'tab' },

        //mapping fields which used only for the form field generation
        { name: 'value', mapping: 'defaultValue' },
        { name: 'xtype', type: 'string', mapping: 'type' },
        { name: 'elementId', type: 'int', mapping: 'id' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.ConfigValue',
            name: 'getConfigValues',
            associationKey: 'values'
        }
    ]
});


//
<?php }} ?>