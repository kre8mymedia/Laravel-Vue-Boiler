<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $x = new User;
        $x->name = 'John Doe';
        $x->email = 'john@test.com';
        $x->password = '$2y$10$4Ad8EX5ZqJI3EJ2zTTMDbOwkqAXsRZ/EaOOPsKVRtygz51aCcdUyC';
        $x->save();

        $x = new User;
        $x->name = 'Harry';
        $x->email = 'harry@test.com';
        $x->password = 'password1=';
        $x->save();

        $x = new User;
        $x->name = 'Mary';
        $x->email = 'mary@test.com';
        $x->password = 'password1=';
        $x->save();
    }
}
