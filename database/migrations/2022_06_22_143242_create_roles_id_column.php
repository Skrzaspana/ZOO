<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_role')->after('id');
            $table->foreign('id_role')->references('id')->on('roles');
            
            //$table->unsignedBigInteger('id_type')->after('id');
            //$table->foreign('id_type')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('id_role');
        });

         //Schema::table('users', function($table) {
             //$table->dropColumn('id_type');
         //});
    }
};
