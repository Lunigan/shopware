<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\privilege.js" */ ?>
<?php /*%%SmartyHeaderCode:12359181715bbdaa619f5434-18797390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8539afb3ff9df03e2c34b357d14d97ad956d2dd' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\privilege.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12359181715bbdaa619f5434-18797390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa619fde13_53517151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa619fde13_53517151')) {function content_5bbdaa619fde13_53517151($_smarty_tpl) {?>/**
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
 * Shopware Backend - User Manager Privilege Model
 *
 * The user manager privilege model represents a row the s_core_acl_privileges.
 * It is used to create or delete a single resource privilege.
 */
//
Ext.define('Shopware.apps.UserManager.model.Privilege', {

    /**
     * Define that the privilege model is an extension of the Ext.data.Model
     */
    extend: 'Ext.data.Model',

    /**
     * The field property contains all model fields.
     * @array
     */
    fields: [
        //
        { name: 'id',     type: 'int'},
        { name: 'name',     type: 'string'},
        { name: 'resourceId',     type: 'int'}
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
            create: '<?php echo '/shopware/backend/UserManager/savePrivilege';?>',
            destroy: '<?php echo '/shopware/backend/UserManager/deletePrivilege';?>'
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
    }
});
//

<?php }} ?>