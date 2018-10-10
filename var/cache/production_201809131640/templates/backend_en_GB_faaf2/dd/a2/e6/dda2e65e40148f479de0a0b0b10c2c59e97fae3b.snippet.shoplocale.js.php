<?php /* Smarty version Smarty-3.1.12, created on 2018-10-10 09:31:46
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\snippet\store\shoplocale.js" */ ?>
<?php /*%%SmartyHeaderCode:14646083745bbdaae21d2631-08517067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda2e65e40148f479de0a0b0b10c2c59e97fae3b' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\snippet\\store\\shoplocale.js',
      1 => 1537260007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14646083745bbdaae21d2631-08517067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbdaae21d62a0_16229309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbdaae21d62a0_16229309')) {function content_5bbdaae21d62a0_16229309($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Snippet.store.Shoplocale', {
    extend: 'Ext.data.Store',
    batch: true,
    autoLoad: false,
    model : 'Shopware.apps.Snippet.model.Shoplocale'
});
//
<?php }} ?>