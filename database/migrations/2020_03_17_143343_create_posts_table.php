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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('listing_id')->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');		
            $table->string('gallery')->nullable();
            $table->string('video_url', 255)->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->string('currency')->nullable();
            $table->string('brand', 255)->nullable();
            $table->string('condition', 255)->nullable();
            $table->string('short_description', 255)->nullable();
            $table->text('specifications')->nullable();
            $table->timestamp('posted_at')->useCurrent();
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
        Schema::dropIfExists('posts');
    }
}
