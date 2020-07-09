<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        $faker = \Faker\Factory::create();
        Products::create(['name' => 'Administrador', 'code' => '12414','price' => 12.00,'status' => 'active']);
        for ($i = 0; $i < 10; $i++) {
            Products::create(['name' => $faker->name,
                'code' => $faker->code,
                'price' => $faker-> price,
                'status' =>$faker->status]);
        }
    }
}
