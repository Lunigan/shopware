<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:10
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\component\element\select.js" */ ?>
<?php /*%%SmartyHeaderCode:2156864865bbc971e5c18f0-12090850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1a7f89d13c7f627e585cd01604d5e036911b90' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\component\\element\\select.js',
      1 => 1537259997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156864865bbc971e5c18f0-12090850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971e5cb4d9_27160299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971e5cb4d9_27160299')) {function content_5bbc971e5cb4d9_27160299($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.view.element.Select', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-select',
        'widget.base-element-combo',
        'widget.base-element-combobox',
        'widget.base-element-comboremote'
    ],

    queryMode:'local',
    forceSelection: false,
    editable: true,
    valueField: 'id',
    displayField: 'name',

    initComponent:function () {
        var me = this;

        if (me.controller && me.action) {
            //me.value = parseInt(me.value);
            me.store = new Ext.data.Store({
                url:'<?php echo '/shopware/backend';?>/' + me.controller + '/' + me.action,
                autoLoad:true,
                remoteFilter: true,
                reader:new Ext.data.JsonReader({
                    root:me.root || 'data',
                    totalProperty:me.count || 'total',
                    fields:me.fields
                })
            });
            // Remove value field for reasons of compatibility
            me.valueField = me.displayField;
        }
        // Eval the store string if it contains a statement.
        if (typeof(me.store) == 'string' && me.store.indexOf('new ') !== -1) {
            //me.value = parseInt(me.value);
            eval('me.store = ' + me.store + ';');
            // Remove value field for reasons of compatibility
            me.valueField = me.displayField;
        } else if (typeof(me.store) === 'string' && me.store.substring(0, 5) !== 'base.') {
            me.store = me.getStoreById(me.store);
        }

        if (me.store instanceof Ext.data.Store && me.filter) {
            // Apply the filter on the store
            me.store.clearFilter(true);
            me.store.filter(me.filter);
        }

        me.callParent(arguments);
    },

    setValue:function (value) {
        var me = this;

        if (value !== null && !me.store.loading && me.store.getCount() == 0) {
            me.store.load({
                callback:function () {
                    if(me.store.getCount() > 0) {
                        me.setValue(value);
                    } else {
                        me.setValue(null);
                    }
                }
            });
            return;
        }

        me.callParent(arguments);
    },

    /**
     * plugin example usage:
     * public function install()
     * {
     *     $form = $this->Form();
     *
     *     $form->setElement("select", "test123", [
     *         "valueField" => "id",
     *         "displayField" => "name",
     *         "queryMode" => "remote",
     *         "store" => "Shopware.apps.Base.store.Country"
     *     ]);
     *
     *     return true;
     * }
     *
     * @param storeId string
     * @return Ext.data.Store|null
     */
    getStoreById: function(storeId) {
        // Try to find any previously-loaded config select store for the given storeId
        var configSelectStoreId = 'Shopware.apps.Base.view.element.Select.store.' + storeId;
        // If filters are defined on this element, we need to use a different store for that filter combination
        // The filter gets applied in `initComponent()` above.
        if (this.filter) {
            configSelectStoreId += '.filter.' + JSON.stringify(this.filter);
        }
        var store = Ext.data.StoreManager.lookup(configSelectStoreId);

        if (store) {
            return store;
        }

        try {
            store = Ext.create(storeId, {
                storeId: configSelectStoreId,
                pageSize: 1000
            });
            // Override the load() method so the store is only ever loaded once
            Ext.override(store, {
                load: function () {
                    if (!this.loadCalled) {
                        this.loadCalled = true;
                        this.callParent(arguments);
                    } else {
                        this.fireEvent('load', this)
                    }
                }
            });

            return store;
        } catch (e) {
            // Store class was not found - no such store exists
            return null;
        }
    }
});
<?php }} ?>