<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:10
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\component\Shopware.window.ExpiredPluginStop.js" */ ?>
<?php /*%%SmartyHeaderCode:9025743795bbc971e3ccd32-83523577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5131d3a8ef93826a8a39de4d576bc1afeefc1f64' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\component\\Shopware.window.ExpiredPluginStop.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9025743795bbc971e3ccd32-83523577',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971e3dabc1_99738255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971e3dabc1_99738255')) {function content_5bbc971e3dabc1_99738255($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */
//

Ext.define('Shopware.window.ExpiredPluginStop', {
    extend: 'Shopware.window.ExpiredPluginWarning',
    closable: false,
    minimizable: false,
    maximizable: false,

    getImage: function() {
        return '/shopware/themes/Backend/ExtJs/backend/_resources/images/plugin_manager/stop.svg';
    },

    getText: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_stop/content','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/content','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<h2>Warning!</h2><p>At least one of your plugin licenses has expired. You can review this in your <a href=https://accounts.shopware.com target=_blank>Shopware account</a> under <strong>“Licenses”</strong>, where you can also immediately renew your license. Failing to do so forces us to take legal actions on behalf of the plugin manufacturer.</p><p>With any questions, you can contact us at <a href=mailto:sales@shopware.com>sales@shopware.com</a>. You can also reach us M-F by calling <a href=tel:+4402030952445>+44 (0) 203 095 2445</a> (UK 8am – 4pm GMT) / <a href=tel:0080074676260>00 800 746 7626 0</a> (worldwide 9am – 5pm CET).</p><p>Your Shopware team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/content','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    getWindowButtons: function() {
        var me = this;

        return [
            {
                xtype: 'checkbox',
                listeners: {
                    change: function (checkbox, newValue) {
                        me.query('button').forEach(function (button) {
                            button.setDisabled(!newValue);
                        })
                    }
                }
            },
            {
                xtype: 'container',
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_stop/checkbox','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/checkbox','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Yes, I have taken note of this warning.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/checkbox','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                style: {
                    'margin-left': '5px'
                }
            },
            '->',
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_stop/cancel','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/cancel','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Okay, got it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/cancel','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'secondary',
                disabled: true,
                handler: function () {
                    me.destroy();
                }
            },
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_stop/goToPluginManager','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove plugin(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_stop/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'primary',
                disabled: true,
                handler: function () {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.PluginManager',
                        action: 'ExpiredPlugins'
                    });

                    me.destroy();
                }
            }
        ];
    }
});<?php }} ?>