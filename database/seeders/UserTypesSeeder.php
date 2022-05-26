<?php

namespace Database\Seeders;

use App\Models\UserTypes;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $dados = collect([
                             [
                                 'id'   => 1,
                                 'nome' => 'Master',
                             ],
                             [
                                 'id'   => 2,
                                 'nome' => 'Admin',
                             ],
                             [
                                 'id'   => 3,
                                 'nome' => 'Profissional',
                             ],
                         ]);

        $dados->each(function($item, $key) {
            UserTypes::create($item);
        });
    }
}
