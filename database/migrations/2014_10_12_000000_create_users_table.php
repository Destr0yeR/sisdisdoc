<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('nombres');
            $table->string('apmaterno');
            $table->string('appaterno');
            $table->string('codigo');
            $table->string('email');
            $table->integer('category_id')->unsigned();

            $table->string('password', 60);

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table  ->foreign('category_id')->references('id')
                    ->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table  ->dropForeign('users_category_id_foreign');
        });

        Schema::drop('users');
    }
}
