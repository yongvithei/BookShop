<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('desc')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('categories')->insert([
            [
                'name' => 'Book',
                'slug' => 'Book',
                'desc' => 'Explore our extensive collection of books across various genres, from bestsellers to hidden gems, fiction to non-fiction.',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Office Supplies',
                'slug' => 'Office-Supplies',
                'desc' => ' Find everything you need to create the perfect workspace, including pens, notebooks, planners, and desk accessories.',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stationery',
                'slug' => 'Stationery',
                'desc' => 'Elevate your writing and note-taking with our elegant stationery options, including letterhead, envelopes, and high-quality paper.',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Art Supplies',
                'slug' => 'Art-Supplies',
                'desc' => 'For those with a creative spark, explore our art supplies section, featuring paints, brushes, sketchbooks, and more to fuel your artistic endeavors.',
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
        Schema::dropIfExists('categories');
    }
};
