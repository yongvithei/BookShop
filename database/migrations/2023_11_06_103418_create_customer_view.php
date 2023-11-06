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
        DB::statement("
            CREATE OR REPLACE VIEW customer_view AS
            SELECT
                po.id AS order_id,
                IFNULL(c.name, 'Walking Customer') AS customer_name,
                po.created_at AS order_date,
                po.payment,
                po.amount,
                po.received
            FROM
                pos_orders po
            LEFT JOIN
                customers c
            ON
                po.customer_id = c.id
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_view');
    }
};
