<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wongtua extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'umur',
    ];
}
