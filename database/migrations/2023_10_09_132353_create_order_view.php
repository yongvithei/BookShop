<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement('
            CREATE OR REPLACE VIEW order_view AS
            SELECT o.id, o.name AS ship_name, o.phone AS ship_phone, o.email AS ship_email, c.name AS ship_city, d.name AS ship_district,o.post_code ship_post, o.order_date,u.name,u.email,o.payment_method,o.transaction_id,o.invoice_no,o.amount,o.status 
            FROM orders o 
            JOIN ship_cities c ON o.city_id = c.id 
            JOIN ship_districts d ON o.district_id = d.id
            JOIN users u ON o.user_id = u.id

        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_view');
    }
};
