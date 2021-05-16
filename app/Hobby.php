<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = ['hobbyname', 'icon', 'user_id'];

    // Make Relation With User
    public function user()
    {
        return $this->belongsTo(User::class);
    }   // End Relation
}
