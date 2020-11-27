<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $fillable = [
        'title' , 'description' , 'image_1' , 'image_2' , 'image_3'
    ];
}
