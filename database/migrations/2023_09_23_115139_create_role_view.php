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
            CREATE OR REPLACE VIEW role_view AS
            SELECT roles.id AS id, roles.name AS role_name,
                GROUP_CONCAT(permissions.name) AS permission_names
            FROM
                roles
            JOIN
                role_has_permissions ON roles.id = role_has_permissions.role_id
            JOIN
                permissions ON role_has_permissions.permission_id = permissions.id
            GROUP BY
                roles.id, roles.name;  -- Include roles.id in GROUP BY
        ');
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_view');
    }
};
