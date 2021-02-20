<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAccount1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //drop column
        Schema::table('account', function(Blueprint $table){
            $table->dropColumn('age');
           
        });
        //create column
        Schema::table('account', function(Blueprint $table){
        
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
        //
    }
}
