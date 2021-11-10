<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','flavor','description',
                            'image_url','portions','price','type'];


}
