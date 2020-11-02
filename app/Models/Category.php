<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version October 20, 2020, 4:48 pm UTC
 *
 * @property string $name
 * @property integer $parent_id
 * @property string $image
 * @property integer $deep_level
 * @property integer $status
 * @property integer $weight
 */
class Category extends Model
{
//    use SoftDeletes;

    public $table = 'category';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'parent_id',
        'image',
        'deep_level',
        'status',
        'weight'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer',
        'image' => 'string',
        'deep_level' => 'integer',
        'status' => 'integer',
        'weight' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'parent_id' => 'required|integer',
//        'image' => 'required|string|max:255',
        'deep_level' => 'required|integer',
        'status' => 'required|integer',
        'weight' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'obj');
    }

}
