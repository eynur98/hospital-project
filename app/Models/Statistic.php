<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Statistic extends Model
{
    use HasFactory, Translatable;

    protected $table = 'statistika';

    protected $translatable = ['title' ];
    protected $fillable = ['statistica','image','status','at_home']; 
}
