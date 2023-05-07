<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
 
class NewsCategory extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title' ];
    protected $fillable = ['slug','order','image','status'];

    public function news(){
        return $this->hasMany(News::class);
    }
}
