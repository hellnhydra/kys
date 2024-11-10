<?php

// database/migrations/xxxx_xx_xx_add_name_to_conferences_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToConferencesTable extends Migration
{
    public function up()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->string('name')->after('id'); // Add the name column
        });
    }

    public function down()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->dropColumn('name'); // Drop the name column if needed
        });
    }
}
