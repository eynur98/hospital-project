<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGalery extends Model
{
    use HasFactory;

    protected $fillable = ['video','status','at_home','order'];
}
