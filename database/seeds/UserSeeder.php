<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($i=0; $i < 10; $i++) { 
            User::create(['nombres' => 'Javier Francisco', 'appaterno' => 'Palomino', 'apmaterno' => 'Pinchi', 'codigo' => '1234'.$i, 'email' => 'jfpp92@gmail.com', 'password' => bcrypt('12345'), 'category_id' => $i%3 + 1, 'last' => $i]);
        }
    }
}
