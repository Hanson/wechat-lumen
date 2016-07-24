<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWechatUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_user', function(Blueprint $table){
            $table->increments('id');
            $table->string('open_id')->unique();
            $table->string('nickname');
            $table->integer('sex');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('avatar');
            $table->string('union_id');
            $table->string('remark');
            $table->integer('group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wechat_user');
    }
}
