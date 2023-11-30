<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_book extends Model
{
    use HasFactory;
    protected $table = 'Request_book';
    protected $fillable = ['name', 'namaBuku', 'DeskripsiBuku', 'alasan'];
}