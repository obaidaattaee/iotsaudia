<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo_image',
        'slider_title',
        'video_link',
        'video_background_image',
        'advantage_title',
        'email_address',
        'mobile_address',
        'location',
        'facebook_address',
        'twitter',
        'instagram',
        'youtube',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
