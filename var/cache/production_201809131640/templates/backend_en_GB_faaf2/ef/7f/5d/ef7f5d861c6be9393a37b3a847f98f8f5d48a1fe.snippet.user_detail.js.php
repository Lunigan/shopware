<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\user_detail.js" */ ?>
<?php /*%%SmartyHeaderCode:13234322095bbdaa61986a41-52330123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7f5d861c6be9393a37b3a847f98f8f5d48a1fe' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\user_detail.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13234322095bbdaa61986a41-52330123',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61994785_19654717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61994785_19654717')) {function content_5bbdaa61994785_19654717($_smarty_tpl) {?>/**
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
 * Shopware User-Manager - User details model
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.model.UserDetail', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'id',
        'username',
        'localeId',
        'roleId',
        'lastlogin',
        'name',
        'email',
        'active',
        'apiKey',
        'failedlogins',
        'password',
        { name: 'extendedEditor', type: 'boolean'},
        { name: 'disabledCache', type: 'boolean'}
    ],
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/shopware/backend/UserManager/getUserDetails';?>',
            create: '<?php echo '/shopware/backend/UserManager/updateUser';?>',
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