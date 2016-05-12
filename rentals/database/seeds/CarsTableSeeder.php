<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
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
        DB::table('cars')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Vios',
        'type' => 'mini sedan',
        'years' => 2003,
        'brand' => 'Toyota',
        'color' => 'Red',
        'renter_id' => $renter_id,
        
        ]);
        $renter_id = \App\Renter::where('name','=','Jill')->pluck('id')->first();
        DB::table('cars')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Jazz',
        'type' => 'mini sedan',
        'years' => 2005,
        'brand' => 'Honda',
        'color' => 'Black',
        'renter_id' => $renter_id,
        
        ]);
    }
}
