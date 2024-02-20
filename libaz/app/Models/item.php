<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $fillable = [
        'kode',
        'buku_id'
    ];
    public function buku()
    {
        return $this->belongsTo('App\Models\Buku');
    }
}
