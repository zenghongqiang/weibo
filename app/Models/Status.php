<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
