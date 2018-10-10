<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\grid.js" */ ?>
<?php /*%%SmartyHeaderCode:413150225bbdaae20959e1-39450449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b075aa8be180365421a710accb9ce1ee181287' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\grid.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413150225bbdaae20959e1-39450449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae20b6b76_60921632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae20b6b76_60921632')) {function content_5bbdaae20b6b76_60921632($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.Grid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.snippet-main-grid',
    enableColumnHide: false,

    /**
     * @object [Shopware.apps.Snippet.model.Shoplocale]
     */
    shoplocale: null,

    /**
     * @boolean
     */
    isExpertMode: false,

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        tooltipTranslateSnippet:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tooltip_translate_snippet','default'=>'Translate this snippet','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tooltip_translate_snippet','default'=>'Translate this snippet','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Translate this snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tooltip_translate_snippet','default'=>'Translate this snippet','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        tooltipDeleteSnippet: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tooltip_delete_snippet','default'=>'Delete this snippet','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tooltip_delete_snippet','default'=>'Delete this snippet','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete this snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tooltip_delete_snippet','default'=>'Delete this snippet','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        columnNamespace: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Namespace<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_namespace','default'=>'Namespace','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnName:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column_name','default'=>'Name','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_name','default'=>'Name','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_name','default'=>'Name','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        columnValue:     '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column_value','default'=>'Value','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_value','default'=>'Value','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column_value','default'=>'Value','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        buttonFilterEmpty:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_filter_empty','default'=>'Show only empty snippets','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_filter_empty','default'=>'Show only empty snippets','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only display empty snippets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_filter_empty','default'=>'Show only empty snippets','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonEditSelected: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_edit_selected','default'=>'Edit selected snippets','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_edit_selected','default'=>'Edit selected snippets','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit selected snippets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_edit_selected','default'=>'Edit selected snippets','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonAddSnippet:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_add_snippet','default'=>'Add snippet','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_add_snippet','default'=>'Add snippet','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add snippet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_add_snippet','default'=>'Add snippet','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        emptyTextSearch:   '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'empty_text_search','default'=>'search...','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty_text_search','default'=>'search...','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty_text_search','default'=>'search...','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Defines additional events which will be
     * fired from the component
     *
     * @return void
     */
    registerEvents:function () {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the delete icon in the
             * action column
             *
             * @event deleteSingle
             * @param [object] grid - Associated Ext.view.Table
             * @param [integer] rowIndex - Row index
             * @param [integer] colIndex - Column index
             */
            'deleteSingle',

            /**
             * Event will be fired when the user clicks the edit selected snippets button
             *
             * @event editSelectedSnippets
             * @param [array]
             */
            'editSelectedSnippets',

            /**
             * Event will be fired when the user clicks the translate button for a snippet
             *
             * @event translateSnippet
             * @param [object] record
             */
            'translateSnippet'
        );
    },


    /**
     * Sets up the ui component
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.listeners = {
            beforeactivate: me.onBeforeActivate,
            beforeedit:     me.onBeforeEdit
        };

        me.editor   = me.getRowEditorPlugin();
        me.plugins  = [ me.editor ];
        me.selModel = me.getGridSelModel();
        me.columns  = me.getColumns();
        me.tbar     = me.getToolbar();
        me.bbar     = me.getPagingbar();

        me.registerEvents();

        me.callParent(arguments);
    },

    /**
     * @param boolean - enabled
     * @return void
     */
    enableExpertMode: function(enabled) {
        var me = this;

        me.isExpertMode = enabled;

        var actionColum = me.down('actioncolumn');
        if (enabled) {
            actionColum.width += 26;
        } else {
            actionColum.width -= 26;
        }

        if (me.isVisible()) {
            me.store.load();
        }
    },

    /**
     * Resets the filterEmpty-Button and the searchfield to default values
     *
     * @event beforeactivate
     */
    onBeforeActivate: function() {
        var me             = this,
            filterEmptyBtn = me.ownerCt.down('button[action=filterEmpty]'),
            searchField    = me.ownerCt.down('textfield[action=search]');

        searchField.setValue('');
        filterEmptyBtn.toggle(false, true);
    },

    /**
     * Event will be fired when the user start the editing
     *
     * @param [Ext.grid.plugin.Editing] - The row editor
     * @return void
     */
    onBeforeEdit: function(editor) {
        var me             = this,
            rowEditingForm = editor.editor.form;

        if (me.isExpertMode) {
            rowEditingForm.findField('namespace').enable();
            rowEditingForm.findField('name').enable();
        } else {
            rowEditingForm.findField('namespace').disable();
            rowEditingForm.findField('name').disable();
        }
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns: function() {
        var me               = this,
            actionColumnItems = [];

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        actionColumnItems.push({
                action: 'translate',
                cls: 'translateBtn',
                iconCls: 'sprite-globe',
                tooltip: me.snippets.tooltipTranslateSnippet,
                handler: function(grid, rowIndex) {
                    var record = grid.getStore().getAt(rowIndex);
                    me.fireEvent('translateSnippet', record);
                }
            }
        );
        /*<?php }?>*/

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        actionColumnItems.push({
            action: 'delete',
            cls: 'deleteBtn',
            hideMode: 'display',
            iconCls: 'sprite-minus-circle-frame',
            tooltip:  me.snippets.tooltipDeleteSnippet,
            handler: function(grid, rowIndex, colIndex) {
                me.fireEvent('deleteSingle', grid, rowIndex, colIndex);
            },
            getClass: function() {
                if (!me.isExpertMode)  {
                    return 'x-hidden';
                }
            }
        });
        /*<?php }?>*/

        var columns = [{
            header:  me.snippets.columnNamespace,
            dataIndex: 'namespace',
            flex: 1,
            editor: {
                xtype: 'textfield',
                allowBlank: false
            }
        },{
            header: me.snippets.columnName,
            dataIndex: 'name',
            flex: 1,
            editor: {
                xtype: 'textfield',
                allowBlank: false
            }
        }, {
            header: me.snippets.columnValue,
            dataIndex: 'value',
            flex: 2,
            editor: {
                xtype: 'textfield'
            }
        }, {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype: 'actioncolumn',
            width: 26,
            items: actionColumnItems
        }];

        return columns;
    },

    /**
     * Creates rowEditor Plugin
     *
     * @return [Ext.grid.plugin.RowEditing]
     */
    getRowEditorPlugin: function() {
        return Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 2,
            errorSummary: false,
            pluginId: 'rowEditing'
        });
    },

    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel: function () {
        return Ext.create('Ext.selection.CheckboxModel');
    },

    /**
     * Creates pagingbar
     *
     * @return Ext.toolbar.Paging
     */
    getPagingbar: function () {
        return Ext.create('Ext.toolbar.Paging', {
            store: this.store,
            dock:'bottom',
            displayInfo: true
        });
    },

    /**
     * Creates the grid toolbar
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar: function() {
        var me = this;

        var buttons = [];

        buttons.push({
            xtype: 'button',
            text: me.snippets.buttonFilterEmpty,
            enableToggle: true,
            action : 'filterEmpty',
            iconCls: 'sprite-blue-document-template'
        });

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
        buttons.push({
            xtype: 'button',
            text: me.snippets.buttonEditSelected,
            iconCls: 'sprite-pencil',
            handler: function() {
                var selection = me.selModel.getSelection();

                if (selection.length === 0) {
                    me.selModel.selectAll();
                    selection = me.selModel.getSelection();
                }

                if (selection.length === 0) {
                    return;
                }

                me.fireEvent('editSelectedSnippets', selection);
            }
        });
        /*<?php }?>*/

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
        buttons.push({
            xtype: 'button',
            iconCls: 'sprite-plus-circle',
            text: me.snippets.buttonAddSnippet,
            action: 'add-snippet'
        });
        /*<?php }?>*/

        buttons.push({
            xtype: 'tbfill'
        });

        buttons.push({
            xtype : 'textfield',
            name : 'searchfield',
            action : 'search',
            width: 170,
            cls: 'searchfield',
            enableKeyEvents: true,
            checkChangeBuffer: 500,
            emptyText : me.snippets.emptyTextSearch
        });

        buttons.push({
            xtype: 'tbspacer',
            width: 6
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    }
});
//
<?php }} ?>