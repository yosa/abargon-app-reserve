Ext.define('Abargon.reserve.view.universal.events.view.WrapperModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.reserveEventsView',
    
    stores: {
        events: {
            autoLoad: true,
            remoteFilter: true,
            proxy: {
                type: 'ajax',
                url: '{modules.events}',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            }
        }
    }
    
});
