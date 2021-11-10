<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','flavor','description',
                            'image_url','portions','price','type'];

    public function desserts(){
        return $this->hasMany(Dessert::class);
     }
    public function client(){
        return $this->belongsTo(Client::class);
     }
     public function created_by(){
        return $this->belongsTo(User::class,'created_by_id');
    }
}
