<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'provider',
        'provider_id',
        'provider_token',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public static function generateUserName($username){

        if($username==null){
            $username=Str::lower(Str::random(8));
        }
        if(User::where('username',$username)->exists()){
            $newUsername=$username.Str::lower(Str::random(3));
            $username=self::generateUserName($newUsername);
        }
        return $username;
    }

    public function cart()
    {
        return $this->belongsToMany(Product::class, 'pos_cart')->withPivot('pro_qty');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
