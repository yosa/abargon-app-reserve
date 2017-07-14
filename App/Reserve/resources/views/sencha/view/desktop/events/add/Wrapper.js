Ext.define('Abargon.reserve.view.desktop.events.add.Wrapper', {
    extend: 'Melisa.view.desktop.wrapper.window.Add',
    
    requires: [
        'Abargon.reserve.view.desktop.events.add.Form',
        'Abargon.reserve.view.desktop.events.add.WrapperController'
    ],
    
    iconCls: 'x-fa fa-calendar',
    defaultFocus: 'txtName',
    controller: 'reserveEventsAdd',
    cls: 'app-reserve-events',
    height: '100%',
    plugins: 'responsive',
    bodyPadding: 0,
    viewModel: {},
    responsiveConfig: {
        'width > 1024': {
            width: 1024
        },
        'width <= 1024': {
            width: '90%'
        }
    },
    items: [
        {
            xtype: 'reserveEventsAddForm'
        }
    ]
});
