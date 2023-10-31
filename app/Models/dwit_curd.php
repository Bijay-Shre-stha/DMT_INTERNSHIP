<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dwit_curd extends Model
{
    use HasFactory;
    protected $table = 'dwit_curd';
    protected $fillable = [
        'title',
        'description',
        'tag',
    ];
    
}
