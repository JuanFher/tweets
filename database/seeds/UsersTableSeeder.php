<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Fernando',
            'username' => 'JuanFher',
            'email' => 'uno@uno.com',
            'password' => bcrypt('123456')
        ]);

        factory(User::class, 10)->create();
    }
}
