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
            CREATE OR REPLACE VIEW admin_view AS
            SELECT users.id, users.name, users.email, roles.name as role_name
            FROM users
            LEFT JOIN model_has_roles ON users.id = model_has_roles.model_id
            LEFT JOIN roles ON model_has_roles.role_id = roles.id
            WHERE users.role = "Admin" OR users.role IS NULL;
        ');
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_view');
    }
};
