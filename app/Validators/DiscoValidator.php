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
        'ano'=> 'required | numeric',
        'ano_edicao'=> 'required | numeric',
        'selo'  => 'required',
        'pais'  => 'required',
        'formato'  => 'required',
        'tipo'  => 'required',
        'especificacoes'  => 'required'
      ],

        ValidatorInterface::RULE_UPDATE =>
        ['titulo' => 'required',
        'artista'  => 'required',
        'ano'=> 'required | numeric',
        'ano'=> 'required | numeric',
        'ano_edicao'=> 'required | numeric',
        'selo'  => 'required',
        'pais'  => 'required',
        'formato'  => 'required',
        'tipo'  => 'required',
        'especificacoes'  => 'required'
      ],
    ];
}
