Ext.define('Abargon.reserve.view.desktop.events.view.Wrapper', {
    extend: 'Ext.panel.Panel',
    
    requires: [
        'Melisa.core.Module',
        'Abargon.reserve.view.universal.events.view.WrapperModel',
        'Abargon.reserve.view.desktop.events.view.WrapperController',
        'Abargon.reserve.view.desktop.events.view.Grid'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    iconCls: 'x-fa fa-calendar',
    layout: 'border',
    controller: 'reserveEventsView',
    viewModel: {
        type: 'reserveEventsView'
    },
    items: [
        {
            xtype: 'reserveEventsViewGrid',
            region: 'center',
            listeners: {
                itemdblclick: 'onShowItemReport',
                selectionchange: 'onSelectionChangeInsuranceApplications'
            }
        }
    ]
});