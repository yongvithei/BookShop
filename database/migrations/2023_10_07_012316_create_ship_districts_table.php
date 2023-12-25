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
        Schema::create('ship_districts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('name');
            $table->string('dis_kh')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('ship_districts')->insert([
            [
                'city_id' => '1',
                'name' => 'Aek Phnum',
                'dis_kh' => 'ឯកភ្នំ',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => '1',
                'name' => 'Banan',
                'dis_kh' => 'បាណន់',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'city_id' => '1',
                'name' => 'Battambang Municipality',
                 'dis_kh' => 'ក្រុងបាត់ដំបង',
                 'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'city_id' => '1',
                'name' => 'Bavel',
                 'dis_kh' => 'បវេល',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => '1',
                'name' => 'Kamrieng',
                'dis_kh' => 'កំរៀង',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => '1',
                'name' => 'Koas Krala',
                'dis_kh' => 'កូសក្រឡា',
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
        Schema::dropIfExists('ship_districts');
    }
};
