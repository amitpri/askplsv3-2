<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTopiccompaniesAddReviewViewable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topic_companies', function (Blueprint $table) {      
            $table->boolean('reviewdisplay')->default(true)->add();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topic_companies', function (Blueprint $table) {
            $table->dropColumn('reviewdisplay');  
        });
    }
}
