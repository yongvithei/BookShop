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
            CREATE OR REPLACE VIEW district_view AS
            SELECT d.id, d.name, c.name AS city_name, d.status
            FROM ship_districts d
            JOIN ship_cities c ON d.city_id = c.id
            WHERE d.deleted_at IS NULL;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('district_view');
    }
};
