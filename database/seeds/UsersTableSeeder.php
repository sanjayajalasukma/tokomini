<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = "tokomini";
        $user->email = "sanjaya@gmail.com";
        $user->password = bcrypt("password");
        $user->hak_akses = "Customer";
        $user->save();
    }
}