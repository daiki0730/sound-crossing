<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'last_name'       => '西田',
            'first_name'      => '大輝',
            'last_name_kana'  => 'ニシダ',
            'first_name_kana' => 'ダイキ',
            'email'           => 'daikibassman@gmail.com',
            'password'        => Hash::make('secret'),
        ]);
    }
}
