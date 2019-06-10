<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTopicLogAddTitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topic_mails', function (Blueprint $table) {      
            $table->string('group_title')->nullable()->add(); 
            $table->string('topic_name')->nullable()->add();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topic_mails', function (Blueprint $table) {
            $table->dropColumn('group_title');   
            $table->dropColumn('topic_name'); 
        });
    }
}
