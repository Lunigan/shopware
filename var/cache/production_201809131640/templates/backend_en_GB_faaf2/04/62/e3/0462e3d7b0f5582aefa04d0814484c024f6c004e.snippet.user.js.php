<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\controller\user.js" */ ?>
<?php /*%%SmartyHeaderCode:19971045345bbdaa61d15940-97952897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0462e3d7b0f5582aefa04d0814484c024f6c004e' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\controller\\user.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19971045345bbdaa61d15940-97952897',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61d90549_21782366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61d90549_21782366')) {function content_5bbdaa61d90549_21782366($_smarty_tpl) {?>/**
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
 * Shopware - User-Manager user detail mask
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.controller.User', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Enlight.app.Controller',

    /**
     * Holder property which saves the instance of the application
     * window for later usage
     *
     * @null
     */
    appContent: null,

    /**
     * Contains all snippets for the controller
     * @object
     */
    snippets:{
        form:{
            errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'password'/'form'/'error_title','default'=>'Error saving the form','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'password'/'form'/'error_title','default'=>'Error saving the form','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to save the form.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'password'/'form'/'error_title','default'=>'Error saving the form','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            errorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'password'/'form'/'error_message','default'=>'The field -[0]- is not valid','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'password'/'form'/'error_message','default'=>'The field -[0]- is not valid','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The field -[0]- is not valid.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'password'/'form'/'error_message','default'=>'The field -[0]- is not valid','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        growlMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'growlMessage','default'=>'User manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'growlMessage','default'=>'User manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'growlMessage','default'=>'User manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    refs: [
        { ref: 'userCreateWindow', selector: 'usermanager-user-create' },
        { ref: 'userCreateForm', selector: 'usermanager-user-create form[name=main-form]' },
        { ref: 'attributeForm', selector: 'usermanager-user-create shopware-attribute-form' }
    ],

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
            'usermanager-user-create': {
                saveUser: me.onSaveUser
            },
            'button[action=addUser]': {
                click: me.onOpenAddUser
            },
            'usermanager-user-list': {
                editUser: me.onEditUser,
                deleteUser: me.onDeleteUser,
                deleteUsers: me.onDeleteUsers
            },
            'usermanager-user-list textfield[action=searchUser]':{
                change:me.onSearchUser
            }
        });
    },

    /**
     * Filters the grid with the passed search value to find the right voucher
     *
     * @param field
     * @param value
     * @return void
     */
    onSearchUser:function (field, value) {
        var me = this,
            searchString = Ext.String.trim(value),
            store = me.subApplication.getStore('User');

        store.getProxy().extraParams = {
            search: searchString
        };

        store.load({});
    },

    /**
     * Event to save user details back to store
     * @param record
     * @param formPnl
     */
    onSaveUser: function(record, formPnl) {
        var me = this,
            missingField = "Unknown field";

        if (!formPnl.getForm().isValid()){
            // check which field is not valid in order to tell the user, why the customer cannot be saved
            // SW-4322
            formPnl.getForm().getFields().each(function(f){
                 if(!f.validate()){
                    if(f.fieldLabel){
                        missingField = f.fieldLabel;
                    }else if(f.name){
                        missingField = f.name;
                    }
                    Shopware.Notification.createGrowlMessage(me.snippets.form.errorTitle, Ext.String.format(me.snippets.form.errorMessage, missingField), me.snippets.growlMessage);
                    return false;
                 }

             });
            return;

        }
        var values = formPnl.getForm().getValues();

        formPnl.getForm().updateRecord(record);

        if (values.apiActive === 0) {
            record.set('apiKey', '');
        }

        Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {

            formPnl.up('window').setLoading(true);

            record.save({
                callback: function (record) {
                    me.getAttributeForm().saveAttribute(record.get('id'));

                    formPnl.up('window').setLoading(false);
                    me.getStore('User').load();
                    formPnl.up('window').destroy();

                    Shopware.Notification.createGrowlMessage(
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/editSuccessful','default'=>'User \\\'[0]\\\' was updated','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/editSuccessful','default'=>'User \\\'[0]\\\' was updated','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User \'[0]\' was updated. In order to apply the changes for users currently logged in, you must first log out of the backend, then log in again and clear the backend cache.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/editSuccessful','default'=>'User \\\'[0]\\\' was updated','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', formPnl.getForm().getValues().name),
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    );
                    Ext.Ajax.request({
                        url: '<?php echo '/shopware/backend/login/getLoginStatus';?>',
                        success: function (response) {
                            var json = Ext.decode(response.responseText);
                            if (!json.success) {
                                window.location.href = '<?php echo '/shopware/backend';?>';
                            }
                        },
                        failure: function () {
                            window.location.href = '<?php echo '/shopware/backend';?>';
                        }
                    });
                }
            });
        });
    },

    /**
     * Event that catches clicks on new user button - open user-detail view -
     * @param btn
     */
    onOpenAddUser: function(btn) {
        this.getView('user.Create').create({
            record: Ext.create('Shopware.apps.UserManager.model.UserDetail'),
            edit: false
        });
    },

    /**
     * Event that catches while deleting backend users from grid
     * @param view
     * @param rowIndex
     */
    onDeleteUser: function (view,rowIndex){
        var me = this,
        userStore = me.getStore('User'),
        message,
        record = userStore.getAt(rowIndex);

        message = Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/messageDeleteUser','default'=>'Are you sure you want to delete the user [0]?','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/messageDeleteUser','default'=>'Are you sure you want to delete the user [0]?','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the user [0]?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/messageDeleteUser','default'=>'Are you sure you want to delete the user [0]?','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', record.data.username);
        Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', message, function (response){
            if (response !== 'yes') return false;

            Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
                record.destroy({
                    success : function () {
                        userStore.load();
                        Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/deletedSuccessfully','default'=>'User has been deleted','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/deletedSuccessfully','default'=>'User has been deleted','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User has been deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/deletedSuccessfully','default'=>'User has been deleted','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    },
                    failure : function () {
                        Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user'/'Error','default'=>'Error','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Error','default'=>'Error','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Error','default'=>'Error','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/deletedError','default'=>'An error has occurred while deleting the user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/deletedError','default'=>'An error has occurred while deleting the user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to delete the user.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/deletedError','default'=>'An error has occurred while deleting the user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    }
                });
            });
        });
    },

    /**
     * Event that catches batch user deleting
     * @param view
     */
    onDeleteUsers: function(view) {
        var me = this,
            records = view.getSelectionModel().getSelection(),
            userStore = me.getStore('User');

        if(records.length > 0) {
            Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/titleDeleteUser','default'=>'Delete user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/messageDeleteMultipleUsers','default'=>'Are you sure you want delete these users?','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/messageDeleteMultipleUsers','default'=>'Are you sure you want delete these users?','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want delete these users?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/messageDeleteMultipleUsers','default'=>'Are you sure you want delete these users?','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', function (response) {
                if (response !== 'yes') return false;

                Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {
                    me.deleteMultipleRecords(records, function () {
                        userStore.load();
                        Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/multipleDeletedSuccessfully','default'=>'Users has been deleted','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/multipleDeletedSuccessfully','default'=>'Users has been deleted','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users has been deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/multipleDeletedSuccessfully','default'=>'Users has been deleted','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    });
                });
            });
        }
    },

    /**
     * Event that will be fired on click the user edit symbol in grids
     * @param view
     * @param rowIndex
     */
    onEditUser: function (view,rowIndex){
        var me = this,

        userStore = me.getStore('User'),
        record = userStore.getAt(rowIndex);

        me.getStore('UserDetail').load({
            id: record.data.id,
            callback:function (records) {
                me.getView('user.Create').create({
                    record: records[0],
                    edit: true
                });
            }
        });
    },

    /**
     * Will delete a list of records one after another and finally call the callback method
     *
     * @param records
     * @param callback
     */
    deleteMultipleRecords: function(records, callback) {
        var me = this,
            record = records.pop();

        record.destroy({
            callback: function () {
                if (records.length == 0) {
                    callback();
                } else {
                    me.deleteMultipleRecords(records, callback);
                }
            }
        })
    },
});
//
<?php }} ?>