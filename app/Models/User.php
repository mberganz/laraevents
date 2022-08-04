<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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
