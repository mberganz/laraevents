<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha',
        'tipoUsuario'
    ];

    protected $hidden = [
        'senha',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }
}
