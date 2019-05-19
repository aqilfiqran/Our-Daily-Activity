<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }
}
