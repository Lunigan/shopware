<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\user\create.js" */ ?>
<?php /*%%SmartyHeaderCode:11964153145bbdaa61b34c96-03121383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f691404f7c9bd0d2e9a0a721b5bc12a945d60b1d' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\user\\create.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11964153145bbdaa61b34c96-03121383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61b7c247_81198148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61b7c247_81198148')) {function content_5bbdaa61b7c247_81198148($_smarty_tpl) {?>/**
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
 * Shopware Backend - User administration detail view
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.UserManager.view.user.Create', {
    extend: 'Enlight.app.Window',
    alias : 'widget.usermanager-user-create',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/title','default'=>'Add/edit user','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/title','default'=>'Add/edit user','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/title','default'=>'Add/edit user','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: 'fit',
    autoShow: true,
    autoScroll:true,
    width       : 700,
    height: '90%',
    modal: true,
    apiKeyField: null,
    lastApiKey: '',

    /**
     * Initialize the view components
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        // Load locales & roles
        me.localeStore = Ext.create('Shopware.apps.UserManager.store.Locale').load();
        me.roleStore = Ext.create('Shopware.apps.UserManager.store.Roles').load();

        me.items = me.getUserTab();

        me.formPanel.loadRecord(me.record);
        me.attributeForm.loadAttribute(null);
        if (me.record.get('id')) {
            me.attributeForm.loadAttribute(me.record.get('id'));
        }

        me.addEvents('saveUser');

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            ui: 'shopware-ui',
            cls: 'shopware-toolbar',
            items: ['->', {
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/cancel','default'=>'Cancel','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'secondary',
                scope: me,
                handler: me.close
            }
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
            ,{
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/save','default'=>'Save','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/save','default'=>'Save','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/save','default'=>'Save','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'save',
                cls: 'primary',
                handler: function(btn) {
                    me.fireEvent('saveUser', me.record, me.formPanel);
                }
            }
        /* <?php }?> */]
        }];

        // Add own vtypes to validate password fields
        Ext.apply(Ext.form.field.VTypes, {
            password: function(val, field) {
                if (!field.up('window').edit && !val) return false;
                var repeatField = field.up('window').down('[name=password2]');
                var success = true;
                if (!val) success = true;
                if (val != repeatField.getValue()) success = false;
                if (val.length < 8) success = false;
                repeatField.validate();
                return success;
            },
            passwordText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/password_error','default'=>'Repeat password and use minimum 8 characters!','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/password_error','default'=>'Repeat password and use minimum 8 characters!','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Re-enter password using at least 8 characters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/password_error','default'=>'Repeat password and use minimum 8 characters!','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            passwordRepeat: function(val, field) {
                if (!field.up('window').edit && !val) return false;
                var originalField = field.up('window').down('[name=password]');
                var success = true;
                if (val != originalField.getValue()) success = false;
                return success;
            },
            passwordRepeatText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/password_error_repeat','default'=>'Repeat password properly!','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/password_error_repeat','default'=>'Repeat password properly!','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please re-enter password correctly<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/password_error_repeat','default'=>'Repeat password properly!','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        me.callParent(arguments);
    },

    /**
     *
     * @return
     */
    getUserTab: function(){
      return Ext.create('Ext.tab.Panel',{
            activeTab: 0,
            items: [
               this.getUserForm()
            ]
      });
    },

    /**
     *
     * @return
     */
    getUserPermissions: function(){
       /*return Ext.create('Ext.panel.Panel',{
           title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/tab_permissions','default'=>'Permissions','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/tab_permissions','default'=>'Permissions','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permissions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/tab_permissions','default'=>'Permissions','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
           html: 'Test'
       });*/
    },

    /**
     *
     * @return
     */
    getUserForm: function(){
        var me = this;

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: 's_core_auth_attributes'
        });

        this.formPanel = Ext.create('Ext.form.Panel', {
            border      : false,
            layout      : 'anchor',
            autoScroll:true,
            name: 'main-form',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user/tab_user','default'=>'User','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/tab_user','default'=>'User','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user/tab_user','default'=>'User','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            bodyPadding : 10,
            defaults    : {
                labelWidth: 155
            },
            items : [
                this.getLoginFieldset(),
                this.getApiFieldset(),
                this.getUserBaseFieldset(),
                this.getUserOptionsFieldset(),
                me.attributeForm
            ]
        });
        return this.formPanel;
    },

    /**
     * @return
     */
    getLoginFieldset: function() {
        return Ext.create('Ext.form.FieldSet',
        {
            title: 'Login',
            bodyPadding : 10,
            defaults    : {
                labelWidth: 155
            },
            items: [{
                  // Implementiert das Column Layout
                  xtype: 'container',
                  unstyled: true,
                  layout: 'column',
                  items: [
                  {
                       // Linke Spalte im Column Layout
                       xtype: 'container',
                       unstyled: true,
                       columnWidth: 0.5,
                       items: [
                           {
                                xtype: 'textfield',
                                fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'username','default'=>'Username','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'username','default'=>'Username','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'username','default'=>'Username','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                anchor: '100%',
                                name: 'username',
                                allowBlank: false
                           },
                           {
                               xtype: 'checkbox',
                               name: 'active',
                               boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'enabled','default'=>'Enabled','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'enabled','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enabled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'enabled','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                               anchor: '100%',
                               uncheckedValue: 0,

                               inputValue:1,
                               supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'enabled_info','default'=>'Enable or disable this account','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'enabled_info','default'=>'Enable or disable this account','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable or disable this account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'enabled_info','default'=>'Enable or disable this account','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                           }
                       ]
                  },
                  {
                       // Rechte Spalte im Column Layout
                       xtype: 'container',
                       unstyled: true,
                       columnWidth: 0.5,
                       items: [
                           {
                               xtype: 'passwordmeter',
                               fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'password','default'=>'Password','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'password','default'=>'Password','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'password','default'=>'Password','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                               name: 'password',
                               anchor: '100%',
                               margin: '0 0 20 0',
                               labelAlign: 'left',
                               allowBlank: this.edit,
                               vtype: 'password'
                           },
                           this.getUserPasswordFieldRepeat()
                       ]
                  }
                  ]
                 }]
        }
        );

    },

    /**
     *
     * @return
     */
    getUserPasswordFieldRepeat: function () {
        return Ext.create('Ext.form.field.Text',{
            inputType: 'password',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'repeat_password','default'=>'Repeat password','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'repeat_password','default'=>'Repeat password','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Re-enter password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'repeat_password','default'=>'Repeat password','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'password2',
            anchor: '100%',
            allowBlank: this.edit,
            supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'repeat_password_info','default'=>'Repeat your password','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'repeat_password_info','default'=>'Repeat your password','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Re-enter your password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'repeat_password_info','default'=>'Repeat your password','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            vtype: 'passwordRepeat'
        });
    },

    randomString: function() {
        var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
        var stringlength = 40;
        var randomstring = '';
        for (var i = 0; i < stringlength; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
            randomstring += chars.substring(rnum, rnum + 1);
        }

        return randomstring;
    },


    /**
     * Creates the container for the password field and the generateApiKey button.
     * @return [Ext.container.Container] - Contains the text field and the button
     */
    getApiKeyContainer:function () {
        var me = this;

        //create the password generation button
        me.apiKeyButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-license-key',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'generate_api_key','default'=>'Generate API-Key','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'generate_api_key','default'=>'Generate API-Key','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate API key<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'generate_api_key','default'=>'Generate API-Key','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            width: 24,
            /**
             * Add button handler to fire the generatePassword event which is handled
             * in the detail controller. The detail controller generates a password and set it into the password field
             */
            handler: function () {
                var randomString = me.randomString();
                me.apiKeyField.setValue(randomString);
            }
        });

        me.apiKeyField = Ext.create('Ext.form.field.Text', {
            name:'apiKey',
            labelWidth: 75,
            flex: 1,
            allowBlank: false,
            supportText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'generate_api_key_support_text','default'=>'To use the REST API possibly a server configuration is necessary. <a href=\'http://wiki.shopware.de/_detail_898.html#Server-Configuration\' target=\'_blank\'> More information</a>','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'generate_api_key_support_text','default'=>'To use the REST API possibly a server configuration is necessary. <a href=\'http://wiki.shopware.de/_detail_898.html#Server-Configuration\' target=\'_blank\'> More information</a>','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To use the REST API a server configuration may be necessary. <a href='http://wiki.shopware.de/api-configuration' target='_blank'> Additional information</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'generate_api_key_support_text','default'=>'To use the REST API possibly a server configuration is necessary. <a href=\'http://wiki.shopware.de/_detail_898.html#Server-Configuration\' target=\'_blank\'> More information</a>','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
            readOnly: true,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'api_key','default'=>'API-Key','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'api_key','default'=>'API-Key','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
API key<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'api_key','default'=>'API-Key','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return Ext.create('Ext.container.Container', {
            layout: {
                type: 'hbox',
                pack: 'start'
            },
            items:[ me.apiKeyField, me.apiKeyButton ]
        });
    },



    /**
     * @return
     */
    getApiFieldset: function () {
        var me = this;
        var checked = (me.record.getId() > 0 && me.record.get('apiKey') !== null);

        var fieldset = Ext.create('Ext.form.FieldSet', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'fieldset_api','default'=>'API Access','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'fieldset_api','default'=>'API Access','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
API access<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'fieldset_api','default'=>'API Access','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            bodyPadding: 10,
            items: [{
                // Implementiert das Column Layout
                xtype: 'container',
                unstyled: true,
                layout: 'column',
                items: [{
                    // Linke Spalte im Column Layout
                    xtype: 'container',
                    unstyled: true,
                    columnWidth: 0.3,
                    items: [{
                        xtype: 'checkbox',
                        checked: checked,
                        name: 'apiActive',
                        boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'checkbox_api','default'=>'Enabled','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_api','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enabled<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_api','default'=>'Enabled','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        anchor: '100%',
                        uncheckedValue: 0,
                        inputValue: 1,
                        handler: function (checkbox, checked) {
                            if (checked) {
                                me.apiKeyField.enable();
                                me.apiKeyButton.enable();
                                if (me.lastApiKey.length > 0) {
                                    me.apiKeyField.setValue(me.lastApiKey);
                                } else {
                                    // call button click event to generate API-Key
                                    me.apiKeyButton.handler.call(me.apiKeyButton.scope, me.apiKeyButton, Ext.EventObject);
                                }
                            } else {
                                me.lastApiKey = me.apiKeyField.getValue();
                                me.apiKeyField.setValue('');
                                me.apiKeyField.disable();
                                me.apiKeyButton.disable();
                            }
                        }
                    }]
                }, {
                    // Rechte Spalte im Column Layout
                    xtype: 'container',
                    unstyled: true,
                    columnWidth: 0.7,
                    items: [ me.getApiKeyContainer() ]
                }]
            }]
        });

        if (!checked) {
            me.apiKeyField.disable();
            me.apiKeyButton.disable();
        }

        return fieldset;
    },

    /**
     *
     * @return
     */
    getUserBaseFieldset: function() {
        return Ext.create('Ext.form.FieldSet',
        {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'main_data','default'=>'Main data','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'main_data','default'=>'Main data','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Main data<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'main_data','default'=>'Main data','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            bodyPadding : 10,
            defaults    : {
                labelWidth: 155
            },
            items: [{
                  // Implementiert das Column Layout
                  xtype: 'container',
                  unstyled: true,
                  layout: 'column',
                  items: [
                  {
                       // Linke Spalte im Column Layout
                       xtype: 'container',
                       unstyled: true,
                       columnWidth: 0.5,
                       items: [
                           {
                              xtype: 'textfield',
                              fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'realname','default'=>'Real name','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'realname','default'=>'Real name','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Real name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'realname','default'=>'Real name','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                              anchor: '100%',
                              name: 'name',
                              allowBlank: false
                           },
                           {
                               xtype: 'textfield',
                               fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'email','default'=>'Email address','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'email','default'=>'Email address','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'email','default'=>'Email address','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                               anchor: '100%',
                               vtype: 'remote',
                               validationUrl: '<?php echo '/shopware/backend/base/validateEmail';?>',
                               validationErrorMsg: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'invalid_email','namespace'=>'backend/user_manager/view/main','default'=>'The email address entered is not valid')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invalid_email','namespace'=>'backend/user_manager/view/main','default'=>'The email address entered is not valid'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The email address entered is not valid<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invalid_email','namespace'=>'backend/user_manager/view/main','default'=>'The email address entered is not valid'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                               name: 'email',
                               allowBlank: false

                           }
                       ]
                  },
                  {
                       // Rechte Spalte im Column Layout
                       xtype: 'container',
                       unstyled: true,
                       columnWidth: 0.5,
                       items: [
                           {
                               xtype:'combobox',
                               triggerAction:'all',
                               name:'localeId',
                               fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'language','default'=>'Default language','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'language','default'=>'Default language','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'language','default'=>'Default language','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                               store:this.localeStore,
                               valueField:'id',
                               displayField:'name',
                               queryMode: 'local',
                               mode: 'local',
                               required:true,
                               editable:false,
                               forceSelection:true,
                               listConfig: {
                                 action: 'locale'
                               }

                           },
                           {
                              xtype:'combobox',
                              triggerAction:'all',
                              name:'roleId',
                              fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'role','default'=>'Member of role','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'role','default'=>'Member of role','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Member of role<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'role','default'=>'Member of role','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                              store: this.roleStore,
                              valueField:'id',
                              displayField:'name',
                              mode: 'local',
                              queryMode: 'local',
                              required:true,
                              editable:false,
                              allowBlank:false,
                              listConfig: {
                               action: 'role'
                              }
                          }
                       ]
                  }
                  ]
                 }]
        }
        );
    },

    /**
     * @return
     */
    getUserOptionsFieldset: function() {
        return Ext.create('Ext.form.FieldSet',
                {
                    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'individual_user_options','default'=>'Individual user options','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'individual_user_options','default'=>'Individual user options','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Individual user options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'individual_user_options','default'=>'Individual user options','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    bodyPadding : 10,
                    defaults    : {
                        labelWidth: 155
                    },
                    items: [{
                        // Implementiert das Column Layout
                        xtype: 'container',
                        unstyled: true,
                        layout: 'column',
                        items: [
                            {
                                // Linke Spalte im Column Layout
                                xtype: 'container',
                                unstyled: true,
                                columnWidth: 0.5,
                                items: [
                                    {
                                        xtype: 'checkbox',
                                        name: 'extendedEditor',
                                        boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'checkbox_extended_editor','default'=>'Extended Editor','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_extended_editor','default'=>'Extended Editor','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Extended editor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_extended_editor','default'=>'Extended Editor','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                        anchor: '100%',
                                        uncheckedValue: 0,
                                        inputValue: 1,
                                        supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'checkbox_extended_editor_info','default'=>'Enable or disable extended editor','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_extended_editor_info','default'=>'Enable or disable extended editor','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable or disable extended editor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_extended_editor_info','default'=>'Enable or disable extended editor','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                                    },
                                    {
                                        xtype: 'checkbox',
                                        name: 'disabledCache',
                                        boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'checkbox_disabled_cache','default'=>'Disabled cache','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_disabled_cache','default'=>'Disabled cache','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Disabled cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_disabled_cache','default'=>'Disabled cache','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                        anchor: '100%',
                                        uncheckedValue: 0,
                                        inputValue: 1,
                                        supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_user'/'checkbox_disabled_cache_info','default'=>'Enable or disable backend-cache','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_disabled_cache_info','default'=>'Enable or disable backend-cache','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable or disable backend cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_user'/'checkbox_disabled_cache_info','default'=>'Enable or disable backend-cache','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                                    }
                                 ]
                            },
                            {
                                // Rechte Spalte im Column Layout
                                xtype: 'container',
                                unstyled: true,
                                columnWidth: 0.5,
                                items: []
                            }
                        ]
                    }]
                }
        );
    }
});
//
<?php }} ?>