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
    //up() run when the migration is executed to apply changes to the DB
    public function up()
    {

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //add some column here
            $table->text('body');
            $table->timestamps();
        });
    }

/**
 * Reverse the migrations.
 *
 * @return void
 */
//and the down() run to revert the changes
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
