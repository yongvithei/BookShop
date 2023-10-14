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
            CREATE OR REPLACE VIEW orderitem_view AS
           SELECT
                i.order_id as order_id,
                p.name,
                p.pro_code,
                i.qty as orderqty,
                p.pro_qty AS qtyinstock,
                p.price,
                (i.qty * p.price) AS total_price
            FROM
                order_items i
            JOIN
                products p ON i.product_id = p.id

        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item_view');
    }
};
