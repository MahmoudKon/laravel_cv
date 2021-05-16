<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skillname', 'level', 'user_id'];

    // Make Relation With User
    public function user()
    {
        return $this->belongsTo(User::class);
    }   // End Relation
}
