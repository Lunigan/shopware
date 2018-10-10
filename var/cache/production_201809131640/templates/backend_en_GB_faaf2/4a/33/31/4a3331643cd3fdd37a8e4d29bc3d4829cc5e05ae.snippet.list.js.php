<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\user\list.js" */ ?>
<?php /*%%SmartyHeaderCode:8051327355bbdaa61afc882-96088707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3331643cd3fdd37a8e4d29bc3d4829cc5e05ae' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\user\\list.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8051327355bbdaa61afc882-96088707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61b1b797_87810172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61b1b797_87810172')) {function content_5bbdaa61b1b797_87810172($_smarty_tpl) {?>/**
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
 * Shopware Backend - User list
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.view.user.List', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.usermanager-user-list',
    height: '100%',
    region: 'center',
    autoScroll: true,
    // Event listeners
    listeners: {
        scope: this,

        // Sample event listener which will be fired when the user has edited a grid row
        edit: function(editor) {
            editor.grid.setLoading(true);
            window.setTimeout(function() {
                editor.store.sync();
                editor.grid.setLoading(false);
            }, 500);
        }
    },

    /**
     * Initialize the view components
     *
     * @return void
     */
    initComponent: function() {
        var me = this;
        me.registerEvents();
        me.store = me.userStore;

        this.selModel = Ext.create('Ext.selection.CheckboxModel', {
            listeners: {
                // Unlocks the save button if the user has checked at least one checkbox
                selectionchange: function(sm, selections) {
                    var owner = this.view.ownerCt,
                        btn = owner.down('button[action=deleteUsers]');

                    btn.setDisabled(selections.length == 0);
                }
            }
        });

        var buttons = [];

        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        buttons.push({
            iconCls: 'sprite-minus-circle',
            action: 'deleteUser',
            cls: 'delete',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/deletetooltip','default'=>'Delete this user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/deletetooltip','default'=>'Delete this user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/deletetooltip','default'=>'Delete this user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler:function (view, rowIndex, colIndex, item) {
                me.fireEvent('deleteUser', view, rowIndex, colIndex, item);
            }
        });
        /* <?php }?> */

        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?> */
        buttons.push({
            iconCls: 'sprite-user--pencil',
            cls: 'editBtn',
            action: 'editUser',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/edittooltip','default'=>'Edit this user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/edittooltip','default'=>'Edit this user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/edittooltip','default'=>'Edit this user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler:function (view, rowIndex, colIndex, item) {
                me.fireEvent('editUser', view, rowIndex, colIndex, item);
        }});
        /* <?php }?> */

        me.dockedItems = this.createDockedToolBar();

        // Define the columns and renderers
        this.columns = [
        {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/username','default'=>'Username','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/username','default'=>'Username','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/username','default'=>'Username','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'username',
            width: 100,
            renderer: this.nameColumn
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/realname','default'=>'Name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/realname','default'=>'Name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/realname','default'=>'Name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'name',
            flex: 1
        },
        {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/lastlogin','default'=>'Last login','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/lastlogin','default'=>'Last login','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/lastlogin','default'=>'Last login','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'lastLogin',
            xtype: 'datecolumn',
            flex: 1
        }
        , {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/email','default'=>'Email Address','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/email','default'=>'Email Address','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/email','default'=>'Email Address','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'email',
            flex: 1,
            renderer: this.emailColumn
        }, {
            xtype: 'actioncolumn',
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/options','default'=>'Options','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/options','default'=>'Options','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/options','default'=>'Options','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            items: buttons
        }];

        var tbButtons = [];

        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?> */
        tbButtons.push({
            iconCls: 'sprite-plus-circle',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/adduser','default'=>'Add user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/adduser','default'=>'Add user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/adduser','default'=>'Add user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'addUser'
        });
        /* <?php }?> */

        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?> */
        tbButtons.push({
            iconCls: 'sprite-minus-circle',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/deleteusers','default'=>'Delete selected users','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/deleteusers','default'=>'Delete selected users','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/deleteusers','default'=>'Delete selected users','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            action: 'deleteUsers',
            handler: function() {
                me.fireEvent('deleteUsers', me);
            }
        });
        /* <?php }?> */

        tbButtons.push('->',
        {
            xtype:'textfield',
            name:'searchfield',
            action:'searchUser',
            width:170,
            cls: 'searchfield',
            enableKeyEvents:true,
            checkChangeBuffer: 500,
            emptyText:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users'/'field'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users'/'field'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users'/'field'/'search','default'=>'Search...','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        // Row grouping
        this.groupingFeature = Ext.create('Ext.grid.feature.Grouping', {
            groupHeaderTpl: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'list_users/group','default'=>'Gruppe','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/group','default'=>'Gruppe','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'list_users/group','default'=>'Gruppe','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: {name} ({rows.length})'
        });
        this.features = [ this.groupingFeature ];

        // Toolbar
        this.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            dock: 'top',
            ui: 'shopware-ui',
            items: tbButtons
        });

        me.dockedItems = Ext.clone(this.dockedItems);
        me.dockedItems.push(this.toolbar);

        this.callParent();
    },
    registerEvents:function () {
            this.addEvents(

                    /**
                     * Event will be fired when the user clicks the delete icon in the
                     * action column
                     *
                     * @event deleteColumn
                     * @param [object] View - Associated Ext.view.Table
                     * @param [integer] rowIndex - Row index
                     * @param [integer] colIndex - Column index
                     * @param [object] item - Associated HTML DOM node
                     */
                    'deleteUser',

                    /**
                     * Event will be fired when the user clicks the delete icon in the
                     * action column
                     *
                     * @event deleteColumn
                     * @param [object] View - Associated Ext.view.Table
                     * @param [integer] rowIndex - Row index
                     * @param [integer] colIndex - Column index
                     * @param [object] item - Associated HTML DOM node
                     */
                    'editUser'
            );

            return true;
    },
    /**
     * Create paging toolbar for grid view
     * @return [Array]
     */
    createDockedToolBar: function(){
      return  [{
            dock: 'bottom',
            xtype: 'pagingtoolbar',
            displayInfo: true,
            store: this.userStore
      }];
    },
    /**
     * Formats the name column
     *
     * @param [string] value
     * @return [string]
     */
    nameColumn: function(value,x,row) {
        if (!row.data.active){
            return Ext.String.format('<strong style="font-weight: 700;color:#F00;text-decoration: line-through">{0}</strong>', value);
        }
        return Ext.String.format('<strong style="font-weight: 700">{0}</strong>', value);
    },

    /**
     * Formats the email column
     *
     * @param [string] value
     * @return [string]
     */
    emailColumn: function(value) {
        return Ext.String.format('<a href="mailto:{0}">{1}</a>', value, value);
    }
});
//
<?php }} ?>