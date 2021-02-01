<?php

namespace App\Modules\Admins\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**R
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'disabled',
            ],
            [
                'name' => 'user',
            ],
            [
                'name' => 'admin',
            ],
        ];
        DB::table('roles')->insert($data);
    }
}
