<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('vechiles');
            $table->integer('vechiletype')->default(0);
            $table->text('pickup');
            $table->text('drop');
            $table->string('name');
            $table->integer('contact')->unsigned();
            $table->integer('weight')->unsigned();
            $table->string('date');
            $table->string('time');
            $table->integer('frotoguy')->default(0);
            $table->integer('frotoguynumber')->default(0);
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
        Schema::drop('posts');
    }
}
