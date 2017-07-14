Ext.define('Abargon.reserve.view.desktop.events.view.Grid', {
    extend: 'Ext.grid.Panel',    
    alias: 'widget.reserveEventsViewGrid',
    
    requires: [
        'Melisa.ux.grid.Filters',
        'Melisa.ux.FloatingButton',
        'Melisa.ux.confirmation.Button'
    ],
    
    emptyText: 'No hay eventos registrados',
    deferEmptyText: true,
    bind: {
        store: '{events}'
    },
    columns: [
        {
            dataIndex: 'id',
            text: 'Id',
            hidden: true
        },
        {
            dataIndex: 'name',
            text: 'Nombre',
            flex: 1
        },
        {
            dataIndex: 'maximumCapacity',
            text: 'Capacidad máxima',
            width: 160,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            dataIndex: 'totalReservations',
            text: 'Total de reservaciones',
            width: 160,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            dataIndex: 'startDate',
            text: 'Fecha de inicio',
            width: 160,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            dataIndex: 'endDate',
            text: 'Fecha fin',
            width: 160,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'datecolumn',
            dataIndex: 'createdAt',
            text: 'Fecha creación',
            format:'d/m/Y h:i:s a',
            width: 180,
            bind: {
                hidden: '{hiddenColumns}'
            }
        },
        {
            xtype: 'datecolumn',
            dataIndex: 'updatedAt',
            text: 'Fecha modificación',
            width: 180,
            format:'d/m/Y h:i:s a',
            hidden: true
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                iconCls: 'x-fa fa-pencil',
                tooltip: 'Modificar evento',
                bind: {
                    melisa: '{modules.update}',
                    hidden: '{!modules.update.allowed}'
                },
                listeners: {
                    click: 'moduleRun',
                    loaded: 'onLoadedModuleUpdate'
                }
            }
        },
        {
            xtype: 'widgetcolumn',
            width: 30,
            widget: {
                xtype: 'button',
                iconCls: 'x-fa fa-trash',
                tooltip: 'Eliminar evento',
                bind: {
                    melisa: '{modules.delete}',
                    hidden: '{!modules.delete.allowed}'
                },
                plugins: {
                    ptype: 'buttonconfirmation',
                    messageSuccess: 'Evento eliminado'
                }
            }
        }
    ],
    selModel: {
        selType: 'checkboxmodel'
    },
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
    plugins: [
        {
            ptype: 'autofilters',
            filters: {
                name: {
                    minChars: 1,
                    operator: 'like'
                }
            }
        },
        {
            ptype: 'floatingbutton',
            configButton: {
                iconCls: 'x-fa fa-plus',
                cls: 'floating-button',
                scale: 'large',
                handler: 'moduleRun',
                tooltip: 'Agregar evento',
                bind: {
                    melisa: '{modules.add}',
                    hidden: '{!modules.add.allowed}'
                }
            }
        }
    ]
});
