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
                'name' => 'Dark Psychology Secrets',
                'pro_kh' => 'អាថ៌កំបាំងនៃចិត្តវិទ្យាងងឹត',
                'slug' => 'Dark-Psychology-Secrets',
                'price' => '90000.00',
                'discount_price' => '80000.00',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '10727397981',
                'pro_qty' => '50',
                'short_desc' => 'Self-Help, Relationships & Lifestyle - Psychological Self-Help',
                'long_desc' => '<p>Whether you have been experiencing manipulation for years, or if this is something entirely new, psychological manipulation can be tricky to decipher. Mostly because the manipulators themselves are true masters of emotional disguise. More often than not, their sweet talking covers their self-serving, dishonest, and, on the whole, sinister intentions. On top of this confusing mismatch of words and actions, they often try to evoke in their interlocutor powerful feelings of guilt or sympathy, so as to make them more susceptible to manipulation. They can be found anywhere, even in the places we frequent most. It could be your partner, your boss, your neighbor, a co-worker, a distant or close relative, or even a friend.</p>',
                'new' => '1',
                'featured' => '1',
                'status' => '1',
                'thumbnail' => "",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Learn Python in One Day and Learn it Well',
                'pro_kh' => 'រៀន Python ក្នុងមួយថ្ងៃ ហើយរៀនវាឱ្យបានល្អ',
                'slug' => 'Learn-Python-in-One-Day-and-Learn-it-Well',
                'price' => '80000',
                'discount_price' => '70000',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '9781506094380',
                'pro_qty' => '40',
                'short_desc' => 'Computers - Programming',
                'long_desc' => '<p>Python, what Python? -- Getting ready for Python -- The world of variables and operators -- Data types in Python -- Making your program interactive -- Making choices and decisions -- Functions and modules -- Working with files -- Project : math and BODMAS<p>',
                'new' => '1',
                'featured' => '1',
                'status' => '1',
                'thumbnail' => "",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Self Discipline Mindset',
                'pro_kh' => 'ផ្នត់គំនិតវិន័យខ្លួនឯង',
                'slug' => 'Self-Discipline-Mindset',
                'price' => '97000',
                'discount_price' => '90000',
                'category_id' => '1',
                'subcategory_id' => '1',
                'partner_id' => '1',
                'pro_code' => '1544660472',
                'pro_qty' => '98',
                'short_desc' => 'Self-Help, Relationships & Lifestyle - Psychological Self-Help',
                'long_desc' => '<p>This book has actionable information that will help you to supercharge your self-discipline to achieve great feats in life. We all set many goals in life and hope that we will achieve them. Unfortunately, many of us don\'t have the discipline to follow what it takes to transform these goals to reality. We somehow lose our passion and drive to do what needs to be done after setting goals. Think about it; every year, we all set New Year\'s resolutions with the hope that by the end of the calendar year, we would have changed different aspects of our lives. We start off overly excited that by the end of the year, our life would be completely different. <p>',
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
