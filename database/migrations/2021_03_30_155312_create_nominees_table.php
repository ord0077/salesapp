<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('share_percentage')->nullable();
            $table->string('cnic_nicop')->nullable();
            $table->string('cnic_nicop_expiry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominees');
    }
}
