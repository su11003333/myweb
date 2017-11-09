<?php

use Illuminate\Support\Facades\Schema;
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
            $table->unsignedInteger('user_id');
            $table->integer('is_active')->default(0);
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->string('title');
            $table->text('body');
            $table->integer('hits')->default(0);
            $table->integer('like')->default(0);
//            $table->string('feature_id')->default(0);
            $table->string('banner');
            $table->timestamps();




        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
