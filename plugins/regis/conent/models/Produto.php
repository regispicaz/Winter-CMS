<?php namespace Regis\Conent\Models;

use Model;

/**
 * Model
 */

class Produto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'regis_conent_produtos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopeActive($query){

        return $query->where('status', true);

    }

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'galery' => 'System\Models\File'
    ];
}
