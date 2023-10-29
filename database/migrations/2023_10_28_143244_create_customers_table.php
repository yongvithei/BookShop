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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('photo')->nullable()->default('default.png');
            $table->string('note')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('customers')->insert([
            [
                'name' => 'Walking Customer',
                'address' => 'walker',
                'contact' => 'none',
                'photo' => 'default.jpg',
                'note' => 'For Customer that did not store information',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bopha',
                'address' => 'BTB',
                'contact' => '0987172352',
                'photo' => 'default.jpg',
                'note' => 'VIP Member',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sokha',
                'address' => 'BTB',
                'contact' => '0234234',
                'photo' => 'default.jpg',
                'note' => 'Premium Member',
                'status' => 'Active',
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
        Schema::dropIfExists('customers');
    }
};
