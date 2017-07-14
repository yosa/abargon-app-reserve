Ext.define('Abargon.reserve.view.desktop.events.update.Wrapper', {
    extend: 'Abargon.reserve.view.desktop.events.add.Wrapper',
    
    requires: [
        'Abargon.reserve.view.desktop.events.add.Wrapper',
        'Abargon.reserve.view.desktop.events.update.WrapperController'
    ],    
    
    controller: 'reserveEventsUpdate',
    
    listeners: {
        loaddata: 'onLoadData',
        successloadremotedata: 'onSuccessLoadData',
        beforeloaddata: 'onBeforeLoadData'
    }
});
