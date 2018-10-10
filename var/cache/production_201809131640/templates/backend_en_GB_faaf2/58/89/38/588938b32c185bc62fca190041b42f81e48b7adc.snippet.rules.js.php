<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\controller\rules.js" */ ?>
<?php /*%%SmartyHeaderCode:825359455bbdaa61df9312-86533609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588938b32c185bc62fca190041b42f81e48b7adc' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\controller\\rules.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825359455bbdaa61df9312-86533609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61e1fa84_10996337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61e1fa84_10996337')) {function content_5bbdaa61e1fa84_10996337($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Backend - User Manager rule controller
 *
 * The user manager rule controller handles all action around the rules view (Add and Tree view).
 */
//
Ext.define('Shopware.apps.UserManager.controller.Rules', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Holder property which saves the instance of the application
     * window for later usage
     *
     * @null
     */
    appContent: null,

    refs: [
        { ref: 'rulesTree', selector: 'user-manager-rules-tree' },
        { ref: 'saveRolePrivilegesButton', selector: 'user-manager-rules-tree button[name=saveRolePrivileges]' }
    ],

    /**
     * Contains all snippets for this component
     * @object
     */
    snippets: {
        successTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'resource'/'delete_success_message','default'=>'Successful','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'delete_success_message','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'delete_success_message','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'privilege'/'save_error_title','default'=>'Error','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_error_title','default'=>'Error','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_error_title','default'=>'Error','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'privilege'/'save_error_message','default'=>'An error has occurred while saving:','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_error_message','default'=>'An error has occurred while saving:','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error has occurred while saving:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_error_message','default'=>'An error has occurred while saving:','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        resourceDelete: {
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'resource'/'delete_success_title','default'=>'Resource has been removed','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'delete_success_title','default'=>'Resource has been removed','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resource has been removed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'delete_success_title','default'=>'Resource has been removed','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        privilegeDelete: {
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'privilege'/'delete_success_title','default'=>'Privilege has been removed','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'delete_success_title','default'=>'Privilege has been removed','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Privilege has been removed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'delete_success_title','default'=>'Privilege has been removed','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        resourceSave: {
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'resource'/'save_success_title','default'=>'Resource has been saved','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'save_success_title','default'=>'Resource has been saved','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resource has been saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'resource'/'save_success_title','default'=>'Resource has been saved','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        privilegeSave: {
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'privilege'/'save_success_title','default'=>'Privilege has been saved','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_success_title','default'=>'Privilege has been saved','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Privilege has been saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'privilege'/'save_success_title','default'=>'Privilege has been saved','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        roleSave: {
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'role'/'save_success_title','default'=>'Role rules have been saved','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'role'/'save_success_title','default'=>'Role rules have been saved','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Role rules have been saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'role'/'save_success_title','default'=>'Role rules have been saved','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },

        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User management<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the subapplication
     *
     * @return void
     */
    init: function() {
        var me = this;
        me.control({
            'user-manager-rules-tree': {
                deleteResource: me.onDeleteResource,
                deletePrivilege: me.onDeletePrivilege,
                searchResource: me.onSearchResource,
                addResource: me.onAddResource,
                addPrivilege: me.onAddPrivilege,
                saveRolePrivileges: me.onSaveRolePrivileges,
                roleSelect: me.onRoleSelect
            },
            'user-manager-rule-add': {
                saveResource: me.onSaveResource,
                savePrivilege: me.onSavePrivilege
            }

       });
    },



    /**
     * Event will be fired when the user want to create a new privilege.
     *
     * @param [Ext.window.Window] - The add window
     * @param [Ext.form.Panel] - The form panel
     * @param [Ext.data.Model] - The new record
     * @param [Ext.data.Store] - The rules store
     */
    onSavePrivilege: function(window, form, record, store) {
        var me = this,
            rootNode = store.getRootNode();

        if (!form.getForm().isValid()) {
            return false;
        }

        // prevent the user from creating multiple privileges with the same
        // name under a certain node
        var node = store.getNodeById(record.get('resourceId')),
            found = false;
        rootNode.eachChild(function(ch) {
          if(ch.get('id') === record.get('resourceId')){
              if(ch.findChild('name', record.get('name')) !== null) {
                  Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privilege'/'alreadyExistingMessage','default'=>'A privilege with this name is already existing','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege'/'alreadyExistingMessage','default'=>'A privilege with this name is already existing','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A privilege with this name already exists.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege'/'alreadyExistingMessage','default'=>'A privilege with this name is already existing','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', me.snippets.growlMessage);
                  window.destroy();
                  found = true;
                  return false;
              }
          }
        });
        if(found == true) {
            return;
        }

        Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
            record.save({
                callback: function (data, operation) {
                    var records = operation.getRecords(),
                            record = records[0],
                            rawData = record.getProxy().getReader().rawData;

                    if (operation.success === true) {
                        Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.privilegeSave.successMessage, me.snippets.growlMessage);
                    } else {
                        Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, me.snippets.errorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                    }
                    window.destroy();
                    store.load();
                }
            });
        });
    },

    /**
     * Event will be fired when the user want to create a new resource.
     *
     * @param [Ext.window.Window] - The add window
     * @param [Ext.form.Panel] - The form panel
     * @param [Ext.data.Model] - The new record
     * @param [Ext.data.Store] - The rules store
     */
    onSaveResource: function(window, form, record, store) {
        var me = this,
            rootNode = store.getRootNode();

        if (!form.getForm().isValid()) {
            return false;
        }

        // Prevent the user from creating multiple resources with the same name
        if(rootNode.findChild('name', record.get('name')) !== null) {
            Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'resource'/'alreadyExistingMessage','default'=>'A resource with this name is already existing','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource'/'alreadyExistingMessage','default'=>'A resource with this name is already existing','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A resource with this name is already existing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource'/'alreadyExistingMessage','default'=>'A resource with this name is already existing','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', me.snippets.growlMessage);
            window.destroy();
            return;
        }

        Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
            record.save({
                callback: function (data, operation) {
                    var records = operation.getRecords(),
                            record = records[0],
                            rawData = record.getProxy().getReader().rawData;

                    if (operation.success === true) {
                        Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.resourceSave.successMessage, me.snippets.growlMessage);
                    } else {
                        Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, me.snippets.errorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                    }
                    window.destroy();
                    store.load();
                }
            });
        });
    },

    /**
     * Event will be fired when the user change the tree checkboxes and
     * clicks the "Assign the selected privileges to the role" button
     *
     * @param [Ext.data.Store] store - The component store.
     * @param [int|null] roleId - The combo box value
     * @param [array] checkedNodes - All checked tree nodes
     */
    onSaveRolePrivileges: function(store, roleId, checkedNodes) {
        var me = this;

        if (!roleId) {
            return false;
        }
        var roleStore = Ext.create('Shopware.apps.UserManager.store.Detail');

        Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
            roleStore.load({
                callback: function () {
                    var role = roleStore.getById(roleId),
                            privilegeStore = role['getPrivilegeStore'];

                    privilegeStore.removeAll();
                    Ext.each(checkedNodes, function (item, key) {
                        var rule = Ext.create('Shopware.apps.UserManager.model.Rules');
                        rule.set('roleId', roleId);
                        rule.set('resourceId', item.get('resourceId'));
                        if (item.get('type') === 'resource') {
                            rule.set('privilegeId', null);
                        } else {
                            rule.set('privilegeId', item.get('helperId'));
                        }
                        privilegeStore.add(rule);
                    });
                    role['getPrivilegeStore'] = privilegeStore;

                    role.save({
                        callback: function (data, operation) {
                            var records = operation.getRecords(),
                                    record = records[0],
                                    rawData = record.getProxy().getReader().rawData;

                            if (operation.success === true) {
                                Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.roleSave.successMessage, me.snippets.growlMessage);
                            } else {
                                Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, me.snippets.errorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                            }
                            store.load();
                        }
                    });
                }
            });
        });
    },

    /**
     * Event will be fired when the user select a role in the combo box
     * which is placed on top of the rules tree
     *
     * @param [Ext.data.Store] - The component store.
     * @param [int|null] - The combo box value
     */
    onRoleSelect: function(store, value) {
        var me = this;
        if (!store || !value) {
            return true;
        }
        store.getProxy().extraParams = {
            search: store.getProxy().extraParams.search,
            role: value
        };
        store.load();
        var saveButton = me.getSaveRolePrivilegesButton();
        saveButton.setDisabled(!value);
    },

    /**
     * Event listener method which is fired when the user clicks
     * the delete action column of the rules tree component of
     * a record with the property type "resource"
     *
     * @param [Ext.data.Model] record
     * @param [Ext.data.Store] store
     */
    onDeleteResource: function(resource, store) {
        var me = this,
            message;

        if (!resource) {
            return false;
        }
        var model = Ext.create('Shopware.apps.UserManager.model.Resource', { id: resource.get('helperId') });

        message = Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'resource/messageDeleteResource','default'=>'Are you sure you want to delete the resource [0]?','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource/messageDeleteResource','default'=>'Are you sure you want to delete the resource [0]?','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the resource [0]?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource/messageDeleteResource','default'=>'Are you sure you want to delete the resource [0]?','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', resource.get('name'));
        Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'resource/titleDeleteResource','default'=>'Delete resource','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource/titleDeleteResource','default'=>'Delete resource','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete resource<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'resource/titleDeleteResource','default'=>'Delete resource','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', message, function (response){
            if (response !== 'yes') {
                return false;
            }

            Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
                model.destroy({
                    callback: function (data, operation) {
                        var records = operation.getRecords(),
                                record = records[0],
                                rawData = record.getProxy().getReader().rawData;

                        if (operation.success === true) {
                            Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.resourceDelete.successMessage, me.snippets.growlMessage);
                        } else {
                            Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, me.snippets.errorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                        }
                        store.load();
                    }
                });
            });
        });


    },

    /**
     * Event listener method which is fired when the user clicks
     * the delete action column of the rules tree component of
     * a record with the property type "privilege"
     *
     * @param [Ext.data.Model] record
     * @param [Ext.data.Store] store
     */
    onDeletePrivilege: function(privilege, store) {
        var me = this,
            message;

        if (!privilege) {
            return false;
        }
        var model = Ext.create('Shopware.apps.UserManager.model.Privilege', { id: privilege.get('helperId') });

        message = Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privilege/messageDeletePrivilege','default'=>'Are you sure you want to delete the privilege [0]?','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege/messageDeletePrivilege','default'=>'Are you sure you want to delete the privilege [0]?','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the privilege [0]?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege/messageDeletePrivilege','default'=>'Are you sure you want to delete the privilege [0]?','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', privilege.get('name'));
        Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privilege/titleDeletePrivilege','default'=>'Delete Privilege','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege/titleDeletePrivilege','default'=>'Delete Privilege','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete privilege<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privilege/titleDeletePrivilege','default'=>'Delete Privilege','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', message, function (response){
            if (response !== 'yes') {
                return false;
            }

            Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
                model.destroy({
                    callback: function (data, operation) {
                        var records = operation.getRecords(),
                                record = records[0],
                                rawData = record.getProxy().getReader().rawData;

                        if (operation.success === true) {
                            Shopware.Notification.createGrowlMessage(me.snippets.privilegeDelete.successTitle, me.snippets.privilegeDelete.successMessage, me.snippets.growlMessage);
                        } else {
                            Shopware.Notification.createGrowlMessage(me.snippets.privilegeDelete.errorTitle, me.snippets.privilegeDelete.errorMessage + ' ' + rawData.message, me.snippets.growlMessage);
                        }
                        store.load();
                    }
                });
            });
        });
    },

    /**
     * Event will be fired when the user insert a value into the search text field which
     * is displayed on top of the rules tree.
     * @param [Ext.data.Store] store - The component store.
     * @param [Ext.String] value - The search value which inserted in the search text field.
     * @return boolean
     */
    onSearchResource: function(store, value) {
        var me = this,
            searchString = Ext.String.trim(value);

        //scroll the store to first page
        store.currentPage = 1;

        //If the search-value is empty, reset the filter
        if ( searchString.length === 0 ) {
            store.getProxy().extraParams = {
                role: store.getProxy().extraParams.role
            };
        } else {
            store.getProxy().extraParams = {
                search: searchString,
                role: store.getProxy().extraParams.role
            };
        }
        store.load();
        return true;
    },

    /**
     * Event will be fired when the user clicks on the "add resource button"
     *
     * @param [Ext.data.Store] - The component store.
     */
    onAddPrivilege: function(store, resourceId) {
        var record = Ext.create('Shopware.apps.UserManager.model.Privilege', {
            resourceId: resourceId
        });

        Ext.create('Shopware.apps.UserManager.view.rules.Add', {
            record: record,
            ruleStore: store
        }).show();
    },


    /**
     * Event will be fired when the user clicks on the "add privilege button"
     *
     * @param [Ext.data.Store] - The component store.
     */
    onAddResource: function(store) {
        var record = Ext.create('Shopware.apps.UserManager.model.Resource');

        Ext.create('Shopware.apps.UserManager.view.rules.Add', {
            record: record,
            ruleStore: store
        }).show();
    }


});
//
<?php }} ?>