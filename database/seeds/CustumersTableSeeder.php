<?php

use Illuminate\Database\Seeder;

class CustumersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Custumers::truncate();
        $faker = \Faker\Factory::create();
        Custumers::create(['name' => 'Administrador', 'lastname' => 'fdfdsf','document' =>'fdsfdsf']);
        for ($i = 0; $i < 10; $i++) {
           Custumers::create(['name' => $faker->name,
                'lastname' => $faker-> lastName,
                'document' => $faker-> document]
        );}
    }
}
