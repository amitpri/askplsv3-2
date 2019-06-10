<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyDataMigrationAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('data_imports', function (Blueprint $table) {      
            $table->integer('user_id')->nullable()->add(); 
            $table->string('type')->nullable()->add();  
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 
        Schema::table('data_imports', function (Blueprint $table) {
            $table->dropColumn('user_id');   
            $table->dropColumn('type'); 
        });
    }
}
