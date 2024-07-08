<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $primarykey = 'news_id';
    protected $table='news';
    protected $fillable = 
        [
            'title', 
            'details', 
            'img'
        ];
}