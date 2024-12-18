<?php namespace PilotWFC\Addresses;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Addresses',
            'description' => 'No description provided yet...',
            'author' => 'PilotWFC',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [];
    }

    public function registerPermissions()
    {
        return [
            'pilotwfc.addresses.access_addresses' => [
                'tab'   => 'Адреса',
                'label' => 'Управление адресами',
            ],
            'pilotwfc.addresses.access_categories' => [
                'tab'   => 'Категории',
                'label' => 'Управление категориями',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'addresses' => [
                'label'       => 'Адреса',
                'url'         => Backend::url('pilotwfc/addresses/addresses'),
                'icon'        => 'icon-map',
                'permissions' => ['pilotwfc.addresses.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'addresses' => [
                        'label'       => 'Адреса',
                        'icon'        => 'icon-map-marker',
                        'url'         => Backend::url('pilotwfc/addresses/addresses'),
                        'permissions' => ['pilotwfc.addresses.access_addresses'],
                    ],
                    'categories' => [
                        'label'       => 'Категории',
                        'icon'        => 'icon-tags',
                        'url'         => Backend::url('pilotwfc/addresses/categories'),
                        'permissions' => ['pilotwfc.addresses.access_categories'],
                    ],
                ],
            ],
        ];
    }

}
