<?php namespace Regis\Conent\Models;

use Model;

/**
 * Model
 */
class Produto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'regis_conent_produtos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
