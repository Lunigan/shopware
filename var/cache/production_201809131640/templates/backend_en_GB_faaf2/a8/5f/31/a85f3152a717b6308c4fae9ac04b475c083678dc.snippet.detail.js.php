<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\store\detail.js" */ ?>
<?php /*%%SmartyHeaderCode:4047442805bbdaa61c7a941-09216579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a85f3152a717b6308c4fae9ac04b475c083678dc' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\store\\detail.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4047442805bbdaa61c7a941-09216579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61c7e455_31258340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61c7e455_31258340')) {function content_5bbdaa61c7e455_31258340($_smarty_tpl) {?>/**
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
 * @package    UserManager
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Backend - User Manager Detail model
 *
 * The detail model is used to load a role with all assigned privileges. The model
 * is only used to assign the selected tree nodes of the user_manager/view/rules/tree.js component
 * to the selected role.
 */
//
Ext.define('Shopware.apps.UserManager.store.Detail', {
    /**
     * Define that the detail store is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',
    /**
     * Defines which model the store used.
     */
    model : 'Shopware.apps.UserManager.model.Detail'
});
//
<?php }} ?>