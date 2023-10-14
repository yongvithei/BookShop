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
            CREATE OR REPLACE VIEW review_view AS
            SELECT r.id, r.comment, u.name AS user_name,p.name AS pro_name,r.rating, r.status 
            FROM reviews r 
            JOIN users u ON r.user_id = u.id 
            JOIN products p ON r.product_id = p.id
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_view');
    }
};
