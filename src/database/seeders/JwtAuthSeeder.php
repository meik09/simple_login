<?php

namespace Simple\Login\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Simple\Login\App\Models\JwtAuth;

class JwtAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        for ($i = 0; $i < 100; $i++) {
            $user = [
                'email' => "test{$i}@gmail.com",
                'password' => bcrypt('123456'),
            ];
            array_push($users, $user);
        }
        DB::table('jwt_auths')->insert($users);
    }
}
