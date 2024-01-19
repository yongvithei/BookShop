<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement('
            CREATE OR REPLACE VIEW product_view AS
            SELECT
                p.id AS id,
                p.name AS name,
                p.pro_kh AS pro_kh,
                CASE
                    WHEN p.discount_price IS NULL OR p.discount_price = \'\' THEN p.price
                    ELSE p.discount_price
                END AS selling_price,
                p.price AS pro_price,
                p.discount_price AS pro_discount,
                p.pro_code AS product_code,
                p.pro_qty AS pro_qty,
                p.status AS _status,
                p.thumbnail AS thumbnail,
                sc.sub_name AS sub_names,
                c.name AS cate_names,
                pt.name AS partner_name
            FROM
                products AS p
            LEFT JOIN
                sub_categories AS sc ON p.subcategory_id = sc.id
            LEFT JOIN
                categories AS c ON p.category_id = c.id
            LEFT JOIN
                partners AS pt ON p.partner_id = pt.id
            WHERE p.deleted_at IS NULL;
        ');
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_views');
    }
};
