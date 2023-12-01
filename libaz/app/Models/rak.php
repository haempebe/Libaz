<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    use HasFactory;
    protected $table = 'raks';
    protected $fillable = ['no'];

    public function buku()
    {
        return $this->hasMany('App\Models\Buku');
    }
}
