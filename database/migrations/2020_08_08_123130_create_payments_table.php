<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // for disabling foreign key constraints use the following code
        Schema::connection('db2')->disableForeignKeyConstraints();
        Schema::connection('db2')->enableForeignKeyConstraints();

        Schema::connection('db2')->create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');

            $table->unsignedBigInteger('user_id')->comment('User ID from MySQL');
            $table->boolean('is_paid')->default(false)->comment('Is paid?');

            $table->integer('retries')->nullable()->comment('Number of Retries');

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
        Schema::connection('db2')->dropIfExists('payments');
    }
}
