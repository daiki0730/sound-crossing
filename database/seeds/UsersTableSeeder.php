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
            'name'       => '安倍',
            'name_kana'  => '秋也',
            'email'      => 'test@test.com',
            'password'   => Hash::make('secret'),
            'gender'     => 1,
            'birthdate'  => '1991-07-30',
            'biography'  => 'テスト用アカウント',
            'status'     => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name'       => '加藤',
            'name_kana'  => '育実',
            'email'      => 'test2@test.com',
            'password'   => Hash::make('secret2'),
            'gender'     => 2,
            'birthdate'  => '1992-012-31',
            'biography'  => 'テスト用アカウント',
            'status'     => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name'       => '田辺',
            'name_kana'  => '右京',
            'email'      => 'test3@test.com',
            'password'   => Hash::make('secret3'),
            'gender'     => 1,
            'birthdate'  => '1991-01-09',
            'biography'  => 'テスト用アカウント',
            'status'     => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name'       => '酒田',
            'name_kana'  => '絵里',
            'email'      => 'test4@test.com',
            'password'   => Hash::make('secret4'),
            'gender'     => 2,
            'birthdate'  => '1990-09-25',
            'biography'  => 'テスト用アカウント',
            'status'     => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}