<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::create(['name' => '', 'max_time' => ]);
        Category::create(['name' => 'Tiempo Parcial', 'max_time' => 20]);
        Category::create(['name' => 'Tiempo Completo', 'max_time' => 40]);
        Category::create(['name' => 'Profesor exclusivo', 'max_time' => 40]);
    }
}
