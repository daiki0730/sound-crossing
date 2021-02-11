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
            'name'      => 'てすと',
            'name_kana' => 'テスト',
            'email'     => 'test@test.com',
            'password'  => Hash::make('secret'),
            'gender'    => 1,
            'birthdate' => '1991-07-30',
            'biography' => 'テスト用アカウント',
            'status'    => 1
        ]);
    }
}