<?php namespace Hambern\Portfolio\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'published_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hambern_portfolio_categories';

    public $belongsToMany = [
        'items' => [
            'Hambern\Portfolio\Models\Item',
            'table' => 'hambern_portfolio_pivots',
            'order' => 'title'
        ]
    ];
}
