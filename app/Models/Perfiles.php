<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;

     // Permisos o restriciones 

     public $timestamps = false;

     protected $table = 'perfiles';
}
