<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('company');
            $table->string('thumbnail');
            $table->string('banner');
            $table->string('workscategories_id');
            $table->integer('is_active')->default(0);
            $table->text('body');
            $table->text('intro');
            $table->string('url')->nullable();
            $table->integer('star')->default(0);
            $table->integer('like')->default(0);
            $table->string('date')->default('No Date');
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
        Schema::dropIfExists('works');
    }
}
