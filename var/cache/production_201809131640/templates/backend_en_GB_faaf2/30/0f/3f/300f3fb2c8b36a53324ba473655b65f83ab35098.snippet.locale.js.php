<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:09
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\model\locale.js" */ ?>
<?php /*%%SmartyHeaderCode:19382036515bbc971d8023e7-63198228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300f3fb2c8b36a53324ba473655b65f83ab35098' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\model\\locale.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19382036515bbc971d8023e7-63198228',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971d805c67_91859657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971d805c67_91859657')) {function content_5bbc971d805c67_91859657($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Global Stores and Models
 *
 * The dispatch model represents a data row of the s_premium_dispatch or the
 * Shopware\Models\Dispatch\Dispatch doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Locale', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: ['Shopware.model.Locales', 'Shopware.model.Locale'],

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

    /**
    * The fields used for this model
    * @array
    */
    fields: [
        //
        { name : 'id', type : 'int' },
        { name: 'name', type: 'string', convert: function(v, record) {
            return record.data.language + ' (' + record.data.territory + ')';
        } },
        { name: 'language', type : 'string' },
        { name: 'territory', type : 'string' },
        { name: 'locale', type : 'string' }
    ]
});
//
<?php }} ?>