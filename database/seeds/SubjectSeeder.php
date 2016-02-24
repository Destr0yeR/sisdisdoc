<?php

use Illuminate\Database\Seeder;

use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Subject::create(['name' => '']);
        Subject::create(['name' => 'Matemática Básica I']);
        Subject::create(['name' => 'Matemática Básica II']);
        Subject::create(['name' => 'Cálculo I']);
        Subject::create(['name' => 'Cálculo II']);
        Subject::create(['name' => 'Física I']);
        Subject::create(['name' => 'Física II']);
    }
}
