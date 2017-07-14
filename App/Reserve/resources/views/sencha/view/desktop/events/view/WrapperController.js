Ext.define('Abargon.reserve.view.desktop.events.view.WrapperController', {
    extend: 'Melisa.controller.View',
    alias: 'controller.reserveEventsView',
    
    requires: [
        'Melisa.controller.View'
    ],
    
    listen: {
        global: {
            'event.reserve.events.create.success': 'onUpdatedRecord',
            'event.reserve.events.update.success': 'onUpdatedRecord'
        }
    },
    
    storeReload: 'events',
    windowReportConfig: {
        title: 'Evento'
    },
    
    onSelectionChangeInsuranceApplications: function(sm, selection) {
        var me = this,
            vm = me.getViewModel(),
            view = me.getView();
    
        if( Ext.isEmpty(selection)) {
            vm.set('hiddenColumns', false);
            vm.getStore('certificatesApplications').removeAll();
            view.down('#panDetails').collapse();
            return;
        }
        
        view.down('#panDetails').expand();
        vm.set('hiddenColumns', true);
        vm.set('idInsuranceApplication', selection[0].get('id'));
        vm.notify();
        Ext.defer(function() {
            vm.getStore('certificatesApplications').load();
        }, 500);
    }
    
});
