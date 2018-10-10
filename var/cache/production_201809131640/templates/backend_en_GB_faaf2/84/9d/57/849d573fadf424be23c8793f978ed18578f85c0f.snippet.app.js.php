<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 14:14:58
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\theme\app.js" */ ?>
<?php /*%%SmartyHeaderCode:7903686745bbc9bc28a38a6-74527579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849d573fadf424be23c8793f978ed18578f85c0f' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\theme\\app.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7903686745bbc9bc28a38a6-74527579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9bc28ce4e9_23836081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9bc28ce4e9_23836081')) {function content_5bbc9bc28ce4e9_23836081($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.Theme',

    loadPath: '<?php echo '/shopware/backend/Theme/load';?>',
    bulkLoad: true,

    controllers: [ 'List', 'Detail', 'Settings' ],

    views: [
        'list.Window',
        'list.Theme',
        'list.extensions.Info',

        'detail.Theme',
        'detail.Window',

        'create.Window',

        'config_sets.Window',

        'detail.containers.Tab',
        'detail.containers.TabPanel',
        'detail.containers.FieldSet',

        'detail.fields.Suffix',
        'detail.fields.PixelField',
        'detail.fields.CheckboxField',
        'detail.fields.ColorPicker',
        'detail.fields.DateField',
        'detail.fields.EmField',
        'detail.fields.MediaSelection',
        'detail.fields.PercentField',
        'detail.fields.TextAreaField',
        'detail.fields.TextField',
        'detail.fields.SelectField',

        'settings.Window',
        'settings.Settings'
    ],

    models: [ 'Theme', 'Element', 'ConfigValue', 'Layout', 'ConfigSet', 'Settings' ],
    stores: [ 'Theme', 'ConfigSets' ],

    launch: function() {
        return this.getController('List').mainWindow;
    }
});

//
<?php }} ?>