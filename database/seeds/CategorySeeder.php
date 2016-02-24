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
        Category::create(['name' => 'Asistente', 'max_time' => 20]);
    }
}
