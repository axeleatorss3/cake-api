<?php

use App\Order;
use App\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,2)->create()->each( function($user){
            $user->orders()->saveMany(
                factory(Order::class,5)->make()
            );
        });    
    }
}
