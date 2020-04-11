<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // entrey->user

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
