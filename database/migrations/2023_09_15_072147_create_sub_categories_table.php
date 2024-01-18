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
            $table->string('sub_name')->nullable();
            $table->string('sub_kh')->nullable();
            $table->integer('cat_id');
            $table->string('sub_slug');
            $table->enum('status', ['Public', 'Private'])->default('Public');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('sub_categories')->insert([
            [
                'sub_name' => 'Mystery and Thriller',
                'sub_kh' => 'អាថ៌កំបាំង និងរន្ធត់',
                'cat_id' => 1,
                'sub_slug' => 'Mystery-and-Thriller',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sub_name' => 'Science Fiction and Fantasy',
                'sub_kh' => 'ប្រឌិតវិទ្យាសាស្រ្ត និង ស្រមើស្រមៃ',
                'cat_id' => 1,
                'sub_slug' => 'Science-Fiction-and-Fantasy',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Historical Fiction',
                'sub_kh' => 'រឿងប្រឌិតប្រវត្តិសាស្ត្រ',
                'cat_id' => 1,
                'sub_slug' => 'Historical-Fiction',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Biography and Memoir',
                'sub_kh' => 'ជីវប្រវត្តិ និងអនុស្សាវរីយ៍',
                'cat_id' => 1,
                'sub_slug' => 'Biography-and-Memoir',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Science and Nature',
                'sub_kh' => 'វិទ្យាសាស្ត្រ និងធម្មជាតិ',
                'cat_id' => 1,
                'sub_slug' => 'Science-and-Nature',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Children Picture Books',
                'sub_kh' => 'សៀវភៅរូបភាពកុមារ',
                'cat_id' => 1,
                'sub_slug' => 'Children-Picture-Books',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Art History',
                'sub_kh' => 'ប្រវត្តិសិល្បៈ',
                'cat_id' => 1,
                'sub_slug' => 'Art-History',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Writing Instruments',
                'sub_kh' => 'ឧបករណ៍សរសេរ',
                'cat_id' => 2,
                'sub_slug' => 'Writing-Instruments',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Notebooks and Paper',
                'sub_kh' => 'សៀវភៅកត់ត្រា និងក្រដាស',
                'cat_id' => 2,
                'sub_slug' => 'Notebooks-and-Paper',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Desk Accessories',
                'sub_kh' => 'គ្រឿងតុ',
                'cat_id' => 3,
                'sub_slug' => 'Desk-Accessories',
                'status' => 'Public',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'sub_name' => 'Painting Supplies',
                'sub_kh' => 'សម្ភារៈគំនូរ',
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
