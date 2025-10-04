<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
            CREATE VIEW view_procent_cheap_destinations AS
            SELECT
                d.location_name,
                COUNT(CASE WHEN a.amount < 500 THEN 1 END) * 100.0 / COUNT(*) AS procent_cheap
            FROM travel_sage.destination d
            JOIN travel_sage.activity a ON d.id_destination = a.id_destination
            GROUP BY d.id_destination, d.location_name
            ORDER BY procent_cheap DESC
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_procent_cheap_destinations');
    }
};
