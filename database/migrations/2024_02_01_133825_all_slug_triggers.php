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
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER before_insert_product
            BEFORE INSERT ON products
            FOR EACH ROW
            BEGIN
                IF NEW.slug IS NULL OR NEW.slug = "" THEN
                    SET NEW.slug = LOWER(REPLACE(NEW.pro_kh, " ", "-"));
                END IF;
            END
        ');

        DB::unprepared('
            CREATE TRIGGER before_update_product
            BEFORE UPDATE ON products
            FOR EACH ROW
            BEGIN
                IF NEW.slug IS NULL OR NEW.slug = "" THEN
                    SET NEW.slug = LOWER(REPLACE(NEW.pro_kh, " ", "-"));
                END IF;
            END
        ');

        // Trigger for categories table on insert
        DB::unprepared('
            CREATE TRIGGER before_insert_categories
            BEFORE INSERT ON categories
            FOR EACH ROW
            BEGIN
                IF NEW.slug IS NULL OR NEW.slug = "" THEN
                    SET NEW.slug = LOWER(REPLACE(NEW.cat_kh, " ", "-"));
                END IF;
            END
        ');

        // Trigger for categories table on update
        DB::unprepared('
            CREATE TRIGGER before_update_categories
            BEFORE UPDATE ON categories
            FOR EACH ROW
            BEGIN
                IF NEW.slug IS NULL OR NEW.slug = "" THEN
                    SET NEW.slug = LOWER(REPLACE(NEW.cat_kh, " ", "-"));
                END IF;
            END
        ');

        // Trigger for sub_categories table on insert
        DB::unprepared('
            CREATE TRIGGER before_insert_sub_categories
            BEFORE INSERT ON sub_categories
            FOR EACH ROW
            BEGIN
                IF NEW.sub_slug IS NULL OR NEW.sub_slug = "" THEN
                    SET NEW.sub_slug = LOWER(REPLACE(NEW.sub_kh, " ", "-"));
                END IF;
            END
        ');

        // Trigger for sub_categories table on update
        DB::unprepared('
            CREATE TRIGGER before_update_sub_categories
            BEFORE UPDATE ON sub_categories
            FOR EACH ROW
            BEGIN
                IF NEW.sub_slug IS NULL OR NEW.sub_slug = "" THEN
                    SET NEW.sub_slug = LOWER(REPLACE(NEW.sub_kh, " ", "-"));
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop triggers for products table
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_product');
        DB::unprepared('DROP TRIGGER IF EXISTS before_update_product');

        // Drop triggers for categories table
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_categories');
        DB::unprepared('DROP TRIGGER IF EXISTS before_update_categories');

        // Drop triggers for sub_categories table
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_sub_categories');
        DB::unprepared('DROP TRIGGER IF EXISTS before_update_sub_categories');
    }
};
