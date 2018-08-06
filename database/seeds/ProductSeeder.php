<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
            DB::table('products')->insert([ //,
                'name' => $faker->name,
        		'code' => 'ZENT',
        		'original_price' => $faker->numberBetween($min = 1000, $max = 9000), 
                'price' => $faker->numberBetween($min = 9000, $max = 90000),
                'description' =>$faker->text($maxNbChars = 200),
        		'vendor_id' =>$faker->numberBetween($min = 1, $max = 100),
            ]);
        }
    }
}
