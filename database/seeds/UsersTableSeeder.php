<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => "Safi Khan",
            'email'    => 'safifalak@gmail.com',
            'password' => bcrypt('secret'),
            'role'     => 'master',
            'active'   => 1,
            'verified' => 1,
        ]);
    }
}
