<?php

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
            'name'       => '西田',
            'name_kana'      => '大輝',
            'email'           => 'daikibassman@gmail.com',
            'password'        => Hash::make('secret'),
        ]);
    }
}