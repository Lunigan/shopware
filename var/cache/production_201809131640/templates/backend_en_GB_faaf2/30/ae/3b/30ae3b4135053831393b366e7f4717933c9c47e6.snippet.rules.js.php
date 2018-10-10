<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\model\rules.js" */ ?>
<?php /*%%SmartyHeaderCode:1641485525bbdaa61a6c090-11934174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ae3b4135053831393b366e7f4717933c9c47e6' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\model\\rules.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1641485525bbdaa61a6c090-11934174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61a73835_47068391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61a73835_47068391')) {function content_5bbdaa61a73835_47068391($_smarty_tpl) {?>/**
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
 * Shopware Backend - User Manager Rules Model
 *
 * The user manager rules model is used for the tree component which is defined in "user_manager/view/rules/tree.js".
 * It can contains the data of a single resource or the data of a single privilege.
 */
//
Ext.define('Shopware.apps.UserManager.model.Rules', {
   extend: 'Ext.data.Model',
   fields: [
       //
      /**
       * unique id. If the model is a resource (type=resource) the id is equals to the resource id.
       * If the model is a privilege (type=privilege) the unique id is concat with resourceID_privilegeID
       */
       { name: 'id',     type: 'int'},

      /**
       * Internal helper id which contains the id of the doctrine model
       */
       { name: 'helperId',     type: 'int'},
       { name: 'name',     type: 'string'},

       /**
        * Internal helper property to differentiate between a privilege and resource model
        */
       { name: 'type',     type: 'string'},
       { name: 'pluginID',     type: 'string'},

       /**
        * The following fields are helper fields to assign the resources a
        */
       { name: 'resourceId',     type: 'int'},
       { name: 'privilegeId',     type: 'int'},
       { name: 'roleId',     type: 'int'}
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
        url: '<?php echo '/shopware/backend/UserManager/getResources';?>',

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