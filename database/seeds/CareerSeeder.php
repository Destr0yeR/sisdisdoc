<?php

use Illuminate\Database\Seeder;

use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Career::create(['name' => '']);
        Career::create(['name' => 'Ingeniería de Software']);
        Career::create(['name' => 'Ingeniería de Sistemas']);
    }
}
