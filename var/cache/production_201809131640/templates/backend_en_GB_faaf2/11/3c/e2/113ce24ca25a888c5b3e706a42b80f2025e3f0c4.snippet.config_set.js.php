<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 14:14:59
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\theme\model\config_set.js" */ ?>
<?php /*%%SmartyHeaderCode:8283559035bbc9bc312ed94-71710239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113ce24ca25a888c5b3e706a42b80f2025e3f0c4' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\theme\\model\\config_set.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8283559035bbc9bc312ed94-71710239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc9bc3134989_90744698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc9bc3134989_90744698')) {function content_5bbc9bc3134989_90744698($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.ConfigSet', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'templateId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'values' }
    ]
});

//
<?php }} ?>