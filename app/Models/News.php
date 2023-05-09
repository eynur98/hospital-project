<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class News extends Model 
{
    use HasFactory, Translatable;
    protected $translatable = ['title', 'description' ];
    protected $fillable = ['news_category_id','slug','order','image','status','at_home','view_count'];

    public function news_category(){
        return $this->belongsTo(NewsCategory::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class)->where('status',1);
    }
}
