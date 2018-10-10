<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\roles\list.js" */ ?>
<?php /*%%SmartyHeaderCode:7803584485bbdaa61b9b785-10712499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f8a5facd58c70a22e71280ec21a1cda8f1b3005' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\roles\\list.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7803584485bbdaa61b9b785-10712499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61bbb146_92132791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61bbb146_92132791')) {function content_5bbdaa61bbb146_92132791($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Backend - View for role-grid
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.view.roles.List', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.usermanager-roles-list',
    region: 'center',
    autoScroll: true,
    height: '100%',
    selType: 'rowmodel',

    createDockedToolBar: function () {
        return [{
            dock: 'bottom',
            xtype: 'pagingtoolbar',
            displayInfo: true,
            store: this.roleStore
        }];
    },

    /**
     * Initialize the view components
     *
     * @return void
     */
    initComponent: function() {
        var me = this;
        me.store = this.roleStore;
        me.dockedItems = this.createDockedToolBar();
        me.plugins = Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 1,
            listeners: {
                canceledit: function (editor, opts) {
                    if (typeof opts.record.get('id') == 'undefined') {
                        opts.store.remove(opts.record);
                    }
                },
                beforeedit: function (editor, e) {
                    var fields = me.getFieldsToLockForAdmin();
                    var form   = editor.getEditor().form;

                    if (e.record.get('name') == 'local_admins') {
                        Ext.each(fields, function (field) {
                            form.findField(field).disable();
                        });
                        return;
                    }

                    Ext.each(fields, function(field) {
                        form.findField(field).enable();
                    });
                }
            }
        });
        me.rowEditing = me.plugins;

        me.on('edit', me.onEditRow, me);

        // Define the columns and renderers
        this.columns = [
        {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'colname','default'=>'Name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colname','default'=>'Name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colname','default'=>'Name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'name',
            flex: 1,
            field: 'textfield'
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'coldescription','default'=>'Description','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'coldescription','default'=>'Description','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'coldescription','default'=>'Description','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'description',
            flex: 1,
            field: 'textfield'
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'colsource','default'=>'Source','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colsource','default'=>'Source','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Source<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colsource','default'=>'Source','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'source',
            flex: 1
        }, {
            xtype: 'booleancolumn',
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'colactive','default'=>'Enabled','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colactive','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enabled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colactive','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'enabled',
            flex: 1,
            editor: {
                xtype: 'checkbox',
                inputValue: 'true',
                uncheckedValue: 'false'
            }
        },
        {
            xtype: 'booleancolumn',
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'coladmin','default'=>'Admin','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'coladmin','default'=>'Admin','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'coladmin','default'=>'Admin','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'admin',
            flex: 1,
            editor: {
                xtype: 'checkbox',
                inputValue: 'true',
                uncheckedValue: 'false'
            }
        },
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        {
            xtype: 'actioncolumn',
            width: 50,
            items: [{
                iconCls: 'sprite-minus-circle',
                cls: 'delete',
                tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'colactiondelete','default'=>'Delete this role','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colactiondelete','default'=>'Delete this role','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete this role<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'colactiondelete','default'=>'Delete this role','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                handler:function (view, rowIndex, colIndex, item) {
                    me.fireEvent('deleteRole', view, rowIndex, colIndex, item);
                },
                getClass: function(value, metaData, record) {
                    if (record.get('name') === 'local_admins') {
                        return 'x-hidden';
                    }
                }
            }]
        }
        /* <?php }?> */];


        // Toolbar
        this.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            dock: 'top',
            ui: 'shopware-ui',
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?> */
            items: [{
                iconCls: 'sprite-plus-circle',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roleslist'/'addrole','default'=>'Add role','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'addrole','default'=>'Add role','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add role<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roleslist'/'addrole','default'=>'Add role','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'addRole'
            }
            ]
        /* <?php }?> */
        });


        this.dockedItems = Ext.clone(this.dockedItems);
        this.dockedItems.push(this.toolbar);

        this.callParent();
    },

    getFieldsToLockForAdmin: function() {
        return ['name', 'admin', 'enabled'];
    },

    /**
     * Event listener method which will be fired when the user
     * edits a row in the role grid with the built-in row
     * editor.
     *
     * Saves the edited record to the store.
     *
     * @event edit
     * @param [object] editor
     * @return void
     */
    onEditRow: function(editor, event) {
        var store = event.store;

        Shopware.app.Application.fireEvent('Shopware.ValidatePassword', function() {

            editor.grid.setLoading(true);
            store.sync({
                callback: function () {
                    editor.grid.setLoading(false);
                }
            });
            Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user'/'Success','default'=>'Successful','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'roles_list'/'updatedSuccesfully','default'=>'Role has been updated','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roles_list'/'updatedSuccesfully','default'=>'Role has been updated','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Role has been updated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'roles_list'/'updatedSuccesfully','default'=>'Role has been updated','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'user/userManager','default'=>'User Manager','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');

        }, function() {
            event.record.reject();
        });
    }
});
//
<?php }} ?>