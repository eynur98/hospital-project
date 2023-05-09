<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Slider extends Model 
{
    use HasFactory, Translatable;
    protected $translatable = ['title','description','link_title'];
    protected $fillable = ['link','order','image','status'];
}
