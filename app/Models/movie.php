<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    //kolom mana saja yg bole di isi
    public $fillable = ['tittle','description','cover_url','viewer'];
    
    //kolom (field) mana saja yg bole di perlihatkan
    public $visible = ['tittle','description','cover_url','viewer'];
}
