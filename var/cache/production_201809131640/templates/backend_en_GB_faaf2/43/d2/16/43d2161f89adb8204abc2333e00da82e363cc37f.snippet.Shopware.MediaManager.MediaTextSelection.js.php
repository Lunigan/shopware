<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:09
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\component\Shopware.MediaManager.MediaTextSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:4687001945bbc971df3c8d2-81861720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43d2161f89adb8204abc2333e00da82e363cc37f' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\component\\Shopware.MediaManager.MediaTextSelection.js',
      1 => 1537259996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4687001945bbc971df3c8d2-81861720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971df3e7d6_02861340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971df3e7d6_02861340')) {function content_5bbc971df3e7d6_02861340($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Media Manager - Media Selection
 *
 * This components provides an easy to use way to select
 * media in the media manager selection and passes the
 * selected media to the module which includes this component.
 *
 * Alternate class names for this class are:
 * - Shopware.form.field.MediaTextSelection
 * - Shopware.MediaTextSelection
 *
 * @example Ext.create('Shopware.MediaManager.MediaSelection');
 */
Ext.define('Shopware.MediaManager.MediaTextSelection',
/** @lends Shopware.MediaManager.MediaSelection */
{
    extend: 'Shopware.MediaManager.MediaSelection',
    alternateClassName: [ 'Shopware.form.field.MediaTextSelection', 'Shopware.MediaTextSelection' ],
    alias: [ 'widget.mediatextfield', 'widget.mediatextselectionfield' ],

    /**
     * Unlike with the normal Media selection field, the readOnly config defaults to false in Media text selection field.
     * @boolean
     */
    readOnly: false,

    /**
     * True to allow selection of more than one item at a time, false to allow selection of only a single item at a time or no selection at all
     * @boolean
     */
    multiSelect: false
});
<?php }} ?>