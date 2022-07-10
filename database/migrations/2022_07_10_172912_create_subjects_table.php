<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');  // default
            $table->string('name', 255);  // 加入name
            $table->timestamps();  // default
        });
    }
    public function down() {
        Schema::dropIfExists('subjects');
    }
};
