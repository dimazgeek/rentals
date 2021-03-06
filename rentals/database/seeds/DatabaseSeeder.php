<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        

    /*
    Because Books will be associated with Authors,
    we need to seed Authors first
    */
    $this->call(RentersTableSeeder::class);
    $this->call(CarsTableSeeder::class);
    $this->call(OrdersTableSeeder::class);
    $this->call(UsersTableSeeder::class);

    
    }
}
