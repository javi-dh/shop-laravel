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
        // default user
        factory(User::class)->create([
            'email' => 'demo@mail.dev'
        ]);

        factory(User::class, 10)->create();
    }
}
