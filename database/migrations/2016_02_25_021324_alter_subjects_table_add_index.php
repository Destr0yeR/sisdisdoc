<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSubjectsTableAddIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('subjects', function(Blueprint $table){
            $table->integer('career_id')->unsigned();
        });

        Schema::table('subjects', function(Blueprint $table){
            $table  ->foreign('career_id')->references('id')
                    ->on('careers')->onDelete('cascade');
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
        Schema::table('subjects', function(Blueprint $table){
            $table->dropForeing('subjects_career_id_foreign');
        });
    }
}
