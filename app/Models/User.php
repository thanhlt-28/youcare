<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = [
        'profile_photo_url',
    ];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    protected function changeExpireCookieRemember()
    {
        $rememberTokenExpireMinutes = 60 * 24 * 15;
        $rememberTokenName          = Auth::getRecallerName();
        $rememberCookie             = Auth::getCookieJar()->queued($rememberTokenName);
        if ($rememberCookie) {
            $cookieValue = $rememberCookie->getValue();
            Cookie::queue($rememberTokenName, $cookieValue, $rememberTokenExpireMinutes);
        }
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    // /**
    //  * @param string|array $roles
    //  */
    // public function authorizeRoles($roles)
    // {
    //     if (is_array($roles)) {
    //         return $this->hasAnyRole($roles) ||
    //             abort(401, 'This action is unauthorized.');
    //     }
    //     return $this->hasRole($roles) ||
    //         abort(401, 'This action is unauthorized.');
    // }
    // /**
    //  * Check multiple roles
    //  * @param array $roles
    //  */
    // public function hasAnyRole($roles)
    // {
    //     return null !== $this->roles()->whereIn('name', $roles)->first();
    // }
    // /**
    //  * Check one role
    //  * @param string $role
    //  */
    // public function hasRole($role)
    // {
    //     return null !== $this->roles()->where('name', $role)->first();
    // }
}
