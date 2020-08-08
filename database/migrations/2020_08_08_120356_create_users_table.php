<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db1')->create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');

            // it is "string" for special, to be changed in a next migration
            // only for testing purposes
            $table->string('num_friends')->default(0)->comment('Number of Friends');

            $precision = 0;
            $table->timestamp('created_at', $precision)->nullable()->comment('Created At');
            $table->timestamp('updated_at', $precision)->nullable()->comment('Updated At');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('db1')->dropIfExists('users');
    }
}
