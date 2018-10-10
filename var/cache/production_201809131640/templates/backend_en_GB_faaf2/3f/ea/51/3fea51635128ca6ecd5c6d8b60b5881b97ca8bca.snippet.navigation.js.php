<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\view\main\navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:16973554085bbdaa61ad5b19-77983520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fea51635128ca6ecd5c6d8b60b5881b97ca8bca' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\view\\main\\navigation.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16973554085bbdaa61ad5b19-77983520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61ae24f6_18070566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61ae24f6_18070566')) {function content_5bbdaa61ae24f6_18070566($_smarty_tpl) {?>/**
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
 * Shopware UI - User Manager Navigation
 *
 * This file represents the navigation of the module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.UserManager.view.main.Navigation', {
    extend: 'Ext.panel.Panel',
    region: 'west',
    alias: 'widget.usermanager-main-navigation',
    layout: 'accordion',
    autoScroll: true,
    border: false,
    items: [],
    width: 250,
    defaults: {
        bodyPadding: 10
    },
    /**
     * Initialize the navigation bar and add navigation items
     *
     * @return void
     */
    initComponent: function() {

        // Panel with a button to push
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
        this.generalPnl = Ext.create('Ext.panel.Panel', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'navigation_user_title','default'=>'Users and roles','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_user_title','default'=>'Users and roles','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users and roles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_user_title','default'=>'Users and roles','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            layout: 'anchor',
            defaults: {
                margin: '0 0 5',
                align: 'stretch'
            },
            items: [{
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'navigation_userlist','default'=>'List of users','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_userlist','default'=>'List of users','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List of users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_userlist','default'=>'List of users','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'open-user-view',
                iconCls: 'sprite-user--list',
                anchor: '100%',
                cls: 'small secondary'
            }, {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'navigation_rolelist','default'=>'List of roles','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_rolelist','default'=>'List of roles','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List of roles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_rolelist','default'=>'List of roles','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'open-roles-view',
                iconCls: 'sprite-users',
                anchor: '100%',
                cls: 'small secondary'
            },
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'navigation_rights_assignment','default'=>'Edit rules & permissions','namespace'=>'backend/user_manager/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_rights_assignment','default'=>'Edit rules & permissions','namespace'=>'backend/user_manager/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit rules & permissions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'navigation_rights_assignment','default'=>'Edit rules & permissions','namespace'=>'backend/user_manager/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'open-rules-view',
                iconCls: 'sprite-key--pencil',
                anchor: '100%',
                cls: 'small secondary'
            }
            ]
        });

        this.items = [ this.generalPnl];
        /* <?php }?> */
        this.callParent(arguments);
    }
});
//
<?php }} ?>