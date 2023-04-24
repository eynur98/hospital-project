<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Doctor extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'description' ];
    protected $fillable = ['news_category_id','slug','order','image','status','at_home'];
}
