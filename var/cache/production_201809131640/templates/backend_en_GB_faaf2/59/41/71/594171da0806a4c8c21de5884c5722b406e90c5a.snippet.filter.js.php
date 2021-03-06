<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:16
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\order\controller\filter.js" */ ?>
<?php /*%%SmartyHeaderCode:5186435955bbc97243ee6c5-66699463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594171da0806a4c8c21de5884c5722b406e90c5a' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\order\\controller\\filter.js',
      1 => 1537260004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5186435955bbc97243ee6c5-66699463',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc97243f3941_98364210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc97243f3941_98364210')) {function content_5bbc97243f3941_98364210($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Order backend module
 *
 * The order module main controller handles the initialisation of the order backend module.
 * It is possible to pass a order id to the module to open the detail window directly. To
 * open the detail window directly pass the order id in the parameter "orderId".
 */
//
Ext.define('Shopware.apps.Order.controller.Filter', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init:function () {
        var me = this;

        me.control({
            'order-list-main-window order-list': {
                searchOrders: me.onSearchOrders
            },
            'order-list-main-window order-list-filter': {
                acceptFilters: me.onAcceptFilters,
                resetFilters: me.onResetFilters
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener method which is fired when the user insert a search string
     * into the search field which displayed on top of the order list.
     * @param value
     */
    onSearchOrders: function(value) {
        var me = this,
            store = me.subApplication.getStore('Order');

        if (store.filters.containsKey('free')) {
            store.filters.removeAtKey('free');
        }

        if (value.length > 0) {
            store.filters.add('free', Ext.create('Ext.util.Filter', { property: 'free', value: Ext.String.trim(value) }));
        }

        //scroll the store to first page
        store.currentPage = 1;

        store.filter();
    },

    /**
     * Filters the store with the passed field values.
     * @param values
     */
    onAcceptFilters: function(values) {
        var me = this,
            store = me.subApplication.getStore('Order'),
            filters= [];

        Ext.Object.each(values, function(key, value) {
            //format the value to an string, to check if the value length is greater than one
            var tmpValue = Ext.String.trim(value + '');

            //the article search returns two values the display and hidden value.
            //We need only the hidden value, so we skip the displayed value.
            if (key !== 'live-article-search' ) {

                //the article search needs a special handling.
                if (key === 'hidden-article-search') {
                    if (tmpValue.length > 0 && values["live-article-search"].length > 0) {
                        filters.push(Ext.create('Ext.util.Filter',{ property: 'details.articleNumber', value: value }));
                    }
                } else {
                    if (tmpValue.length > 0) {
                        filters.push(Ext.create('Ext.util.Filter',{ property: key, value: value }));
                    }
                }
            }
        });

        if (store.filters.containsKey('free')) {
            filters.push(store.filters.getByKey('free'));
        }

        //scroll the store to first page
        store.currentPage = 1;

        if (filters.length > 0) {
            store.filters.clear();
            store.filter(filters);
        } else {
            if (store.filters.length > 0) {
                store.clearFilter();
            }
        }
    },

    /**
     * Event listener method which is fired when the user
     * clicks the "reset filters" button.
     * @param form
     */
    onResetFilters: function(form) {
        var me = this,
            freeFilter = null,
            store = me.subApplication.getStore('Order');

        //reset form values.
        if (!form) {
            return;
        }
        form.getForm().reset();

        if (store.filters.length === 0) {
            return;
        }

        //don't remove the full text filter
        if (store.filters.containsKey('free')) {
            freeFilter = store.filters.getByKey('free');
        }
        //clear store filters
        store.filters.clear();

        if (freeFilter) {
            store.filter(freeFilter);
        } else {
            store.load();
        }



    }
});
//
<?php }} ?>