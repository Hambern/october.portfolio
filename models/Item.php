<?php namespace Hambern\Portfolio\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'published_at'];

    protected $jsonable = ['features'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hambern_portfolio_items';

    public $attachMany = [
        'images' => ['System\Models\File'],
        'files' => ['System\Models\File']
    ];

    public $belongsToMany = [
        'categories' => [
            'Hambern\Portfolio\Models\Category',
            'table' => 'hambern_portfolio_pivots',
            'order' => 'title'
        ]
    ];
}
