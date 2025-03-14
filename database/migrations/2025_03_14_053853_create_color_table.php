<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('colors')->insert([
            ['name' => 'Red'],
            ['name' => 'Blue'],
            ['name' => 'Green'],
            ['name' => 'Black'],
            ['name' => 'White'],
            ['name' => 'Yellow'],
            ['name' => 'Gray'],
            ['name' => 'Pink'],
            ['name' => 'Purple'],
            ['name' => 'Orange']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color');
    }
};
