<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('名前');
            $table->string('name_kana')->comment('カナ名前');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('gender')->comment('性別');
            $table->string('birthdate')->comment('生年月日');
            $table->string('biography')->nullable()->comment('自己紹介文');
            $table->string('image')->nullable()->comment('アカウント写真');
            $table->string('url')->nullable()->comment('URL');
            $table->string('status')->comment('アカウントステータス');
            $table->string('last_login_at')->nullable()->comment('最終ログイン日時');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
