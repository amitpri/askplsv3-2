<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowReviewMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tenant_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('topic_id')->unsigned()->nullable();
            $table->integer('profile_id')->unsigned()->nullable(); 
            $table->string('topic_name')->nullable(); 
            $table->text('review')->nullable();  
            $table->integer('published')->unsigned()->nullable();
            $table->integer('status')->default(1);
            $table->string('topic_categories_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_members');
    }
}
