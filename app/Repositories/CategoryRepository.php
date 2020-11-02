<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version October 20, 2020, 4:48 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'parent_id',
        'image',
        'deep_level',
        'status',
        'weight'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Category::class;
    }

    public function getCategoryShowMenu($limit = 4)
    {
        return Category::with(['children' => function ($q) {
            $q->active();
        }])
            ->active()
            ->where('show_in_menu', 1)
            ->orderBy('weight', 'desc')
            ->limit($limit)
            ->get();
    }
}
