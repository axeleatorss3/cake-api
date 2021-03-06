<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['first_name','last_name','phone_number',
                            'street_name','updated_at'];
    
    public function orders(){
    return $this->hasMany(Order::class);
    }
    
}
