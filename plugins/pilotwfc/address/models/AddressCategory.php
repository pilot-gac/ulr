<?php namespace Pilotwfc\Address\Models;

use Model;

/**
 * Model
 */
class AddressCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $fillable = ['name'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'pilotwfc_address_category';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'posts' => [\Pilotwfc\Address\Models\AddressPost::class, 'table' => 'pilotwfc_address_post_categories']
    ];


}
