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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('desc')->nullable();
            $table->string('avatar')->nullable()->default('default.jpg');
            $table->enum('status', ['Active', 'Inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('partners')->insert([
            [
                'name' => 'Creative Art Supplies Co.',
                'phone' => '(885) 123-4567,  jane.smith@creativeartsupplies.com',
                'address' => '123 Art Street, Artville, AR 12345',
                'desc' => 'Creative Art Supplies Co. is a well-established supplier of high-quality art materials and supplies. They have been serving artists, art schools, and businesses for over two decades. Their commitment to quality and customer satisfaction makes them a reliable partner for all your art supply needs. Product Offerings:
                    A wide range of art supplies, including paints, brushes, canvases, sketchbooks, and more.
                    High-quality, artist-grade materials suitable for professionals and hobbyists.
                    Competitive pricing and bulk purchase discounts available.',
                'avatar' => 'default.jpg',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GreenEarth Office Solutions',
                'phone' => '(885) 987-6543,  mark.johnson@greenearthoffice.com',
                'address' => '456 Eco Lane, Sustainable City, SC 54321',
                'desc' => 'GreenEarth Office Solutions is a leading supplier of eco-friendly office supplies and sustainable stationery products. With a strong commitment to environmental responsibility, they provide a wide range of environmentally friendly and recycled office materials suitable for home offices, businesses, and educational institutions. Product Offerings:
                    Recycled paper products, including notebooks, copy paper, and envelopes.
                    Environmentally conscious office supplies such as recycled ink and toner cartridges, reusable notebooks, and eco-friendly writing instruments.
                    Sustainable desk organizers, file folders, and storage solutions.
                    Green cleaning products for maintaining an eco-friendly workspace.',
                'avatar' => 'default.jpg',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Book Distributors Inc',
                'phone' => '(885) 789-0123, Contact Person: Sarah Davis, sarah.davis@bookdistributors.com',
                'address' => '789 Reading Avenue, Booktown, BT 67890',
                'desc' => 'Book Distributors Inc. is a reputable book wholesaler with a long history of serving bookshops and libraries across the country. They offer an extensive catalog of titles, including new releases, bestsellers, and niche genres. With a focus on quality and reliability, they are dedicated to supporting the success of your bookshop. Product Offerings:
                A vast collection of books spanning various genres, from fiction to non-fiction, and including rare and collectible editions.
                Timely access to new releases and pre-orders, ensuring you have the latest titles available to your customers.
                Competitive pricing and volume discounts to accommodate the needs of your library bookshop.',
                'avatar' => 'default.jpg',
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
        Schema::dropIfExists('partners');
    }
};
