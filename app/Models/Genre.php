<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

     public $fillable = ['nama_genre','bio'];
        public $visible = ['nama_genre','bio'];
        public $timestamps = true;

}
