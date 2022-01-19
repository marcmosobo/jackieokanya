<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    use HasFactory;
    protected $fillable = [
        'pledge',
        'details',
        'photo',
        'slug'
    ];    
}
