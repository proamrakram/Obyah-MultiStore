<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Store extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'store_admin',
        'store_type_id',
        'slug',
        'store_type_slug',
        'store_name_ar',
        'store_name_en',
        'store_details_en',
        'store_details_ar',
        'store_address_en',
        'store_address_ar',
        'store_logo',
        'store_domain',
        'phone_number',
        'email',
        'store_currency',
        'store_country',
        'store_city',
        'subscription_start_date',
        'subscription_end_date',
        'subscription_package_id',
        'commercial_record',
        'registration_number_in_trusted',
        'id_number',
        'store_status',
        'is_trail',
        'is_delete',
    ];

    public function setStoreLogoAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images', 'public');
            $this->attributes['store_logo'] = $image->hashName();
        } else {
            $this->attributes['store_logo'] = $image;
        }
    }

    public function getStoreLogoAttribute($image)
    {
        $img = $image ?? '1.jpg';
        return asset('storage/images') . '/' . $img;
    }

    public function package()
    {
        return $this->belongsTo('App\Models\StorePackage', 'subscription_package_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }

    public function store_subscriptions()
    {
        return $this->hasMany(StoreSubscription::class, 'store_id', 'id');
    }

    public function getActiveStorePackageAttribute()
    {
        $store_subscription = $this->store_subscriptions->where('subscription_status', 'active')->first();
        return $store_subscription;
    }

    public function getSubscriptionEndDateAttribute()
    {
        $store_subscription = $this->store_subscriptions->first();
        if ($store_subscription) {
            return $store_subscription->subscription_end_date;
        }
        return '';
    }

    public function scopeNameFilter(Builder $builder, array $filters = [])
    {
        $filters = array_merge([], $filters);

        if (session('lang') == 'ar') {
            $builder->when($filters !== [], function ($query) use ($filters) {
                $query
                    ->where('store_name_ar', 'like', '%' . $filters['search'] . '%');
            });
        } else {

            $builder->when($filters !== [], function ($query) use ($filters) {
                $query->where('store_name_en', 'like', '%' . $filters['search'] . '%');
            });
        }
    }

    public function getStoreNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['store_name_ar'];
        } else {
            return $this->attributes['store_name_en'];
        }
    }

    public function scopeLanguage($query)
    {
        if (session('lang') == 'ar') {
            $lang = [
                'id',
                'store_admin',
                'store_type_id',
                'slug',
                'store_type_slug',
                'store_name_ar',
                'store_details_ar',
                'store_address_ar',
                'store_logo',
                'store_domain',
                'phone_number',
                'email',
                'store_currency',
                'store_country',
                'store_city',
                'subscription_start_date',
                'subscription_end_date',
                'subscription_package_id',
                'commercial_record',
                'registration_number_in_trusted',
                'id_number',
                'store_status',
                'is_trail',
                'is_delete',
            ];
        } else {
            $lang =  [
                'id',
                'store_admin',
                'store_type_id',
                'slug',
                'store_type_slug',
                'store_name_en',
                'store_details_en',
                'store_address_en',
                'store_logo',
                'store_domain',
                'phone_number',
                'email',
                'store_currency',
                'store_country',
                'store_city',
                'subscription_start_date',
                'subscription_end_date',
                'subscription_package_id',
                'commercial_record',
                'registration_number_in_trusted',
                'id_number',
                'store_status',
                'is_trail',
                'is_delete',
            ];
        }

        return $query->select($lang)
            ->where('is_delete', '0')
            ->where('store_status', 'active');
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
