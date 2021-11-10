<?php

use App\Client;
use App\Order;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class,10)->create()->each(function($client){
            $client->orders()->saveMany(
                factory(Order::class,5)->make()
            );
        });
    }
}
