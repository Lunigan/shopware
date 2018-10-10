<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\user.js" */ ?>
<?php /*%%SmartyHeaderCode:12776272175bbdaa6195d446-19423210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9b7bcb822be6b5f0811d0018c2b963632daab2' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\user.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12776272175bbdaa6195d446-19423210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61971c94_39579372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61971c94_39579372')) {function content_5bbdaa61971c94_39579372($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UserManager - User listing model
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.model.User', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'id', 'username', 'groupname', 'name', 'email', 'active', 'admin', 'failedlogins', { name: 'lastLogin', type: 'date'} ],
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/shopware/backend/UserManager/getUsers';?>',
            create: '<?php echo '/shopware/backend/UserManager/createUser';?>',
            update: '<?php echo '/shopware/backend/UserManager/updateUser';?>',
            destroy: '<?php echo '/shopware/backend/UserManager/deleteUser';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    },
    validations: [
        { field: 'username', type: 'length', min: 6 },
        { field: 'password', type: 'length', min: 6 },
        { field: 'name', type: 'length', min: 6 }
    ]
});
//
<?php }} ?>