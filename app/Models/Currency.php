<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = [
        'currency_name_en',
        'currency_name_ar',
        'currency_symbol',
        'currency_code',
        'is_delete',
    ];

    public function getCurrencyNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['currency_name_ar'];
        } else {
            return $this->attributes['currency_name_en'];
        }
    }
}
