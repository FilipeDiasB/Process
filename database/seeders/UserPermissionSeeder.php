<?php

namespace Database\Seeders;

use App\Models\UserPermission;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
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
            UserPermission::create($item);
        });
    }
}
