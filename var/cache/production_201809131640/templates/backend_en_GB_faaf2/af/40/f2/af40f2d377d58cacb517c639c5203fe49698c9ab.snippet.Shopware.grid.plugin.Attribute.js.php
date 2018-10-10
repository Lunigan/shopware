<?php /* Smarty version Smarty-3.1.12, created on 2018-10-09 13:55:11
         compiled from "C:\XAMPP\xampp\htdocs\shopware\themes\Backend\ExtJs\backend\base\attribute\Shopware.grid.plugin.Attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:11882480345bbc971f082a94-68196884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af40f2d377d58cacb517c639c5203fe49698c9ab' => 
    array (
      0 => 'C:\\XAMPP\\xampp\\htdocs\\shopware\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\Shopware.grid.plugin.Attribute.js',
      1 => 1537259996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11882480345bbc971f082a94-68196884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bbc971f088a02_55175730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbc971f088a02_55175730')) {function content_5bbc971f088a02_55175730($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//
Ext.define('Shopware.grid.plugin.Attribute', {
    extend: 'Ext.AbstractPlugin',
    alias: [ 'plugin.grid-attributes' ],
    requires: [ 'Ext.grid.column.Column' ],

    table: null,
    windowTitle: null,
    allowTranslation: true,

    backendAttributes: [],
    createActionColumn: true,

    init: function(grid) {
        var me = this;

        me.loadConfig(function() {
            if (me.grid.getStore()) {
                me.grid.reconfigure(me.grid.getStore());
            } else {
                me.onReconfigure();
            }
        });
        me.grid = grid;
        me.grid.on('reconfigure', me.onReconfigure, me);
        me.callParent(arguments);
    },

    loadConfig: function(callback) {
        var me = this;

        me.store = Ext.create('Shopware.store.AttributeConfig');
        me.store.getProxy().extraParams = { table: me.table };
        me.store.load(function(attributes) {
            me.backendAttributes = me.filterAttributes(attributes);
            me.grid.backendAttributes = me.backendAttributes;
            callback();
        });
    },

    filterAttributes: function(attributes) {
        var me = this,
            toDisplay = [];

        Ext.each(attributes, function(attribute) {
            if (attribute.get('displayInBackend')) {
                toDisplay.push(attribute);
            }
        });
        return toDisplay;
    },

    onReconfigure: function() {
        var me = this, items = [], width = 0;

        if (me.createActionColumn === false) {
            return;
        }
        if (me.backendAttributes.length <= 0) {
            return;
        }

        var actionColumn = me.getActionColumn();
        if (actionColumn) {
            items = actionColumn.items;
            width = actionColumn.width;
        }

        if (actionColumn) {
            me.grid.headerCt.remove(actionColumn);
        }

        if (!me.hasAttributeColumn(items)) {
            items.push(me.createActionColumnItem());
            width += 30;
        }

        actionColumn = Ext.create('Ext.grid.column.Action', {
            width: width,
            items: items
        });

        me.grid.headerCt.insert(actionColumn);
    },

    hasAttributeColumn: function(items) {
        var exist = false;

        Ext.each(items, function(item) {
            if (item.name == 'grid-attribute-plugin') {
                exist = true;
                return true;
            }
        });

        return exist;
    },

    createActionColumnItem: function() {
        var me = this;

        return {
            iconCls: 'sprite-attributes',
            name: 'grid-attribute-plugin',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.actionColumnClick(record);
            },
            getClass: me.columnRenderer
        };
    },

    columnRenderer: function(value, meta, record) {
        if (!record.get('id')) {
            return 'x-hidden';
        }
    },

    getActionColumn: function() {
        var me = this;
        var columns = me.grid.headerCt;
        var actionColumn = null;

        columns.items.each(function(column) {
            if (column.getXType() === 'actioncolumn') {
                actionColumn = column;
                return true;
            }
        });
        return actionColumn;
    },

    actionColumnClick: function(record) {
        var me = this;

        me.attributeWindow = Ext.create('Shopware.attribute.Window', {
            table: me.table,
            title: me.windowTitle,
            record: record,
            allowTranslation: me.allowTranslation
        });
        me.attributeWindow.show();
    }
});
//<?php }} ?>