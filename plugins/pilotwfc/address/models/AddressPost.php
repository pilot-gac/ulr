<?php namespace Pilotwfc\Address\Models;

use Model;
use Pilotwfc\Address\Models\AddressCategory;
use Pilotwfc\Address\Models\AddressCity;

/**
 * Model
 */
class AddressPost extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
    
    public $table = 'pilotwfc_address_post'; */
    protected $table = 'pilotwfc_address_post';

    public $belongsTo = [
        'category' => ['Pilotwfc\Address\Models\AddressCategory', 'key' => 'category_id']
    ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public function getCityIdOptions() {
        $model = AddressCity::lists('city', 'id');
        return $model;
    }

    public function getCategoryIdOptions() {
        $model = AddressCategory::lists('name', 'id');
        return $model;
    }

    public $hasOne = [
        'addressCategory' => ['Pilotwfc\Address\Models\AddressCategory', 'key'=>'id', 'otherKey'=>'category_id'],
        'addressCity' => ['Pilotwfc\Address\Models\AddressCity', 'key'=>'id', 'otherKey'=>'city_id'],
    ];

    public $belongsToMany = [
        'categories' => [\Pilotwfc\Address\Models\AddressCategory::class, 'table' => 'pilotwfc_address_post_categories']
    ];


}
