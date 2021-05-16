<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'fullname', 'website', 'job', 'birthday', 'gender', 'address', 'phone', 'about', 'awards', 'user_id'
    ];

    // Make Relation With User
    public function user()
    {
        return $this->belongsTo(User::class);
    }   // End The Relation

    // Calc The Age From Birthday and Append It
    protected $appends = ['age'];
    public function getAgeAttribute()
    {
        return floor((time() - strtotime($this->birthday))/31556926) . ' Years';
    }   // End Age
}
