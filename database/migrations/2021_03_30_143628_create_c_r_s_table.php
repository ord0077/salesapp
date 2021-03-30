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
           


            // crs.append('crs_country_id', (state.auto_fill) ? state.prefilled_input_field : state.crs_country_id);
            // crs.append('crs_country_txt', (state.auto_fill) ? state.prefilled_input_field : state.crs_country_txt);
            // crs.append('crs_city_id', (state.auto_fill) ? state.prefilled_input_field : state.crs_city_id);
            // crs.append('crs_city_txt', (state.auto_fill) ? state.prefilled_input_field : state.crs_city_txt);

            // crs.append('us_state', (state.auto_fill) ? state.prefilled_input_field : state.us_state);
            // crs.append('us_zipcode', (state.auto_fill) ? state.prefilled_input_field : state.us_zipcode);
            // crs.append('us_pobox', (state.auto_fill) ? state.prefilled_input_field : state.us_pobox);

            // crs.append('mailing_address', (state.auto_fill) ? state.prefilled_input_field : state.mailing_address);
            // crs.append('mailing_city', (state.auto_fill) ? state.prefilled_input_field : state.mailing_city);

            // crs.append('mailing_state', (state.auto_fill) ? state.prefilled_input_field : state.mailing_state);

            // crs.append('mailing_country', (state.auto_fill) ? state.prefilled_input_field : state.mailing_country);


            // crs.append('mailing_zipcod', (state.auto_fill) ? state.prefilled_input_field : state.mailing_zipcod);
            // crs.append('mailing_pobox', (state.auto_fill) ? state.prefilled_input_field : state.mailing_pobox);
            // crs.append('mailing_dob', (state.auto_fill) ? state.prefilled_input_field : state.mailing_dob);
            // crs.append('mailing_pob', (state.auto_fill) ? state.prefilled_input_field : state.mailing_pob);
            // crs.append('mailing_tob', (state.auto_fill) ? state.prefilled_input_field : state.mailing_tob);
            // crs.append('mailing_cob', (state.auto_fill) ? state.prefilled_input_field : state.mailing_cob);
            // crs.append('isTaxPayer', (state.auto_fill) ? state.prefilled_input_field : state.isTaxPayer);
            // crs.append('TaxPayerNumber', (state.auto_fill) ? state.prefilled_input_field : state.TaxPayerNumber);
            // crs.append('mailing_tax_country', (state.auto_fill) ? state.prefilled_input_field : state.mailing_tax_country);



            // crs.append('reason', (state.auto_fill) ? state.prefilled_input_field : state.reason);
            // crs.append('specify_second_reason', (state.auto_fill) ? state.prefilled_input_field : state.specificreason);



            $table->string('us_name_ah')->nullable();
            $table->string('us_family_name')->nullable();
            $table->string('us_given_name')->nullable();
            $table->string('us_middle_name')->nullable();
            $table->string('us_current_address')->nullable();

            $table->string('crs_country')->nullable();
            $table->string('crs_city')->nullable();
            $table->string('county_state')->nullable();            
            $table->string('postal_code')->nullable();
            $table->string('po_box')->nullable();

            $table->string('mailing_adress')->nullable();
            $table->string('mailing_town_city')->nullable();
            $table->string('mailing_county_state')->nullable();
            $table->string('mailing_country')->nullable();
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
