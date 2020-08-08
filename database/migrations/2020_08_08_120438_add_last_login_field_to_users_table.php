<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastLoginFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db1')->table('users', function (Blueprint $table) {

            $table->dateTime('last_login')->nullable()->comment('Last login');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db1')->table('users', function (Blueprint $table) {

            $table->dropColumn('last_login');

        });
    }
}
