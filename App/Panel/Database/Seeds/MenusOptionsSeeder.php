<?php 

namespace App\Panel\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class MenusOptionsSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->installMenuOptions([
            'menu.panel.main'=>[
                'option.reserve.events.view.access',
                'option.security.my.profile.settings.view.access',
                'option.people.contacts.view.access',
                'option.events.binnacle.view.access',
                'option.drive.browser.view.access',
                'option.security.access'=>[
                    'option.security.rbacRoles.view.access',
                    'option.security.users.view.access'
                ]
            ],
            'menu.panel.phone.main'=>[
                'option.phone.reserve.events.view.access',
                'option.chat.phone.chat.view.access',
                'option.chat.phone.chat.view.access'
            ],
        ]);        
    }
    
}
