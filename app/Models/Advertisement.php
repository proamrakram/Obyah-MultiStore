<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_image',
        'ads_type',
        'ads_place',
        'store_id',
        'link',
        'status',
        'is_delete',
    ];

    public function setAddImageAttribute($image)
    {
        if(gettype($image) != 'string') {
            $i = $image->store('images/advertisments', 'public');
            $this->attributes['add_image'] = $image->hashName();
        } else {
            $this->attributes['add_image'] = $image;
        }
    }

    public function getAddImageAttribute($image)
    {
        return asset('storage/images/advertisments') . '/' . $image;
    }
}
