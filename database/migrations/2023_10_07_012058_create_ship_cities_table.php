<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ship_cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ci_kh')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('ship_cities')->insert([
            [
                'name' => 'Battambang',
                'ci_kh' => 'បាត់ដំបង',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phnom Pehn',
                'ci_kh' => 'ភ្នំពេញ',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ship_cities');
    }
};
