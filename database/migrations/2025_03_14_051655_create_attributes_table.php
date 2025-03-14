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
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('title');
            $table->timestamps();
        });

        DB::table('attributes')->insert([
            // Laptop attributes
            ['identifier' => 'processor', 'title' => 'Processor'],
            ['identifier' => 'ram', 'title' => 'RAM'],
            ['identifier' => 'storage', 'title' => 'Storage'],
            ['identifier' => 'screen_size', 'title' => 'Screen Size'],
            ['identifier' => 'gpu', 'title' => 'Graphics Card'],

            // Phone attributes
            ['identifier' => 'camera_megapixels', 'title' => 'Camera (MP)'],
            ['identifier' => 'battery_capacity', 'title' => 'Battery Capacity (mAh)'],
            ['identifier' => 'os', 'title' => 'Operating System'],
            ['identifier' => 'sim_slots', 'title' => 'SIM Slots'],

            // Headphone attributes
            ['identifier' => 'wireless', 'title' => 'Wireless'],
            ['identifier' => 'noise_cancellation', 'title' => 'Noise Cancellation'],
            ['identifier' => 'battery_life_hours', 'title' => 'Battery Life (hours)'],
            ['identifier' => 'connector_type', 'title' => 'Connector Type'],

            // Display attributes
            ['identifier' => 'resolution', 'title' => 'Resolution'],
            ['identifier' => 'refresh_rate', 'title' => 'Refresh Rate'],
            ['identifier' => 'maximum_resolution', 'title' => 'Maximum Resolution'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
