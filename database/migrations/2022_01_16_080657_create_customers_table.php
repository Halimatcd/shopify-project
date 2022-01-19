<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_no');
            $table->string('reciever_name');
            $table->string('reciever_no');
            $table->string('item');
            $table->string('pick_up');
            $table->string('destination');
            $table->timestamps();
            $table->string('deletion_comment')->nullable()->default(null);
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
