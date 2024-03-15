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
        DB::statement('
            CREATE TRIGGER update_cancel_date BEFORE UPDATE ON orders
            FOR EACH ROW
            BEGIN
                IF NEW.status = "cancelled" AND OLD.status != "cancelled" THEN
                    SET NEW.cancel_date = NOW();
                END IF;
            END;
        ');

        DB::statement('
            CREATE TRIGGER update_delivered_date BEFORE UPDATE ON orders
            FOR EACH ROW
            BEGIN
                IF NEW.status = "delivered" AND OLD.status != "delivered" THEN
                    SET NEW.delivered_date = NOW();
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TRIGGER IF EXISTS update_cancel_date');
        DB::statement('DROP TRIGGER IF EXISTS update_delivered_date');
    }
};
