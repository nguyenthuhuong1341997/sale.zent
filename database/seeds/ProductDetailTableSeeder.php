<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
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
            DB::table('products_details')->insert([ //,
                'product_id' => $faker->numberBetween($min = 1, $max = 50),
        		'size_id' => $faker->numberBetween($min = 1, $max = 6),
        		'color_id' => $faker->numberBetween($min = 1, $max = 50), 
                'quantity_id' => $faker->randomDigitNotNull,
                'image' =>$faker->imageUrl($width = 640, $height = 480),
        		
            ]);
        }
    }
}
