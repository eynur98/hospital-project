<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'description' ];
    protected $fillable = ['doctor_position_id','slug','order','image','email','phone','status','at_home'];

    /**
         * Get the doctor_pos that owns the Doctor
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function doctor_pos(): BelongsTo
        {
            return $this->belongsTo(DoctorPosition::class,'doctor_position_id','id');
        }

        public function certificates()
        {
            return $this->hasMany(Certificate::class);
        }
    
}
