<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:15
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\order\model\detail_batch.js" */ ?>
<?php /*%%SmartyHeaderCode:1949094245bbc97236091e2-82138165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527e97aa834d1bdde9ae2c959b344eade14e8633' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\order\\model\\detail_batch.js',
      1 => 1537260004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949094245bbc97236091e2-82138165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc972360dee3_71692081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc972360dee3_71692081')) {function content_5bbc972360dee3_71692081($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage DetailBatch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order models.
 *
 * The detail_batch model ist responsible to load all other stores needed for the detail page.
 *
 */
//
Ext.define('Shopware.apps.Order.model.DetailBatch', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The batch model is only a data container which contains all
    * data for the global stores in the model association data.
    * An Ext.data.Model needs one field.
    * @array
    */
    fields: [
       //
       'id'
    ],

    /**
     * Define the associations of the order model.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Base.model.OrderStatus', name:'getOrderStatus', associationKey:'orderStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.PaymentStatus', name:'getPaymentStatus', associationKey:'paymentStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Shop', name:'getShops', associationKey:'shops' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Country', name:'getCountries', associationKey:'countries' },
        { type:'hasMany', model:'Shopware.apps.Base.model.CountryState', name:'getState', associationKey:'states' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Payment', name:'getPayments', associationKey:'payments' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Dispatch', name:'getDispatches', associationKey:'dispatches' },
        { type:'hasMany', model:'Shopware.apps.Base.model.DocType', name:'getDocumentTypes', associationKey:'documentTypes' },
    ]
});
//

<?php }} ?>