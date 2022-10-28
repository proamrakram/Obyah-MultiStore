<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_item_ar',
        'package_item_en',
        'package_item_status',
        'is_delete'
    ];

    public function store_package_item()
    {
        return $this->belongsTo(StorePackageItem::class);
    }

}
