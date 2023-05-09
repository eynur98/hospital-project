<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;
class NewsCategory extends Model 
{
    use HasFactory, Translatable;

    protected $translatable = ['title' ];
    protected $fillable = ['slug','order','image','status'];

    public function news(){
        return $this->hasMany(News::class);
    }
}
