<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table){
            $table->id();
            $table->string('name', 255);
            $table->text('image_url');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('groups');
    }

};
