<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');  // default
            $table->string('content', 255);  // 加入content
            $table->timestamps();  // default
        });
    }
    public function down() {
        Schema::dropIfExists('posts');
    }
}