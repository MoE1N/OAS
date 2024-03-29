<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'personalCode';

    public function postLookup()
    {
        return $this->belongsTo('App\postLookup', 'postLookups_postID');
    }
}
