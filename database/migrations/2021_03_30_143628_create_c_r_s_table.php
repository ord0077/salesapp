<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_r_s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('name_account_holder')->nullable();
            $table->string('family_surname')->nullable();
            $table->string('given_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('current_address')->nullable();
            $table->string('crs_city')->nullable();
            $table->string('county_state')->nullable();
            $table->string('crs_country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('po_box')->nullable();

            $table->string('mailing_adress')->nullable();
            $table->string('town_city')->nullable();
            $table->string('mailing_county_state')->nullable();
            $table->string('country')->nullable();
            $table->string('mailing_postal_code')->nullable();
            $table->string('mailing_po_box')->nullable();
            $table->string('mailing_dob')->nullable();
            $table->string('mailing_pob')->nullable();
            $table->string('mailing_tob')->nullable();
            $table->string('mailing_cob')->nullable();

            $table->string('tax_country_residence')->nullable();
            $table->string('taxpayer')->nullable();
            $table->string('taxpayer_number')->nullable();
            $table->string('reason')->nullable();
            $table->string('specify_second_reason')->nullable();
             
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
        Schema::dropIfExists('c_r_s');
    }
}
