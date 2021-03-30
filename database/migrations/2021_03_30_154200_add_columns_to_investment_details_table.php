<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToInvestmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investment_details', function (Blueprint $table) {
            $table->string('beneficiary_investment')->nullable();
            $table->string('ultimate_beneficiary_name')->nullable();
            $table->string('relation_ultimate_beneficiary_with_investor')->nullable();
            $table->string('cnic_nicp_passport_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investment_details', function (Blueprint $table) {
            $table->dropColumn('beneficiary_investment');
            $table->dropColumn('ultimate_beneficiary_name');
            $table->dropColumn('relation_ultimate_beneficiary_with_investor');
            $table->dropColumn('cnic_nicp_passport_no');
        });
    }
}
