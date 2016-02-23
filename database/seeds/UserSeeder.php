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
        User::create(['nombres' => 'Javier Francisco', 'appaterno' => 'Palomino', 'apmaterno' => 'Pinchi', 'codigo' => '12345', 'email' => 'jfpp92@gmail.com', 'password' => bcrypt('12345'), 'category_id' => 1]);
        User::create(['nombres' => 'Javier Francisco', 'appaterno' => 'Palomino', 'apmaterno' => 'Pinchi', 'codigo' => '1234', 'email' => 'jfpp92@gmail.com', 'password' => bcrypt('12345'), 'category_id' => 1]);
    }
}
