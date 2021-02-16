<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'telefone', 'email',
    ];

}
