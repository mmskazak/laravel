<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('outline_keys', function (Blueprint $table) {
            $table->id();
            $table->integer('key_id');
            $table->string('name');
            $table->string('password');
            $table->string('port');
            $table->string('method');
            $table->string('accessUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('outline_keys');
    }
};
