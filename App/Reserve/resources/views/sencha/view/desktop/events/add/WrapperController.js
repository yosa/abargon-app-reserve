Ext.define('Abargon.reserve.view.desktop.events.add.WrapperController', {
    extend: 'Melisa.controller.Create',
    alias: 'controller.reserveEventsAdd',
    
    eventSuccess: 'event.reserve.events.create.success',
    
    listeners: {
        selectedfile: 'onSelectedFile'
    },
    
    onSelectedFile: function(sel) {
        var me = this,
            txtIdPhoto = me.getView().down('#txtIdPhoto');
    
        txtIdPhoto.setValue(sel[0].get('id'));
    },
    
    onLoadedModuleSelectFile: function(module, options) {
        module.fireEvent('loaddata', this, 'selectedfile', {}, options.launcher);
    }
    
});
