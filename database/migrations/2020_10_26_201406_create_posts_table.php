<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('genre_id');
            $table->string('title');
            $table->string('image');
            $table->boolean('type');
            $table->integer('year');
            $table->text('description');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }
//genre has to be added!!
    /**
     * Reverse the migrations.
     *
     * @return void
     *///this happens when you rollback the migration, it'll drop the table.
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
