<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:29:37
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\user_manager\store\locale.js" */ ?>
<?php /*%%SmartyHeaderCode:16480411975bbdaa61caf709-09053965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33b1e99075f9a62c4093964f297f372585d90b8e' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\user_manager\\store\\locale.js',
      1 => 1537260008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16480411975bbdaa61caf709-09053965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaa61cb4713_94407271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaa61cb4713_94407271')) {function content_5bbdaa61cb4713_94407271($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.UserManager.store.Locale', {
    extend: 'Ext.data.Store',
    model : 'Shopware.apps.UserManager.model.Locale',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/shopware/backend/login/getLocales';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
<?php }} ?>