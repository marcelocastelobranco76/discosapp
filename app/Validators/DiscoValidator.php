<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class DiscoValidator.
 *
 * @package namespace App\Validators;
 */
class DiscoValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [

        ValidatorInterface::RULE_CREATE =>
        ['artista' => 'required',
        'artista'  => 'required',
        'ano'=> 'required | numeric | max:4'],

        ValidatorInterface::RULE_UPDATE =>
        ['titulo' => 'required',
        'artista'  => 'required',
        'ano'=> 'required | numeric'],
    ];
}
