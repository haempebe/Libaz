<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penolakan extends Model
{
    use HasFactory;
    protected $table = 'tolak';
    
    protected $fillable = ['penolakan'];
}
