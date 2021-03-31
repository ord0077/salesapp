<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('underage')->nullable();
            $table->string('guardian')->nullable();
            $table->string('relation_with_minor')->nullable();
            $table->string('cnic_nicop')->nullable();
            $table->string('cnic_nicop_expiry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('underage');
            $table->dropColumn('guardian');
            $table->dropColumn('relation_with_minor');
            $table->dropColumn('cnic_nicop');
            $table->dropColumn('cnic_nicop_expiry');
        });
    }
}
