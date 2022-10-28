<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class ProductCategory extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    protected $fillable = [
        'category_name_en',
        'category_name_ar',
        'parent_id',
        'image',
        'status',
        'is_delete'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function subCategories()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id', 'id');
    }

    public function scopeRoot($query)
    {
        $query->where('parent_id', null);
    }

    public function getCategoryNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['category_name_ar'];
        } else {
            return $this->attributes['category_name_en'];
        }
    }

    #Scope
    public function scopeActive($query)
    {
        return $query->where('status', 'active')->where('is_delete', '0');
    }

    public function scopeLanguage($query)
    {
        if (session('lang') == 'ar') {
            $lang = ['id', 'category_name_ar',  'parent_id'];
        } else {
            $lang = ['id', 'category_name_en', 'parent_id'];
        }

        return $query->select($lang)->active();
    }

    public function getImagePathAttribute()
    {
        return asset('storage/images') . '/' . $this->image;
    }
}
