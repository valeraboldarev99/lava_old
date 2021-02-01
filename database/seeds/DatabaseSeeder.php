<?php

use Illuminate\Database\Seeder;
use App\Modules\Admins\Database\seeds\RolesTableSeeder;
use App\Modules\Admins\Database\seeds\UsersTableSeeder;
use App\Modules\Admins\Database\seeds\UserRolesTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}
