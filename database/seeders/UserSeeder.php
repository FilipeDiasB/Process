<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $users = collect([
                             [
                                 'id'                 => 1,
                                 'name'               => 'Filipe',
                                 'email'              => 'filipedias157@gmail.com',
                                 'password'           => bcrypt('filipe50'),
                                 'phone'              => '27999642519',
                                 'user_type'          => '0',
                                 'document'           => '18737575732',
                                 'rg'                 => '4444444',
                                 'user_permission_id' => '1',
                             ],
                             [
                                 'id'                 => 2,
                                 'name'               => 'Joao',
                                 'email'              => 'j.v_dias@hotmail.com',
                                 'password'           => bcrypt('filipe50'),
                                 'phone'              => '27999642520',
                                 'user_type'          => '0',
                                 'document'           => '333333333',
                                 'rg'                 => '4444445',
                                 'user_permission_id' => '2',
                             ],
                         ]);

        $users->each(function($item, $key) {
            User::create($item);
        });
    }
}
