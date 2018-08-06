<?php

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 50; $i++) {
            DB::table('vendors')->insert([ //,
                'name' => $faker->name,
        		'address' => $faker->address,
        		'phone' => $faker->tollFreePhoneNumber, 
                
            ]);
        }
    }
}
