<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $renter_id = \App\Renter::where('name','=','Jamal')->pluck('id')->first();
        DB::table('orders')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'provider' => $renter_id,
        'price' => 1000,
        ]);
        
    }
}
