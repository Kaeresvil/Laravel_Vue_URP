<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role_type_id' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('qwertyui'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'role_type_id' => '2',
            'email' => 'user@gmail.com',
            'password' => bcrypt('qwertyui'),
        ]);
    }
}
