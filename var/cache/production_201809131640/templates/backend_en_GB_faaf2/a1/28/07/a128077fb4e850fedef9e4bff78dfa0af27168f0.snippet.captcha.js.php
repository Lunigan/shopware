<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:09
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\store\captcha.js" */ ?>
<?php /*%%SmartyHeaderCode:6117032855bbc971ddd8f45-71948190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a128077fb4e850fedef9e4bff78dfa0af27168f0' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\store\\captcha.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6117032855bbc971ddd8f45-71948190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971dddd5c7_61132946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971dddd5c7_61132946')) {function content_5bbc971dddd5c7_61132946($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */


Ext.define('Shopware.apps.Base.store.Captcha', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Captcha',
    storeId: 'base.Captcha',
    model: 'Shopware.apps.Base.model.Captcha',

    proxy:{
        type: 'ajax',
        url: '<?php echo '/shopware/backend/base/getAvailableCaptchas';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>