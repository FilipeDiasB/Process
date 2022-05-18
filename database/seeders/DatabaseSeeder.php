<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

        $user = [
          'name' => 'Filipe',
          'email' => 'filipedias157@gmail.com',
          'password' => bcrypt('filipe50'),
        ];
        User::create($user);
    }
}
