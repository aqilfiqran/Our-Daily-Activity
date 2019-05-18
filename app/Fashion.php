<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }
}
