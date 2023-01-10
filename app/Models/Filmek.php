<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmek extends Model
{
    use HasFactory;

    protected $fillable = [
        'cim',
        'rendezo',
        'kiadas',
        'ar'
    ];
}

