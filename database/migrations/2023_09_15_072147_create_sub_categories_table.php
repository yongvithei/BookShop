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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_name');
            $table->integer('cat_id');
            $table->string('sub_slug');
            $table->enum('status', ['Public', 'Private'])->default('Public');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('sub_categories')->insert([
            [
                'sub_name' => 'Mystery and Thriller',
                'cat_id' => 1,
                'sub_slug' => 'Mystery-and-Thriller',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sub_name' => 'Science Fiction and Fantasy',
                'cat_id' => 1,
                'sub_slug' => 'Science-Fiction-and-Fantasy',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Historical Fiction',
                'cat_id' => 1,
                'sub_slug' => 'Historical-Fiction',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Biography and Memoir',
                'cat_id' => 1,
                'sub_slug' => 'Biography-and-Memoir',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Science and Nature',
                'cat_id' => 1,
                'sub_slug' => 'Science-and-Nature',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Children Picture Books',
                'cat_id' => 1,
                'sub_slug' => 'Children-Picture-Books',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Art History',
                'cat_id' => 1,
                'sub_slug' => 'Art-History',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Writing Instruments',
                'cat_id' => 2,
                'sub_slug' => 'Writing-Instruments',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Notebooks and Paper',
                'cat_id' => 2,
                'sub_slug' => 'Notebooks-and-Paper',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Desk Accessories',
                'cat_id' => 3,
                'sub_slug' => 'Desk-Accessories',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Painting Supplies',
                'cat_id' => 3,
                'sub_slug' => 'Painting-Supplies',
                'status' => 'Public',
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
        Schema::dropIfExists('sub_categories');
    }
};
