<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
 protected $fillable = ['name','flavor','description','portions',
                        'price','type'];
                            
}
