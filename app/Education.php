<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'start_date', 'end_date', 'degree', 'place', 'description', 'user_id'
    ];

    // Make Relation With User
    public function user()
    {
        return $this->belongsTo(User::class);
    }   // End Relation
}
