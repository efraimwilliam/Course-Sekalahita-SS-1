<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Alter table create
        Schema::table('account', function(Blueprint $table){
            $table->string('username');
            $table->string('password');
            $table->integer('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Alter table drop
        Schema::table('account', function(Blueprint $table){
            $table->dropColumn('age');
            $table->dropColumn('username');
            $table->dropColumn('password');
        });
    }
}
