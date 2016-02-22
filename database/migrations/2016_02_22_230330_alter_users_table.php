<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->string('schedule')->nullable()->after('category_id');
            $table->string('subjects')->nullable()->after('schedule');
            $table->integer('changed')->default(0)->after('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('schedule');
            $table->dropColumn('subjects');
            $table->dropColumn('changed');
        });
    }
}
