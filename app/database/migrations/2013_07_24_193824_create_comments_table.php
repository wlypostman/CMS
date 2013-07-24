<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('comments', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->integer('user_id')->unsigned();
            $table->integer('blog_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('comments');
    }
}
