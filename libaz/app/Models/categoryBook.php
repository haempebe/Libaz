<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryBook extends Model
{
    use HasFactory;
    protected $table = 'category_book';
    protected $fillable = ['name'];
}
