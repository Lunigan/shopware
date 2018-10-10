<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\rules\add.js" */ ?>
<?php /*%%SmartyHeaderCode:15847806055bbdaa61c13571-17514131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ead4c3f0a6fd7319fa25ff124f291b87fcac16' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\rules\\add.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15847806055bbdaa61c13571-17514131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61c29f29_99836128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61c29f29_99836128')) {function content_5bbdaa61c29f29_99836128($_smarty_tpl) {?>/**
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
 * Shopware Backend - User Manager add window
 *
 * The user manager add window is used to create new resources or new privileges.
 */
//
Ext.define('Shopware.apps.UserManager.view.rules.Add', {
    /**
     * Extends the Ext.window.Window component
     * @string
     */
    extend: 'Ext.window.Window',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets
     */
    alias: 'widget.user-manager-rule-add',

    /**
     * Configuration for the window border
     */
    border: false,

    /**
     * Window width
     * @int
     */
    width: 400,

    /**
     * True to automatically show the component upon creation. This config option may only be used for floating components or components that use autoRender. Defaults to false.
     * @boolean
     */
    autoShow: true,

    /**
     * Contains all snippets for this component
     * @object
     */
    snippets: {
        resource: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'resource'/'title','default'=>'Create new resource','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Create new resource','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new resource<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Create new resource','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'resource'/'title','default'=>'Resource name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Resource name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new resource<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Resource name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            empty: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'resource'/'title','default'=>'Please insert a resource name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Please insert a resource name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new resource<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'resource'/'title','default'=>'Please insert a resource name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        privilege: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'privilege'/'title','default'=>'Create new privilege','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Create new privilege','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new privilege<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Create new privilege','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            empty: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'privilege'/'title','default'=>'Privilege name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Privilege name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new privilege<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Privilege name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'privilege'/'title','default'=>'Please insert a privilege name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Please insert a privilege name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create new privilege<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'privilege'/'title','default'=>'Please insert a privilege name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        cancel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        accept: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add'/'save','default'=>'Save','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'save','default'=>'Save','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add'/'save','default'=>'Save','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first, with each initComponent method up the hierarchy to
     * Ext.Component being called thereafter. This makes it easy to implement and, if needed,
     * override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     */
    initComponent: function() {
        var me = this, label, title, empty;

        me.registerEvents();

        if (me.record.modelName === 'Shopware.apps.UserManager.model.Resource') {
            title = me.snippets.resource.title;
            label = me.snippets.resource.label;
            empty = me.snippets.resource.empty;
        } else {
            title = me.snippets.privilege.title;
            label = me.snippets.privilege.label;
            empty = me.snippets.privilege.empty;
        }
        me.title = title;

        me.nameField = Ext.create('Ext.form.field.Text', {
            fieldLabel: label,
            emptyText: empty,
            labelWidth: 155,
            name: 'name',
            allowBlank: false
        });

        me.formPanel = Ext.create('Ext.form.Panel', {
            bodyPadding: 12,
            defaults: {
                labelStyle: 'font-weight: 700'
            },
            items: [ me.nameField ]
        });

        me.items = [ me.formPanel ];
        me.buttons = me.createActionButtons();
        me.callParent(arguments);
        me.formPanel.loadRecord(me.record);
    },

    /**
     * Registers the custom component events.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user want to create a new resource.
             *
             * @event
             * @param [Ext.window.Window] - The add window
             * @param [Ext.form.Panel] - The form panel
             * @param [Ext.data.Model] - The new record
             * @param [Ext.data.Store] - The rule store
             */
            'saveResource',

            /**
             * Event will be fired when the user want to create a new privilege.
             *
             * @event
             * @param [Ext.window.Window] - The add window
             * @param [Ext.form.Panel] - The form panel
             * @param [Ext.data.Model] - The new record
             * @param [Ext.data.Store] - The rule store
             */
            'savePrivilege'
        );
    },

    /**
     * Creates the accept and cancel button for the form panel.
     * @return [array]
     */
    createActionButtons: function() {
        var me = this;

        this.closeBtn = Ext.create('Ext.button.Button', {
            text: me.snippets.cancel,
            handler: function() {
                me.destroy();
            }
        });

        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        this.addBtn = Ext.create('Ext.button.Button', {
            text: me.snippets.accept,
            action: 'user-manager-add-model',
            cls: 'primary',
            handler: function() {
                me.formPanel.getForm().updateRecord(me.record);
                if (me.record.modelName === 'Shopware.apps.UserManager.model.Resource') {
                    me.fireEvent('saveResource', me, me.formPanel,  me.record, me.ruleStore)
                } else {
                    me.fireEvent('savePrivilege', me, me.formPanel, me.record, me.ruleStore)
                }
            }
        });
        /* <?php }?> */

        return [
            this.closeBtn
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?> */
            ,this.addBtn
        /* <?php }?> */ ];

    }
});
//
<?php }} ?>