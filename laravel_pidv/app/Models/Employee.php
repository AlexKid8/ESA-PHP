<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
   protected $fillable = [
        'last_name', 'first_name', 'email',
    ];


   public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = Str::upper($value);
    }

    public function getLastNameAttribute($value)
    {
        return Str::upper($value);
    }
}
