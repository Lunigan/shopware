<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\rules\tree.js" */ ?>
<?php /*%%SmartyHeaderCode:1264389255bbdaa61bd5154-30768341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70c9fc2ba4c5d402ca18b553a553562e2289b7be' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\rules\\tree.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264389255bbdaa61bd5154-30768341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61bf90a8_73942661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61bf90a8_73942661')) {function content_5bbdaa61bf90a8_73942661($_smarty_tpl) {?>/**
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
 * Shopware Backend - User Manager rule tree
 *
 * The rule tree component is a listing component for all defined resources and the resource privileges.
 * The user can create and delete new resource and privileges over the toolbar buttons or the tree action columns.
 * If the user select a role in the toolbar combo box, all privileges of the selected role will be checked in the tree.
 * The user can change the role privileges over the tree checkboxes. After the user clicks the
 * "Assign the checked privileges to the selected role" all checked privileges and resources will be assigned to the role.
 */
//
Ext.define('Shopware.apps.UserManager.view.rules.Tree', {

    /**
     * Region of the component
     */
    region: 'center',

    /**
     * Defines that the rules tree is an extension of the Ext.tree.Panel
     */
    extend: 'Ext.tree.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets
     */
    alias: 'widget.user-manager-rules-tree',

    /**
     * Hides the root node
     * @boolean
     */
    rootVisible: false,
    /**
     * Contains the component snippets
     * @object
     */
    snippets: {
        columns: {
            name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'column'/'name','default'=>'Resource / Privilege','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'name','default'=>'Resource / Privilege','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resources / privileges<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'name','default'=>'Resource / Privilege','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'column'/'action_header','default'=>'Action','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'action_header','default'=>'Action','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'action_header','default'=>'Action','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            delete: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'column'/'action_delete','default'=>'Delete item','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'action_delete','default'=>'Delete item','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'column'/'action_delete','default'=>'Delete item','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        role: {
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'role_label','default'=>'Role','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'role_label','default'=>'Role','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Role<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'role_label','default'=>'Role','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            empty: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'role_empty','default'=>'Select role to proceed','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'role_empty','default'=>'Select role to proceed','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select role to proceed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'role_empty','default'=>'Select role to proceed','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        addResource: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'add_resource','default'=>'Add resource','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'add_resource','default'=>'Add resource','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add resource<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'add_resource','default'=>'Add resource','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        addPrivilege: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'add_privilege','default'=>'Add privilege','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'add_privilege','default'=>'Add privilege','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add privilege<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'add_privilege','default'=>'Add privilege','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        saveRole: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'save_role','default'=>'Assign the checked privileges to the selected role','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'save_role','default'=>'Assign the checked privileges to the selected role','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign the selected privileges to the selected role.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'save_role','default'=>'Assign the checked privileges to the selected role','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        search: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notSelectedTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'not_selected_title','default'=>'Error','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'not_selected_title','default'=>'Error','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'not_selected_title','default'=>'Error','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        notSelectedMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'rules'/'not_selected_message','default'=>'No resource selected!','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'not_selected_message','default'=>'No resource selected!','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No resource selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'rules'/'not_selected_message','default'=>'No resource selected!','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User management<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'User Management','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first, with each initComponent method up the hierarchy to
     * Ext.Component being called thereafter. This makes it easy to implement and, if needed,
     * override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     * @return void
     */
    initComponent: function() {
        var me = this;

        // Set column model, store, selection model and the toolbar
        me.columns = me.createColumns();
        me.selModel = me.createSelectionModel();
        me.tbar = me.createToolbar();
        me.registerEvents();
        me.ruleStore.getProxy().extraParams = {};
        me.store = me.ruleStore.load();

        me.callParent(arguments);
    },

    /**
     * Creates the tree selection model.
     * @return Ext.selection.RowModel
     */
    createSelectionModel: function() {
        var me = this;

        return Ext.create('Ext.selection.RowModel', {
            listeners: {
                scope: me,
                select: me.onNodeSelect
            }
        });
    },

    /**
     * Fired when a row is focused
     * @param [Ext.selection.RowModel] selModel - The tree selection model
     * @param [Ext.data.Model]
     * @return void
     */
    onNodeSelect: function(selModel, record) {
        var me = this;
        me.addPrivilegeButton.setDisabled(record.get('type')!=='resource');
    },

    /**
     * Registers the custom component events.
     * @return void
     */
    registerEvents: function() {

        this.addEvents(
            /**
             * Event will be fired when the user clicks the delete action column
             * of a resource tree node.
             *
             * @event
             * @param [Ext.data.Model] - The select node record
             */
            'deleteResource',

            /**
             * Event will be fired when the user clicks the delete action column
             * of a resource tree node.
             *
             * @event
             * @param [Ext.data.Model] - The select node record
             */
            'deletePrivilege',

            /**
             * Event will be fired when the user insert a value into the search text field which
             * is displayed on top of the rules tree.
             *
             * @event
             * @param [Ext.String] - The search value which inserted in the search text field.
             * @param [Ext.data.Store] - The component store.
             */
            'searchResource',

            /**
             * Event will be fired when the user clicks on the "add resource button"
             *
             * @event
             * @param [Ext.data.Store] - The component store.
             */
            'addResource',

            /**
             * Event will be fired when the user clicks on the "add privilege button"
             *
             * @event
             * @param [Ext.data.Store] - The component store.
             */
            'addPrivilege',

            /**
             * Event will be fired when the user select a role in the combo box
             * which is placed on top of the rules tree
             *
             * @event
             * @param [Ext.data.Store] - The component store.
             * @param [int|null] - The combo box value
             */
            'roleSelect',

            /**
             * Event will be fired when the user change the tree checkboxes and
             * clicks the "Assign the selected privileges to the role" button
             *
             * @event
             * @param [Ext.data.Store] - The component store.
             * @param [int|null] - The combo box value
             * @param [array] - All checked nodes
             *
             */
            'saveRolePrivileges'
        );
    },

    /**
     * Creates the tree toolbar which contains the
     * add resource / privilege button and the search text field.
     * @return Ext.toolbar.Toolbar
     */
    createToolbar: function() {
        var me = this;

        me.roleStore = Ext.create('Shopware.apps.UserManager.store.Roles', {
            pageSize: 5
        });

        me.roleCombo = Ext.create('Shopware.form.field.PagingComboBox', {
            pageSize: 5,
            queryMode: 'remote',
            store: me.roleStore,
            valueField: 'id',
            displayField: 'name',
            forceSelection: true,
            allowBlank:false,
            labelWidth: 50,
            emptyText: me.snippets.role.empty,
            fieldLabel: me.snippets.role.label,
            listeners: {
                change: function(field, value) {
                    me.fireEvent('roleSelect', me.store, value);
                }
            }
        });

        /**
         * The save role button assign the selected privileges
         * to the selected role.
         * @type Ext.button.Button
         */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        me.saveRoleButton = Ext.create('Ext.button.Button', {
            text: me.snippets.saveRole,
            disabled:true,
            name: 'saveRolePrivileges',
            iconCls:'sprite-disk',
            handler: function() {
                me.fireEvent('saveRolePrivileges', me.store, me.roleCombo.getValue(), me.getChecked());
            }
        });
        /* <?php }?> */

        /**
         * The add resource button creates a new resource
         * @type Ext.button.Button
         */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?> */
        me.addResourceButton = Ext.create('Ext.button.Button', {
            text: me.snippets.addResource,
            iconCls:'sprite-plus-circle-frame',
            handler: function() {
                me.fireEvent('addResource', me.store);
            }
        });
        /* <?php }?> */

        /**
         * The add privilege button creates a new privilege for
         * the selected resource.
         * @type Ext.button.Button
         */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?> */
        me.addPrivilegeButton = Ext.create('Ext.button.Button', {
            text: me.snippets.addPrivilege,
            iconCls:'sprite-plus-circle-frame',
            disabled: true,
            handler: function() {
                var selected = me.selModel.selected;

                if (selected.first()) {
                    me.fireEvent('addPrivilege', me.store, selected.first().get('resourceId'));
                } else {
                    Shopware.Notification.createGrowlMessage(me.snippets.notSelectedTitle, me.snippets.notSelectedMessage, me.snippets.growlMessage);
                }

            }
        });
        /* <?php }?> */

        me.searchField = Ext.create('Ext.form.field.Text', {
            name:'searchfield',
            cls:'searchfield',
            width:170,
            emptyText: me.snippets.search,
            enableKeyEvents:true,
            checkChangeBuffer:500,
            listeners: {
                change: function(field, value) {
                    me.fireEvent('searchResource', me.store, value);
                }
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock:'top',
            items: [
                me.roleCombo,
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?> */
                { xtype:'tbspacer', width:6 },
                me.saveRoleButton,
        /* <?php }?> */
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?> */
                { xtype:'tbspacer', width:6 },
                me.addResourceButton,
                { xtype:'tbspacer', width:6 },
                me.addPrivilegeButton,
        /* <?php }?> */
                '->',
                me.searchField
            ]
        });
    },

    /**
     * Creates the column model for the TreePanel
     *
     * @return [array] columns - generated columns
     */
    createColumns: function() {
        var me = this;

        var columns = [{
            xtype: 'treecolumn',
            text: me.snippets.columns.name ,
            flex: 2,
            sortable: true,
            dataIndex: 'name'
        },
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6){?> */
        {
            xtype: 'actioncolumn',
            width: 50,
            text: me.snippets.columns.action,
            items: [{
                iconCls:'sprite-minus-circle-frame',
                action:'deleteNode',
                tooltip: me.snippets.columns.delete,
                /**
                 * Remove button handler to fire the deletePrivilege or deleteResource event which is handled
                 * in the rules controller.
                 */
                handler:function (view, rowIndex, colIndex, item, opts, record) {
                    if (record.get('type') === 'privilege') {
                        me.fireEvent('deletePrivilege', record, me.store);
                    } else {
                        me.fireEvent('deleteResource', record, me.store);
                    }
                }
            }]
        }
        /* <?php }?> */];

        return columns;
    }


});
//
<?php }} ?>