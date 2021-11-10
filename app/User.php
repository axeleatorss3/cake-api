<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['first_name','last_name','password',
                            'email','genere','age'];

    public function orders(){
        return $this->hasMany(Order::class);
    }
  
}
