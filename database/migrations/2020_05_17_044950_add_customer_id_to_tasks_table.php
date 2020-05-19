<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomerIdToTasksTable extends Migration
{

    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('customer_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_id');
    }
}
