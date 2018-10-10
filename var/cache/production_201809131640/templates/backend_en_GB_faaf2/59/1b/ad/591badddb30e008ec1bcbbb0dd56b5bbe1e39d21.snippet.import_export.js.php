<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\view\main\import_export.js" */ ?>
<?php /*%%SmartyHeaderCode:9424434145bbdaae20ef5b0-76261901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591badddb30e008ec1bcbbb0dd56b5bbe1e39d21' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\view\\main\\import_export.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9424434145bbdaae20ef5b0-76261901',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae2107639_26957041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae2107639_26957041')) {function content_5bbdaae2107639_26957041($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Snippet.view.main.ImportExport', {
    extend: 'Enlight.app.Window',
    alias: 'widget.snippet-main-importExport',
    layout: 'fit',

    width: 500,
    height: 220,

    /**
     * Contains all snippets for this view
     * @object
     */
    snippets: {
        title:                  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Import / Export Snippets','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Import / Export Snippets','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Snippet administration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Import / Export Snippets','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonChooseFile:       '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_choose_file','default'=>'Choose File','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_choose_file','default'=>'Choose File','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_choose_file','default'=>'Choose File','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        emptyTextChooseFile:    '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'empty_text_choose_file','default'=>'Please choose a file..','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty_text_choose_file','default'=>'Please choose a file..','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select a file..<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'empty_text_choose_file','default'=>'Please choose a file..','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        messageUploadFile:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message_upload_file','default'=>'Uploading your file...','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message_upload_file','default'=>'Uploading your file...','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Uploading your file...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message_upload_file','default'=>'Uploading your file...','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonStartImport:      '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_start_import','default'=>'Start Import','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_start_import','default'=>'Start Import','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start import<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_start_import','default'=>'Start Import','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        buttonExport:           '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button_export','default'=>'Export','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_export','default'=>'Export','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start export<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button_export','default'=>'Export','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        fieldFile:              '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'field_file','default'=>'File','namespace'=>'backend/snippet/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field_file','default'=>'File','namespace'=>'backend/snippet/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field_file','default'=>'File','namespace'=>'backend/snippet/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Initializes the component and builds up the main interface
     *
     * @public
     * @return void
     */
    initComponent: function () {
        var me = this;

        me.title = me.snippets.title;

        me.items = [
            {
                xtype: 'tabpanel',
                items: [me.createExportForm(), me.createImportForm()]
            }
        ];

        me.callParent(arguments);
    },

    createImportForm: function() {
        var me = this;

        return {
            xtype: 'form',
            title: 'Import',
            layout: 'anchor',
            bodyPadding: 10,
            flex: 1,
            defaults: {
                layout: 'anchor',
                labelWidth: 130,
                anchor: '98%'
            },

            items: [{
                xtype: 'filefield',
                emptyText: me.snippets.emptyTextChooseFile,
                buttonText: me.snippets.buttonChooseFile,
                name: 'file',
                fieldLabel: me.snippets.fieldFile,
                allowBlank: false,
                anchor: '100%',
                buttonConfig : {
                    iconCls: 'sprite-inbox-upload',
                    cls: 'small secondary'
                }
            }],

            buttons: [{
                text: me.snippets.buttonStartImport,
                cls: 'button primary',
                handler: function () {
                    var form = this.up('form').getForm();
                    if (form.isValid()) {
                        form.submit({
                            url: ' <?php echo '/shopware/backend/snippet/importSnippet';?>',
                            waitMsg: me.snippets.messageUploadFile,
                            success: function (fp, o) {
                                Ext.Msg.alert('Result', o.result.message);
                                me.close();
                            },
                            failure: function (fp, o) {
                                Ext.Msg.alert('Fehler', o.result.message);
                            }
                        });
                    }
                }
            }]
        };
    },

    createExportForm: function() {
        var me = this;

        return {
            xtype: 'form',
            title: 'Export',
            layout: 'anchor',
            standardSubmit: true,
            bodyPadding: 10,
            flex: 1,
            defaults: {
                layout: 'anchor',
                labelWidth: 130,
                anchor: '98%'
            },

            items: [{
                xtype: 'combo',
                fieldLabel: 'Format',
                listeners: {
                    'afterrender': function () {
                        this.setValue(this.store.getAt('0').get('id'));
                    }
                },
                store: me.getFormatComboStore(),
                name: 'format',
                forceSelection: true,
                allowBlank: false,
                editable: false,
                mode: 'local',
                triggerAction: 'all',
                displayField: 'label',
                valueField: 'id'
            }],

            buttons: [{
                text: me.snippets.buttonExport,
                cls: 'button primary',
                handler: function () {
                    var form = this.up('form').getForm();
                    if (!form.isValid()) {
                        return;
                    }
                    form.submit({
                        method: 'GET',
                        url: ' <?php echo '/shopware/backend/snippet/exportSnippet';?>'
                    });
                }
            }]
        };
    },


    /**
     * Creates store object used for the typ column
     *
     * @return [Ext.data.SimpleStore]
     */
    getFormatComboStore: function() {
        return new Ext.data.SimpleStore({
            fields: ['id', 'label'],
            data: [
                ['sql', 'SQL (Backup)'],
                ['csvexcel', 'CSV (Microsoft Excel)'],
                ['csv', 'CSV']
            ]
        });
    }
});
//
<?php }} ?>