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
                d.imelokacija,
                COUNT(CASE WHEN a.iznos < 500 THEN 1 END) * 100.0 / COUNT(*) AS procent_cheap
            FROM travel_sage.destinacii d
            JOIN travel_sage.aktivnosti a ON d.iddest = a.iddest
            GROUP BY d.iddest, d.imelokacija
            ORDER BY procent_cheap DESC
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_procent_cheap_destinations');
    }
};
