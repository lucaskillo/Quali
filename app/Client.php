<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Client
 *
 * @mixin \Eloquent
 */
class Client extends Model
{
    const PESSOA_FISICA = 'fisica';
    const PESSOA_JURIDICA = 'juridica';

    protected $fillableGeneral = [
        'name',
        'type',
        'document',
        'email',
        'phone',
        'address'
    ];

    protected $fillableFisica = [

    ];

    protected $fillableJuridica = [
        'contact',
        'website'
    ];

    public static function getPessoa($value)
    {
        return $value == Client::PESSOA_JURIDICA ? $value : Client::PESSOA_FISICA;
    }
}
