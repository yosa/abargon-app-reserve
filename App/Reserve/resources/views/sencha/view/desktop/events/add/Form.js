Ext.define('Abargon.reserve.view.desktop.events.add.Form', {
    extend: 'Ext.form.Panel',
    alias: 'widget.reserveEventsAddForm',
    
    scrollable: true,
    defaults: {
        allowBlank: false,
        anchor: '100%'
    },
    items: [
        {
            xtype: 'fieldcontainer',
            layout: 'hbox',
            items: [
                {
                    xtype: 'textfield',
                    name: 'name',
                    fieldLabel: 'Nombre',
                    itemId: 'txtName',
                    flex: 1
                },
                {
                    xtype: 'numberfield',
                    name: 'maximumCapacity',
                    fieldLabel: 'Límite de personas',
                    margin: '0 0 0 10',
                    minValue: 1,
                    value: 1,
                    width: 120
                }
            ]
        },
        {
            xtype: 'fieldset',
            layout: 'hbox',
            title: 'Fecha',
            defaults: {
                xtype: 'datefield',
                flex: 1
            },
            items: [
                {                    
                    name: 'startDate',
                    fieldLabel: 'Inicio'
                },
                {
                    name: 'endDate',
                    fieldLabel: 'Fin',
                    margin: '0 0 0 10'
                }
            ]
        },
        {
            xtype: 'fieldcontainer',
            layout: 'hbox',
            items: [
                {
                    xtype: 'textfield',
                    fieldLabel: 'Foto',
                    name: 'idPhoto',
                    itemId: 'txtIdPhoto',
                    flex: 1,
                    bind: {
                        melisa: '{modules.filesSelect}',
                        hidden: '{!modules.filesSelect.allowed}',
                    },
                    triggers: {
                        foo: {
                            handler: 'moduleRun'
                        }
                    },
                    listeners: {
                        loaded: 'onLoadedModuleSelectFile'
                    }
                },
                {
                    xtype: 'checkbox',
                    name: 'outstanding',
                    fieldLabel: 'Destacado',
                    margin: '0 0 0 10'
                }
            ]
        },
        {
            xtype: 'textarea',
            name: 'description',
            fieldLabel: 'Descripción'
        }
    ]
});
