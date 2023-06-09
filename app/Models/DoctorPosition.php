<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorPosition extends Model 
{
    use HasFactory, Translatable;
    protected $translatable = ['title'];
    protected $fillable = ['slug','order','status'];

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}
