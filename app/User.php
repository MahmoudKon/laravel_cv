<?php

namespace App;

use App\Http\Requests\HobbyRequest;
use App\Observers\UserObserve;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'image', 'approve'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['image_path', 'approved'];

    // Return The Full Image Path
    public function getImagePathAttribute()
    {
        return asset('uploads/images/' . $this->image);

    }//end of get image path

    // Make Relation With General
    public function general()
    {
        return $this->hasOne(General::class, 'user_id', 'id');
    }   // End Relation

    // Make Relation With Skills
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }   // End Relation

    // Make Relation With Hobbies
    public function hobbies()
    {
        return $this->hasMany(Hobby::class, 'user_id', 'id');
    }   // End Relation

    // Make Relation With Education
    public function educations()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }   // End Relation

    // Make Relation With Experience
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'user_id', 'id');
    }   // End Relation

    public function getApprovedAttribute()
    {
        return $this->approve == 0 ? 'Not Approve' : 'Approved';
    }

    // User Observe
    protected static function boot()
    {
        parent::boot();
        User::observe(UserObserve::class);
    }   // Observe
}
