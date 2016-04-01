<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'users_sos';

    protected $fillable = ['avatar', 'username', 'facebook_id', 'email'];
}
