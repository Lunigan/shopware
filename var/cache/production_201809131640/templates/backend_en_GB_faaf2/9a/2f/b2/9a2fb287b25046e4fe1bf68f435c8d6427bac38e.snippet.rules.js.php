<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\store\rules.js" */ ?>
<?php /*%%SmartyHeaderCode:13418184485bbdaa61cd5717-44895314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2fb287b25046e4fe1bf68f435c8d6427bac38e' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\store\\rules.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13418184485bbdaa61cd5717-44895314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61cf6ec6_08179795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61cf6ec6_08179795')) {function content_5bbdaa61cf6ec6_08179795($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.UserManager.store.Rules', {
    extend: 'Ext.data.TreeStore',
    autoLoad: true,
    /**
     * Enable remote filtering
     * @boolean
     */
    remoteFilter:true,
    model : 'Shopware.apps.UserManager.model.Rules'
});
//

<?php }} ?>