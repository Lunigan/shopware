<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\roles.js" */ ?>
<?php /*%%SmartyHeaderCode:13357117375bbdaa619aae25-00909425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f52218009825ab8621916ea94b738708b28b9086' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\roles.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13357117375bbdaa619aae25-00909425',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa619b9615_82212247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa619b9615_82212247')) {function content_5bbdaa619b9615_82212247($_smarty_tpl) {?>/**
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
 * Shopware Backend - Auth Main Model
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.model.Roles', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'id', 'parentId', 'name', 'description', 'source', { name: 'enabled', type: 'bool' }, { name: 'admin', type: 'bool' }],
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/shopware/backend/UserManager/getRoles';?>',
            create: '<?php echo '/shopware/backend/UserManager/updateRole';?>',
            update: '<?php echo '/shopware/backend/UserManager/updateRole';?>',
            destroy: '<?php echo '/shopware/backend/UserManager/deleteRole';?>'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>