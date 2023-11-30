<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keanggotaan extends Model
{
    use HasFactory;
    protected $table = 'keanggotaan';

    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'password'
    ];
    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
