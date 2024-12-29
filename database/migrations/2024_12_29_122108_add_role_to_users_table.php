<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_role_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding the 'role' column with a default value 'user'
            $table->string('role')->default('user'); 
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping the 'role' column in case of rollback
            $table->dropColumn('role'); 
        });
    }
}
