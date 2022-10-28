<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_name_en',
        'country_name_ar',
        'country_flag',
        'country_code',
        'status',
        'is_delete',
    ];

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function setCountryFlagAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images', 'public');
            $this->attributes['country_flag'] = $image->hashName();
        } else {
            $this->attributes['country_flag'] = $image;
        }
    }

    public function getCountryFlagAttribute($image)
    {
        return asset('storage/images') . '/' . $image;
    }

    public function getCountryNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['country_name_ar'];
        } else {
            return $this->attributes['country_name_en'];
        }
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active')->where('is_delete', '0');
    }
}
