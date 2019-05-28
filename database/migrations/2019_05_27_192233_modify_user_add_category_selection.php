<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUserAddCategorySelection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {     
            $table->integer('catsel_status')->default(0)->add(); 
            $table->string('catsel_type')->nullable()->add(); 
            $table->string('catsel_name')->nullable()->add(); 
            $table->integer('catsel_admin')->default(0)->add();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('catsel_status');   
            $table->dropColumn('catsel_type');
            $table->dropColumn('catsel_name');   
            $table->dropColumn('catsel_admin');
        });
    }
}
