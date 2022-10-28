<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_type_ar',
        'store_type_en',
        'slug',
        'image',
        'banner_section',
        'filter_section',
        'service_section',
        'store_type_status',
        'is_delete'
    ];

    public function getStoreTypeNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['store_type_ar'];
        } else {
            return $this->attributes['store_type_en'];
        }
    }

    public function getImagePathAttribute()
    {
        return asset('storage/images') . '/' . $this->image;
    }

    public function scopeLanguage($query)
    {
        if (session('lang') == 'ar') {
            $lang = [
                'id',
                'store_type_ar',
                'slug',
                'banner_section',
                'filter_section',
                'service_section',
                'image',
                'store_type_status',
                'is_delete'
            ];
        } else {
            $lang =  [
                'id',
                'store_type_en',
                'slug',
                'banner_section',
                'filter_section',
                'service_section',
                'image',
                'store_type_status',
                'is_delete'
            ];
        }

        return $query->select($lang)->where('is_delete', '0')->where('store_type_status', 'active');
    }
}
