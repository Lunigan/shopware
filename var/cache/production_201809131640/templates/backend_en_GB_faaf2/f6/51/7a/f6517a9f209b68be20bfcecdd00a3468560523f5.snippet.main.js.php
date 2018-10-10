<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\controller\main.js" */ ?>
<?php /*%%SmartyHeaderCode:9949627695bbdaae21e9cf3-56091224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6517a9f209b68be20bfcecdd00a3468560523f5' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\controller\\main.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9949627695bbdaae21e9cf3-56091224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae221faf7_45237359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae221faf7_45237359')) {function content_5bbdaae221faf7_45237359($_smarty_tpl) {?>/**
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
 */

//

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Snippet.controller.Main', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Class property which holds the main application if it is created
     *
     * @default null
     * @object
     */
    mainWindow: null,

    /**
     * Define references for the different parts of our application. The
     * references are parsed by ExtJS and Getter methods are automatically created.
     *
     * @array
     */
    refs: [
        { ref: 'navigationTree', selector: 'snippet-main-navigation' },
        { ref: 'snippetPanel', selector: 'snippet-main-snippetPanel' }
    ],

    /**
     * Contains all snippets for the controller
     * @object
     */
    snippets: {
        singleDeleteTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_single_title','default'=>'Delete selected snippet','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_title','default'=>'Delete selected snippet','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_title','default'=>'Delete selected snippet','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        singleDeleteMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_single_message','default'=>'Are you sure, you want to delete the selected snippet: ','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_message','default'=>'Are you sure, you want to delete the selected snippet: ','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected snippet: <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_single_message','default'=>'Are you sure, you want to delete the selected snippet: ','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        deleteNamespaceTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_namespace_title','default'=>'Delete selected namespace','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_title','default'=>'Delete selected namespace','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected namespace<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_title','default'=>'Delete selected namespace','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteNamespaceMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_namespace_message','default'=>'Are you sure, you want to delete the selected Namespace?','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_message','default'=>'Are you sure, you want to delete the selected Namespace?','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected namespace?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_message','default'=>'Are you sure, you want to delete the selected Namespace?','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        deleteNamespaceSuccessTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_namespace_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteNamespaceSuccessMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_namespace_success_title','default'=>'Namespace has been removed','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_success_title','default'=>'Namespace has been removed','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Namespace has been deleted.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_namespace_success_title','default'=>'Namespace has been removed','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        deleteSuccessTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteSuccessMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_success_title','default'=>'Snippet has been removed','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_title','default'=>'Snippet has been removed','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippet has been deleted.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_success_title','default'=>'Snippet has been removed','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        deleteErrorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteErrorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred.','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred.','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error has occurred.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'delete_error_message','default'=>'During deleting an error has occurred.','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        saveSuccessTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        saveSuccessMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_success_title','default'=>'Snippets have been saved','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_title','default'=>'Snippets have been saved','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippets have been saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_title','default'=>'Snippets have been saved','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        saveErrorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        saveErrorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to save.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        createSuccessTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_message','default'=>'Successfully','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        createSuccessMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_success_title','default'=>'Snippet has been created','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_title','default'=>'Snippet has been created','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippets have been saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_success_title','default'=>'Snippet has been created','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        createErrorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_title','default'=>'Failure','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        createErrorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to save.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save_error_message','default'=>'During saving an error has occurred.','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Snippet','namespace'=>'backend/snippet/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Snippet','namespace'=>'backend/snippet/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Snippet','namespace'=>'backend/snippet/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     *
     * @return void
     */
    init: function() {
        var me = this;

        me.control({
            'snippet-main-navigation': {
                select:          me.onSelect,
                deleteNamespace: me.onDeleteNamespace
            },

            'snippet-main-grid': {
                edit:         me.onEdit,
                beforeedit:   me.onBeforeEdit,
                deleteSingle: me.onDeleteSingle,
                editSelectedSnippets: me.onOpenEditSnippetWindow,
                translateSnippet: me.onTranslate
            },

            'snippet-main-snippetPanel': {
                tabchange: me.onTabChange
            },

            'snippet-main-grid textfield[action=search]': {
                change: me.onSearch
            },

            'snippet-main-editForm button[action=save]': {
                click: me.onSaveForm
            },

            'snippet-main-translateForm button[action=save]': {
                click: me.onSaveTranslationForm
            },

            'snippet-main-window button[action=expert]': {
                toggle: me.onToggleExpert
            },

            'snippet-main-grid button[action=add-snippet]': {
                click: me.onOpenAddSnippetWindow
            },

            'snippet-main-window button[action=export]': {
                click: me.onOpenExportWindow
            },

            'snippet-main-grid button[action=filterEmpty]': {
                toggle: me.onToggleEmpty
            },

            'snippet-main-createForm button[action=save]': {
                click: me.onCreateRecord
            }
        });

        me.getStore('Snippet').proxy.extraParams.localeId = 1;
        me.getStore('Snippet').proxy.extraParams.shopId   = 1;
        me.getStore('Snippet').load();

        var localeStore = me.getStore('Shoplocale');
        if (me.subApplication.shopId) {
            localeStore.filter({ property: 'shopId', value: me.subApplication.shopId })
        }

        localeStore.load({
            callback: function(records) {
                if (me.subApplication.action && me.subApplication.action === 'detail') {
                    var snippet = Ext.create('Shopware.apps.Snippet.model.Snippet', me.subApplication.snippet);
                    me.onTranslate(snippet);
                } else {
                    me.mainWindow = me.getView('main.Window').create({
                        nSpaceStore:     me.getStore('NSpace'),
                        snippetStore:    me.getStore('Snippet'),
                        shoplocaleStore: localeStore
                    });
                    me.subApplication.setAppWindow(me.mainWindow);
                    me.mainWindow.show();
                }
            }
        });

        me.callParent(arguments);
    },

    /**
     * Accessor accessor for the current active grid
     *
     * @return [object]
     */
    getSnippetGrid: function() {
        var me        = this,
            activeTab = me.getSnippetPanel().getActiveTab();

        return activeTab;
    },

    /**
     * Event listener which deletes a namespace
     *
     * @param [Ext.data.Model] record
     * @return void
     */
    onDeleteNamespace: function(record) {
        var me  = this,
            tree = me.getNavigationTree(),
            selModel = tree.getSelectionModel();

        Ext.MessageBox.confirm(me.snippets.deleteNamespaceTitle, me.snippets.deleteNamespaceMessage, function (response) {
            if (response !== 'yes') {
                return false;
            }

            record.destroy({
                success: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.deleteNamespaceSuccessTitle, me.snippets.deleteNamespaceSuccessMessage, me.snippets.growlMessage);
                },
                callback: function() {
                    selModel.select(0, false);
                    me.reloadTree();
                }
            });
        });
    },

    /**
     * Event listener which deletes a single snippet
     *
     * @param [Ext.grid.View] grid - The grid on which the event has been fired
     * @param [integer] rowIndex - On which row position has been clicked
     * @return void
     */
    onDeleteSingle: function (grid, rowIndex) {
        var me      = this,
            store   = grid.getStore(),
            record  = store.getAt(rowIndex);

        Ext.MessageBox.confirm(me.snippets.singleDeleteTitle, me.snippets.singleDeleteMessage, function (response) {
            if (response !== 'yes') {
                return false;
            }

            me.getStore('Snippet').remove(record)

            me.getStore('Snippet').sync({
                success: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.deleteSuccessTitle, me.snippets.deleteSuccessMessage, me.snippets.growlMessage);
                },
                failure: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.deleteErrorTitle, me.snippets.deleteErrorMessage, me.snippets.growlMessage);
                },
                callback: function() {
                    me.reloadTree();
                    store.load();
                }
            });
        });
    },

    /**
     * Function to create a new record
     *
     * @event click
     * @param [object] btn Contains the clicked button
     * @return void
     */
    onCreateRecord: function(btn) {
        var me         = this,
            win        = btn.up('window'),
            formPanel  = win.down('form'),
            form       = formPanel.getForm(),
            record     = Ext.create('Shopware.apps.Snippet.model.Snippet');

        if (!form.isValid()) {
            return;
        }

        form.updateRecord(record);
        me.getStore('Snippet').add(record)

        me.getStore('Snippet').sync({
            success : function() {
                Shopware.Notification.createGrowlMessage(me.snippets.createSuccessTitle, me.snippets.createSuccessMessage, me.snippets.growlMessage);
            },
            failure: function() {
                Shopware.Notification.createGrowlMessage(me.snippets.createErrorTitle, me.snippets.createErrorMessage, me.snippets.growlMessage);
            },
            callback: function() {
                me.getStore('Snippet').load();
                me.reloadTree();
            }
        });

        win.destroy();
    },


    /**
     * Function to save a form
     *
     * @event click
     * @param [object] btn Contains the clicked button
     * @return void
     */
    onSaveForm: function(btn) {
        var me         = this,
            win        = btn.up('window'),
            formPanel  = win.down('form'),
            form       = formPanel.getForm(),
            values     = form.getValues(false, true),
            store      = me.getStore('Snippet'),
            record     = null,
            newRecords = false;

        if (!form.isValid()) {
            return;
        }

        Ext.iterate(values, function(internalId, value) {
            store.each(function(item) {
                // double equals instead of triple equals intended
                if (item.internalId == internalId) {
                    record = item;
                    record.set('value', value);

                    if (record.get('id') === null) {
                        // set phantom true to call create event instead of update
                        record.phantom = true;
                        newRecords = true;
                    }
                    return false;
                }
            });
        });

        // if the store contains new records disable batch mode
        store.getProxy().batchActions = !newRecords;

        store.sync({
            success : function() {
                Shopware.Notification.createGrowlMessage(me.snippets.saveSuccessTitle, me.snippets.saveSuccessMessage, me.snippets.growlMessage);
                me.getStore('Snippet').reload();
            },
            failure: function() {
                Shopware.Notification.createGrowlMessage(me.snippets.saveErrorTitle, me.snippets.saveErrorMessage, me.snippets.growlMessage);
            }
        });

        // some more cleanup to do?
        win.destroy();
    },


    /**
     * Function to save a form
     *
     * @event click
     * @param [object] btn Contains the clicked button
     * @return void
     */
    onSaveTranslationForm: function(btn) {
        var me         = this,
            win        = btn.up('window'),
            formPanel  = win.down('form'),
            form       = formPanel.getForm(),
            values     = form.getValues(false, true),
            store      = formPanel.snippetStore,
            record     = null,
            newRecords = false;

        if (!form.isValid()) {
            return;
        }

        Ext.iterate(values, function(internalId, value) {
            store.each(function(item) {
                // double equals instead of triple equals intended
                if (item.internalId == internalId) {

                    record = item;
                    record.set('value', value);

                    if (record.get('id') === null) {
                        // set phantom true to call create event instead of update
                        record.phantom = true;
                        newRecords = true;
                    }
                    return false;
                }
            });
        });

        // if the store contains new records disable batch mode
        store.getProxy().batchActions = !newRecords;

        store.sync({
            success : function() {
                Shopware.Notification.createGrowlMessage(me.snippets.saveSuccessTitle, me.snippets.saveSuccessMessage, me.snippets.growlMessage);
                me.getStore('Snippet').reload();
            },
            failure: function() {
                Shopware.Notification.createGrowlMessage(me.snippets.saveErrorTitle, me.snippets.saveErrorMessage, me.snippets.growlMessage);
            }
        });

        // some more cleanup to do?
        win.destroy();
    },

    /**
     * @event tabchange
     * @param [Ext.tab.Panel] tabPanel
     * @param [Ext.Component] newCard
     *
     * @return void
     */
    onTabChange: function(tabPanel, newCard, oldCard) {
        var me    = this,
            store = me.getStore('Snippet');

        store.proxy.extraParams.localeId    = newCard.shoplocale.get('localeId');
        store.proxy.extraParams.shopId      = newCard.shoplocale.get('shopId');
        store.proxy.extraParams.filterEmpty = null;
        store.currentPage = 1;
        store.filters.clear();

        newCard.setLoading(true);
        store.load({
            callback: function() {
                newCard.setLoading(false);
            }
        });
    },

    /**
     * Fires when the 'pressed' state of the "Expert"-button changes
     *
     * @event toggle
     * @param [Ext.button.Button] btn
     * @param [boolean] isPressed
     * @return void
     */
    onToggleExpert: function(btn, isPressed) {
        var me = this;

        me.getSnippetPanel().enableExpertMode(isPressed);
   },

    /**
     * Fires when the 'Add Snippet' button is clicked
     *
     * @event click
     * @param [Ext.button.Button] btn
     * @return void
     */
    onOpenAddSnippetWindow: function(btn) {
        var me               = this,
            shoplocale       = me.getSnippetGrid().shoplocale,
            defaultNamespace = '',
            lastSelected     = me.getNavigationTree().getSelectionModel().getLastSelected();

        if (lastSelected !== null && !lastSelected.isRoot()) {
            defaultNamespace = lastSelected.get('id');
        }

        me.getView('main.CreateForm').create({
            defaultLocaleId:  shoplocale.get('localeId'),
            defaultShopId:    shoplocale.get('shopId'),
            defaultNamespace: defaultNamespace
        }).show();
    },

    /**
     * Fires when the 'Edit selected snippets' button is clicked
     *
     * @event click
     * @param [array]
     * @return void
     */
    onOpenEditSnippetWindow: function(selectedSnippets) {
        var me = this;

        me.getView('main.EditForm').create({
            selectedSnippets: selectedSnippets
        }).show();
    },

    /**
     * Fires when the 'Translate snippets' button is clicked
     *
     * @event click
     * @param [object] record
     * @return void
     */
    onTranslate: function(snippet) {
        var me = this,
            snippetStore = Ext.create("Shopware.apps.Snippet.store.Snippet");

        snippetStore.proxy.extraParams = {};
        snippetStore.proxy.extraParams.name = snippet.get('name');
        snippetStore.proxy.extraParams.namespace = snippet.get('namespace');

        snippetStore.load({
            callback: function() {
                me.getView('main.TranslateWindow').create({
                    rootSnippet: snippet,
                    snippetStore: snippetStore,
                    shopLocaleStore: me.getStore('Shoplocale')
                }).show();
            }
        });
    },

    /**
     * Fires when the "Import/Export" button is clicked
     *
     * Opens a "Import/Export"-Window
     *
     * @event click
     * @return void
     */
    onOpenExportWindow: function() {
        var me    = this;

        me.getView('main.ImportExport').create().show();
    },

    /**
     * Fires when the 'pressed' state of the "Empty"-button changes
     *
     * @event toggle
     * @param [Ext.button.Button] btn
     * @param [boolean] isPressed
     * @return void
     */
    onToggleEmpty: function(btn, isPressed) {
        var me    = this,
            store = me.getStore('Snippet');

        //scroll the store to first page
        store.currentPage = 1;

        if (isPressed) {
            store.getProxy().extraParams.filterEmpty = true;

            store.filters.add('emptyFilter', new Ext.util.Filter({
                property: 'filterEmpty',
                value: true
            }));
        } else {
            store.filters.removeAtKey('emptyFilter');
        }

        store.filter();
    },

    /**
     * Event listener method which will be fired when the user
     * insert a value in the search field on the right hand of the module
     *
     * @event change
     * @param [object] field - Ext.form.field.Text
     * @param [string] value - inserted search value
     * @return void
     */
    onSearch: function(field, value) {
        var store        = this.getStore('Snippet'),
            searchString = Ext.String.trim(value);

        //scroll the store to first page
        store.currentPage = 1;

        if (searchString.length === 0 ) {
            store.filters.removeAtKey('searchFilter');
        } else {
            store.filters.add('searchFilter', new Ext.util.Filter({
                property: 'search',
                value: searchString
            }));
        }
        store.filter();
    },

    /**
     * @event select
     * @param [Ext.selection.RowModel] rowModel
     * @param [Ext.data.Model] record
     * @param [Number] index
     *
     * @return boolean
     */
    onSelect: function(rowModel, record, index) {
        var me    = this,
            store = me.getStore('Snippet'),
            grid  = me.getSnippetGrid();

        if (record.get('id') === 'root') {
            store.getProxy().extraParams.namespace = null;
        } else {
            store.getProxy().extraParams.namespace = record.get('id');
        }

        //scroll the store to first page
        store.currentPage = 1;

        grid.setLoading(true);
        store.load({
            callback: function() {
                grid.setLoading(false);
            }
        });
    },

    /**
     * Fires before editing is triggered.
     * Used to prevent editing if user has insufficient permissions
     *
     * @event beforeedit
     * @return void
     */
    onBeforeEdit: function() {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?>*/
        return false;
        /*<?php }?>*/
    },

    /**
     * Fired after a row is edited and passes validation. This event is fired
     * after the store's update event is fired with this edit.
     *
     * @event edit
     * @param [Ext.grid.plugin.Editing]
     * @param [object] An edit event with the following properties:
     *                 grid - The grid
     *                 record - The record that was edited
     *                 field - The field name that was edited
     *                 value - The value being set
     *                 row - The grid table row
     *                 column - The grid Column defining the column that was edited.
     *                 rowIdx - The row index that was edited
     *                 colIdx - The column index that was edited
     *                 originalValue - The original value for the field, before the edit (only when using CellEditing)
     *                 originalValues - The original values for the field, before the edit (only when using RowEditing)
     *                 newValues - The new values being set (only when using RowEditing)
     *                 view - The grid view (only when using RowEditing)
     *                 store - The grid store (only when using RowEditing)
     * @return void
     */
    onEdit: function(editor, event) {
        var me     = this,
            record = event.record,
            view   = editor.grid;

        if (!record.dirty) {
            return;
        }

        if (record.get('id') === null) {
            // set phantom true to call create event instead of update
            record.phantom = true;
        }

        view.setLoading(true);
        me.getStore('Snippet').sync({
            callback: function() {
                view.setLoading(false);

                // If the namespace of a record has changed, reload the tree
                // to reflect the changes in the navigtaion
                if (event.originalValues.namespace !== event.newValues.namespace) {
                    me.reloadTree();
                }
            }
        });
    },

    /**
     * Reloads the Navigation tree
     *
     * Reloads the store and expands the path to the previously selected node
     * and selects it without firing the select event
     *
     * @return void
     */
    reloadTree: function() {
        var me           = this,
            tree         = me.getNavigationTree(),
            store        = me.getStore('NSpace'),
            rootNode     = tree.getRootNode(),
            selModel     = tree.getSelectionModel(),
            lastSelected = selModel.getLastSelected();

        rootNode.removeAll(false);
        tree.setLoading(true);
        store.load({
            callback: function() {
                tree.setLoading(false);

                if (lastSelected !== null) {
                    lastSelected = store.getNodeById(lastSelected.get('id'));
                } else {
                    lastSelected = false;
                }

                if (lastSelected) {
                    lastSelected.bubble(function(node) {
                        node.expand();
                    });

                    // select node but do not fire event
                    selModel.select(lastSelected, false, true);
                }
            }
        });
    }
});
//
<?php }} ?>