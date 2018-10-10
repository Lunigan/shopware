<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\app.js" */ ?>
<?php /*%%SmartyHeaderCode:1122104685bbdaa61280dd6-18098145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda09ed5b8cf678e2e91a177af70ba5556fe9f6f' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\app.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122104685bbdaa61280dd6-18098145',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa612b79e5_58699305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa612b79e5_58699305')) {function content_5bbdaa612b79e5_58699305($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - User Manager Bootstrapper
 *
 * This file bootstrapps the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.UserManager', {

    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend: 'Enlight.app.SubApplication',

    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    loadPath:'<?php echo '/shopware/backend/UserManager/load';?>',

    /**
     * Enables our bulk loading technique.
     * @booelan
     */
    bulkLoad: true,

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name: 'Shopware.apps.UserManager',

    /**
     * Required controllers for module (subapplication)
     * @array
     */
    controllers: [ 'User', 'Main', 'Roles', 'Rules' ],

    stores: [ 'User', 'UserDetail', 'Detail', 'Roles', 'Locale', 'Rules' ],

    views: [ 'main.Window', 'main.Navigation', 'user.List', 'user.Create', 'roles.List', 'rules.Tree', 'rules.Add' ],

    models: [ 'User', 'UserDetail', 'Roles', 'Detail', 'Privilege', 'Resource', 'Locale', 'Rules' ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return mainController.mainWindow;
    }
});
//
<?php }} ?>