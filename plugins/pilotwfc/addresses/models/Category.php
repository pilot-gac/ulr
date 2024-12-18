<?php namespace PilotWFC\Addresses\Models;

use Model;

class Category extends Model
{
    protected $table = 'pilotwfc_addresses_categories';

    public $fillable = ['name', 'slug'];

    public $hasMany = [
        'addresses' => Address::class,
    ];
}
