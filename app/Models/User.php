<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Crypt;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'country_id',
        'city_id',
        'address_1',
        'address_2',
        'phone_number',
        'image',
        'social_login_provider',
        'user_type',
        'gender',
        'social_login_provider_code',
        'email_verified_at',
        'password',

        'store_id',
        'user_status',
        'birthdate',
        'postCode',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'social_login_provider_code',
        'social_login_provider',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setProviderTokenAttribute($value)
    {
        $this->attributes['social_login_provider_code'] = Crypt::encrypt($value);
    }

    public function getProviderTokenAttribute($value)
    {
        return Crypt::decrypt($value);
    }

    public function setImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {
        $img = $image ?? 'male.jpg';
        return asset('storage/images') . '/' . $img;
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
