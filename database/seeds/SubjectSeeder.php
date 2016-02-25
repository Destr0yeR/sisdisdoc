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
        //Subject::create(['name' => '', 'career_id' => $i%2 + 1]);
        for ($i=0; $i < 11; $i++) { 
            Subject::create(['name' => 'CAR'.$i, 'career_id' => $i%2 + 1]);
        }
    }
}
