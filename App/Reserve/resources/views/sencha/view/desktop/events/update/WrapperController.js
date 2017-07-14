Ext.define('Abargon.reserve.view.desktop.events.update.WrapperController', {
    extend: 'Abargon.reserve.view.desktop.events.add.WrapperController',
    alias: 'controller.reserveEventsUpdate',
    
    mixins: {
        appendfields: 'Melisa.controller.AppendFields',
        loaddata: 'Melisa.controller.LoadData',
        update: 'Melisa.controller.Update'
    },
    
    eventSuccess: 'event.reserve.events.update.success',
    
//    onSuccessLoadData: function(data) {
//        console.log(data);
//        data.startDate = Ext.Date.format(data.startDate, 'm/d/Y');
//        data.endDate = Ext.Date.format(data.endDate, 'm/d/Y');
//        console.log(data.startDate);
//        this.mixins.update.onSuccessLoadData.call(this, data);
//    }
    
});
