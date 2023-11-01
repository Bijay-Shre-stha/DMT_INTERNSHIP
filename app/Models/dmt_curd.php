<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dmt_curd extends Model
{
    use HasFactory;
    protected $table = 'dmt_curd';
    protected $fillable = [
        'title',
        'description',
        'tag',
    ];
}
