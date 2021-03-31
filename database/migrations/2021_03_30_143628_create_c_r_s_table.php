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
           
            $table->string('crs_name_account_holder')->nullable();
            $table->string('crs_family_name')->nullable();
            $table->string('crs_given_name')->nullable();
            $table->string('crs_middle_name')->nullable();
            $table->string('crs_current_address')->nullable();
            $table->string('crs_country_id')->nullable();
            $table->string('crs_country_txt')->nullable();
            $table->string('crs_city_id')->nullable();
            $table->string('crs_city_txt')->nullable();
            $table->string('crs_state')->nullable();            
            $table->string('crs_zipcode')->nullable();
            $table->string('crs_pobox')->nullable();



            $table->string('mailing_address')->nullable();
            $table->string('mailing_city')->nullable();
            $table->string('mailing_state')->nullable();
            $table->string('mailing_country')->nullable();
            $table->string('mailing_zipcode')->nullable();
            $table->string('mailing_pobox')->nullable();
            $table->string('mailing_dob')->nullable();
            $table->string('mailing_pob')->nullable();
            $table->string('mailing_tob')->nullable();
            $table->string('mailing_cob')->nullable();
            $table->string('mailing_tax_country')->nullable();

            
            $table->string('isTaxPayer')->nullable();
            $table->string('TaxPayerNumber')->nullable();
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
