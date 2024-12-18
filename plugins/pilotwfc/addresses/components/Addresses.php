<?php namespace PilotWFC\Addresses\Components;

use Cms\Classes\ComponentBase;
use PilotWFC\Addresses\Models\Address;

class Addresses extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Addresses Component',
            'description' => 'Displays a list of addresses with Google Maps'
        ];
    }

    public function addresses()
    {
        return Address::with('category')->get();
    }
}
