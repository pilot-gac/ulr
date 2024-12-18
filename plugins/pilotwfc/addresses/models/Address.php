<?php namespace PilotWFC\Addresses\Models;

use Model;

class Address extends Model
{
    protected $table = 'pilotwfc_addresses';

    public $fillable = [
        'title', 'description', 'type', 'phone_main', 'phone_mobile',
        'email', 'city', 'address', 'latitude', 'longitude', 'category_id'
    ];

    public $belongsTo = [
        'category' => Category::class,
    ];
}
