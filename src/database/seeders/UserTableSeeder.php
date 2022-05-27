<?php

namespace Simple\Login\Database\Seeders;

use Illuminate\Database\Seeder;
use Simple\Login\App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
    }
}
