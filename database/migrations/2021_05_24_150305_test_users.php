<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('super_users')) {
            DB::unprepared("
                RENAME TABLE users TO super_users;
                ALTER TABLE super_users CHANGE COLUMN gender gender_origin float DEFAULT NULL;
                ALTER TABLE super_users ADD COLUMN gender float DEFAULT NULL AFTER password;
                ALTER TABLE super_users ADD COLUMN exp_id int NOT NULL DEFAULT 0 AFTER name_kana;
                ALTER TABLE super_users DROP PRIMARY KEY;
                ALTER TABLE super_users ADD PRIMARY KEY (gender, exp_id, name_kana);
                ALTER TABLE super_users CHANGE COLUMN exp_id exp_id int NOT NULL;
            ");
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (! Schema::hasTable('users')) {
            DB::unprepared("
                RENAME TABLE super_users TO users;
                ALTER TABLE users DROP PRIMARY KEY;
                ALTER TABLE users DROP COLUMN exp_id;
                ALTER TABLE users DROP COLUMN gender_origin;
                ALTER TABLE users DROP COLUMN expected_origin;
            ");
        }
    }
}
