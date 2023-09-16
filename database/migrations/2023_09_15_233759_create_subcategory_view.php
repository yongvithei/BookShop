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
            CREATE OR REPLACE VIEW subcategory_view AS
            SELECT s.id, s.sub_name, s.cat_id, c.name AS cat_name, s.status
            FROM sub_categories s
            JOIN categories c ON s.cat_id = c.id
            WHERE s.deleted_at IS NULL;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategory_view');
    }
};
