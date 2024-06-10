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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('pro_kh')->nullable();
            $table->string('slug')->nullable();
            $table->double('price',10,2);
            $table->double('discount_price',10,2)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('partner_id')->nullable();
            $table->string('pro_code')->unique()->nullable();
            $table->string('pro_qty')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->integer('new')->nullable();
            $table->integer('featured')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('products')->insert([
            [
                'name' => 'The Golden Voice Queen',
                'pro_kh' => 'រាជិនីសំឡេងមាស',
                'slug' => 'The-Golden-Voice-Queen',
                'price' => '70000.00',
                'discount_price' => '60000.00',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '10732397981',
                'pro_qty' => '50',
                'short_desc' => 'Self-Help, Relationships & Lifestyle',
                'long_desc' => '',
                'new' => '1',
                'featured' => '1',
                'status' => '1',
                'thumbnail' => "",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jewish Business Rules Part 3',
                'pro_kh' => 'តម្រាធ្វើជំនួញរបស់ជនជាតិជីហ្វភាគ៣',
                'slug' => 'Jewish-Business-Rules-Part-3',
                'price' => '80000.00',
                'discount_price' => '75000.00',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '10734397981',
                'pro_qty' => '50',
                'short_desc' => 'Self-Help, Relationships & Lifestyle',
                'long_desc' => '',
                'new' => '1',
                'featured' => '1',
                'status' => '1',
                'thumbnail' => "",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Influential eldest son',
                'pro_kh' => 'កូនប្រុសច្បងដ៏មានឥទ្ធិពល',
                'slug' => 'Influential-eldest-son',
                'price' => '50000.00',
                'discount_price' => '48000.00',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '1073497981',
                'pro_qty' => '50',
                'short_desc' => 'Self-Help, Relationships & Lifestyle',
                'long_desc' => '',
                'new' => '1',
                'featured' => '1',
                'status' => '1',
                'thumbnail' => "",
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
        Schema::dropIfExists('products');
    }
};
