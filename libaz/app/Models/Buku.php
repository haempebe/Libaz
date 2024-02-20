<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'name',
        'tahun_terbit',
        'cover',
        'deskripsi',
        'penulis_id',
        'penerbit_id',
        'kategori_id',
        'rak_id'
    ];
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
    public function item()
    {
        return $this->hasMany('App\Models\item');
    }

    public function penulis()
    {
        return $this->belongsTo('App\Models\Penulis');
    }

    public function penerbit()
    {
        return $this->belongsTo('App\Models\Penerbit');
    }

    public function rak()
    {
        return $this->belongsTo('App\Models\rak');
    }

}
