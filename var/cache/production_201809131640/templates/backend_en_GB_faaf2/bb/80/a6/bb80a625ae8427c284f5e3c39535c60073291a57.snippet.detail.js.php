<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\detail.js" */ ?>
<?php /*%%SmartyHeaderCode:20283325115bbdaa619d0d54-98141078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb80a625ae8427c284f5e3c39535c60073291a57' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\detail.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20283325115bbdaa619d0d54-98141078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa619de3a2_33784628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa619de3a2_33784628')) {function content_5bbdaa619de3a2_33784628($_smarty_tpl) {?>/**
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
 * Shopware Backend - User Manager Detail model
 *
 * The detail model is used to load a role with all assigned privileges. The model
 * is only used to assign the selected tree nodes of the user_manager/view/rules/tree.js component
 * to the selected role.
 */
//
Ext.define('Shopware.apps.UserManager.model.Detail', {
    /**
     * Define that the detail model is an extension of the Ext.data.Model
     */
    extend: 'Ext.data.Model',

    /**
     * The field property contains all model fields.
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'parentId', type: 'int' },
        { name: 'admin', type: 'int' },
        { name: 'enabled', type: 'int' },
        { name: 'source', type: 'string' }
    ],

    /**
    * Configure the data communication
    * @object
    */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        /**
         * Specific urls to call on CRUD action methods "create", "read", "update" and "destroy".
         * @object
         */
        api: {
            read: '<?php echo '/shopware/backend/UserManager/getRolesDetails';?>',
            create: '<?php echo '/shopware/backend/UserManager/updateRolePrivileges';?>',
            update: '<?php echo '/shopware/backend/UserManager/updateRolePrivileges';?>'
        },

        /**
         * The Ext.data.reader.Reader to use to decode the server's
         * response or data read from client. This can either be a Reader instance,
         * a config object or just a valid Reader type name (e.g. 'json', 'xml').
         * @object
         */
        reader: {
            type: 'json',
            root: 'data'
        }
    },

    /**
     * Define the associations of the detail model.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.UserManager.model.Privilege',  name:'getPrivilege', associationKey:'privileges' }
    ]
});
//
<?php }} ?>