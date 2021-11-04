<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use HasProfilePhoto;
    use TwoFactorAuthenticatable;

    const ADMIN = 'admin';
    const SELLER = 'seller';
    const BUYER = 'buyer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'middle_name',
        'display_name',
        'role_id',
        'email',
        'password',
        'dob',
        'avatar',
        'gender',
        'race',
        'rel_status',
        'display_name',
        'created_at',
        'user_status',
        'user_type',
        'interested_tags',
        'user_products_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static $user_type = [self::SELLER, self::BUYER];


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function getCreatedAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('Y-m-d');
    }

    public function Orders()
    {
        return $this->hasMany(\App\Models\Orders::class);
    }

    public function phones()
    {
        return $this->hasMany(\App\Models\Phone_number::class);
    }

    public function auctions()
    {
        return $this->hasMany(\App\Models\Auction::class);
    }

    public function bids()
    {
        return $this->hasMany(\App\Models\Bid::class);
    }

    public function ratings()
    {
        return $this->hasMany(\App\Models\Rating::class);
    }

    public static function saveAvatar($image)
    {
        if ($image) {

            $imageName = time() . '_' . rand(1, 5000) . '.jpg';
            $save = Storage::disk('avatars')->putFileAs('/', $image, $imageName);

            if ($save) {
                return $imageName;
            }

        }

    }

    public function getAvatar()
    {
        if ($this->avatar) {
            return asset('/images/avatars/' . $this->avatar);
        } else {
            return '/images/users/no_image.png';
        }
    }

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public static function updateProfile($user, $request)
    {
        if ($request->email) {
            $user->email = $request->email;
        }

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if ($request->user_type) {
            $user->user_type = $request->user_type;
        }

        if ($request->user_status) {
            $user->user_status = $request->user_status;
        }

        if ($request->first_name) {
            $user->first_name = $request->first_name;
        }

        if ($request->last_name) {
            $user->last_name = $request->last_name;
        }

        if ($request->middle_name) {
            $user->middle_name = $request->middle_name;
        }

        if ($request->display_name) {
            $user->display_name = $request->display_name;
        }

        if ($request->dob) {
            $user->dob = $request->dob;
        }

        if ($request->gender) {
            $user->gender = $request->gender;
        }

        if ($request->race) {
            $user->race = $request->race;
        }

        if ($request->role_id) {
            $user->role_id = $request->role_id;
        }

        if ($request->interested_tags) {
            $user->interested_tags = $request->interested_tags;
        }

        if ($request->avatar) {
            $user->avatar = self::saveAvatar($request->avatar);
        }

        if ($request->rel_status) {
            $user->rel_status = $request->rel_status;
        }

        if ($request->admission_date) {
            $user->admission_date = $request->admission_date;
        }

        return $user;
    }


}
