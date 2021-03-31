<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Mail\Forms;
use App\Mail\Welcome;
use Validator;
use App\Risk;
use App\CRS;




class ApiController extends Controller
{
	public function get_risk_data($cnic)
{
	
	$risk = Risk::where('client_cnic', $cnic)
			->select(
				'client_name',
				'client_email',
				'client_number',
				'client_cnic',
				'choosen_fund',
				'choosen_fund_id')->first();

	$user = DB::table('customers')
			->select('cnic')
			->where('cnic', $cnic)
			->first();
	return response()->json([
		'risk_profile_filled' => $risk ?? false,
		'daof_user' => $user ? true : false
		]);
}
	public function ts(Request $req)
	{
		return response()->json(number_format($req->ts));
	}
	
	public function users()
	{
		$data = [
			'user_name' => 'user_name',
			'msg' => 'test'
		];
		$mail = Mail::to('aizazkalwar46@gmail.com')  
					->cc('francisgill1000@gmail.com')      
					->send(new Forms($data));

					//dd($mail);

					return empty($mail) ? 'mail sent' : 'mail not sent'; 

	}
	
	public function save_customer_info(Request $req)
	{

		$cnic_attachment = null;
		if($req->hasFile('cnic_attachment')){
			$cnic_attachment = $req->cnic_attachment->getClientOriginalName();
			$req->cnic_attachment->move(public_path('uploads/cnic_attachment/'),$cnic_attachment);		
		}

		$soi_attachment = null;
		if($req->hasFile('soi_attachment')){
			$soi_attachment = $req->soi_attachment->getClientOriginalName();
			$req->soi_attachment->move(public_path('uploads/soi_attachment/'),$soi_attachment);		
		}

		$zakat_certificate = 'no_image.png';
		if($req->hasFile('zakat_certificate')){
			$zakat_certificate = $req->zakat_certificate->getClientOriginalName();
			$req->zakat_certificate->move(public_path('uploads/zakat_certificates/'),$zakat_certificate);		
		}


		$arr = [
			"qq" => $req->qq,
			"name" => $req->name,
			"father_name" => $req->father_name,
			"mother_name" => $req->mother_name, 
			"dob" => $req->dob, 
			"cnic" => $req->cnic,
			"cnic_attachment" => $cnic_attachment,
			"cnic_issue_date" => $req->cnic_issue_date,
			"pob_country" => $req->pob_country,
			"pob_city" => $req->pob_city,
			"email" => $req->email,
			"cell" => $req->cell,    
			"occupation" => $req->occupation,
			"occ_name" => $req->occ_name,
			"soi" => $req->soi,
			"soi_attachment" => $soi_attachment,
			"address" => $req->address,
			"country1" => $req->country1,
			"city1" => $req->city1,
			"zakat" => $req->zakat,
			"zakat_options" => $req->zakat_options,
			"zakat_certificate" => $zakat_certificate,
			"designation" => $req->designation, 
			"department" => $req->department,   
			"org_emp_bes_name"  => $req->org_emp_bes_name,
			"working_experience" => $req->working_experience,  
			"age_of_business" => $req->age_of_business,
			"education" => $req->education,
			"marital_status" => $req->marital_status,
			"no_of_dependants" => $req->no_of_dependants,
			"public_figure" => $req->public_figure,
			"average_annual_income" => $req->average_annual_income,
			"refused_account_by_institute" => $req->refused_account_by_institute,
			"high_value_item" => $req->high_value_item,
			"pob_city_id" => $req->pob_city_id,
			"pob_country_id" => $req->pob_country_id,
			"city1_id" => $req->city1_id,
			"country1_id" => $req->country1_id,
			"marital_status_id" => $req->marital_status_id,
			"soi_id" => $req->soi_id,
			"occupation_id" => $req->occupation_id,
			"average_annual_income_id" => $req->average_annual_income_id,
			"created_at" => now(),
			"updated_at" => now(),
			"underage" => $req->underage,
			"guardian" => $req->guardian,
			"relation_with_minor" => $req->relation_with_minor,
			"cnic_nicop" => $req->cnic_nicop,
			"cnic_nicop_expiry" => $req->cnic_nicop_expiry,
	];
	//dd($arr);

	

		$inserted = DB::table('customers')->insertGetId($arr);
		

			$mail_data = [
			'customer_name' => $req->name,
			'cnic' => $req->cnic,
			"qq" => $req->qq,
			"email" => $req->email
			];

			// $mail = new Welcome($mail_data);
			// Mail::to($req->email)->send($mail);	  
			$res = $inserted ? $inserted : 500 ;
			
			return response()->json($res);
	}

		public function save_bank_details(Request $req){
	
		$arr = [
		"bank_name" => $req->bank_name,
		"branch_name" => $req->branch_name,
		"account_title" => $req->account_title, 
		"iban_number" => $req->iban_number, 
		"customer_id" => $req->customer_id,
		"bank_name_id" => $req->bank_name_id,
		"branch_name_id" => $req->branch_name_id,
		"created_at" => now(),
		"updated_at" => now(),
	];
		$inserted = DB::table('bank_details')->insert($arr);
		return response()->json(200);
		
	}



		public function save_investment_details(Request $req){

		$attachment = 'no_iamge.png';
		if($req->hasFile('attachment')){
			$attachment = $req->attachment->getClientOriginalName();

			$req->attachment->move(public_path('uploads/investment_detail_attachments/'),$attachment);
		}

	

		$arr = [
		"fund_name" => $req->fund_name,
		"fund_name_id" => $req->fund_name_id,
		"amount" => $req->amount,
		"amount_in_words" => $req->amount_in_words, 
		"front_end_load" => $req->front_end_load,
		"payment_mode" => $req->payment_mode, 
		"attachment" => $attachment,
		"bank_name" => $req->bank_name_inv,
		"instrument_number" => $req->instrument_number,
		"customer_id" => $req->customer_id,
		"payment_mode_id" => $req->payment_mode_id,
		"bank_name_id" => $req->bank_name_inv_id,
		"created_at" => now(),
		"updated_at" => now(),
		"beneficiary_investment" => $req->beneficiary_investment,
		"ultimate_beneficiary_name" => $req->ultimate_beneficiary_name,
		"relation_ultimate_beneficiary_with_investor" => $req->relation_ultimate_beneficiary_with_investor,
		"cnic_nicp_passport_no" => $req->cnic_nicp_passport_no,

	];
		$inserted = DB::table('investment_details')->insert($arr);
		return response()->json(200);
	}

	public function save_nominees(Request $req){
		
		$arr = [
		"customer_id" => $req->customer_id,
		"name" => $req->name,
		"relationship" => $req->relationship, 
		"share_percentage" => $req->share_percentage, 
		"cnic_nicop" => $req->cnic_nicop,
		"cnic_nicop_expiry" => $req->cnic_nicop_expiry,
		"created_at" => now(),
		"updated_at" => now(),
	];
		$inserted = DB::table('nominees')->insert($arr);
		return response()->json(200);
		
	}


	public function save_crs(Request $req){
		
		$arr = [
		"customer_id" => $req->customer_id,
		"crs_name_account_holder" => $req->crs_name_account_holder,
		"crs_family_name" => $req->crs_family_name, 
		"crs_given_name" => $req->crs_given_name, 
		"crs_middle_name" => $req->crs_middle_name,
		"crs_current_address" => $req->crs_current_address,
		"crs_country_id" => $req->crs_country_id,
		"crs_country_txt" => $req->crs_country_txt,	
		"crs_city_id" => $req->crs_city_id,
		"crs_city_txt" => $req->crs_city_txt,
		"crs_state" => $req->crs_state,
		"crs_zipcode" => $req->crs_zipcode,
		"crs_pobox" => $req->crs_pobox, 


		"mailing_address" => $req->mailing_address, 
		"mailing_city" => $req->mailing_city,
		"mailing_state" => $req->mailing_state,
		"mailing_country" => $req->mailing_country,
		"mailing_zipcode" => $req->mailing_zipcode,
		"mailing_pobox" => $req->mailing_pobox,
		"mailing_dob" => $req->mailing_dob,
		"mailing_pob" => $req->mailing_pob, 
		"mailing_tob" => $req->mailing_tob, 
		"mailing_cob" => $req->mailing_cob,
		"mailing_tax_country" => $req->mailing_tax_country,

		"isTaxPayer" => $req->isTaxPayer,
		"TaxPayerNumber" => $req->TaxPayerNumber,
		"reason" => $req->reason,
		"specify_second_reason" => $req->specify_second_reason,
		"created_at" => now(),
		"updated_at" => now(),
	];
		$inserted = DB::table('c_r_s')->insert($arr);
		return $inserted ? 1 : 0;
		return response()->json(200);
		
	}

		public function save_other_details(Request $req){
	
		$arr = [
		"asf" => $req->asf,
		"dpo" => $req->dpo,
		"type_of_units" => $req->type_of_units, 
		"customer_id" => $req->customer_id,
		"asf_id" => $req->asf_id,
		"created_at" => now(),
		"updated_at" => now(),
	];
		$inserted = DB::table('other_details')->insert($arr);
		return response()->json(200);
		
	}
	
	public function save_fatca_details(Request $req){

		$wf_name = 'no_image.png';
		if($req->hasFile('wform')){
			$wf_name = $req->wform->getClientOriginalName();
			$req->wform->move(public_path('uploads/wforms/'),$wf_name);
					
		}


		$arr = [
			"multiple_nat" => $req->multiple_nat,
			"nats" => $req->nats,
			"green_card" => $req->green_card, 
			"tax_resi" => $req->tax_resi, 
			"for_citi" => $req->for_citi,
			"co_ma" => $req->co_ma,
			"co_mp" => $req->co_mp,
			"attor" => $req->attor,
			"attor_addr" => $req->attor_addr,	  
			"trans_fund" => $req->trans_fund,
			"wf" => $req->wf,
			"wform" => $wf_name,
			"wform_options" =>  $req->wform_options,
			"customer_id" => $req->customer_id,
			"created_at" => now(),
			"updated_at" => now(),
	];

		$inserted = DB::table('fatca_details')->insert($arr);
		return response()->json(200);
	}

	public function generate_form(Request $req)
	{
	
	$arr = [
	"form_id" => $req->channel.substr(time(),6),
	"channel" => $req->channel,
	"status" => 0, 
	"customer_id" => $req->customer_id,
	"user_id" => $req->user_id,
	"assigned_to" => 0,
	"created_at" => now(),
	"updated_at" => now(),
	];	
	
	$inserted = DB::table('forms')->insert($arr);
	return $inserted ? 200 : 500 ;
			
			

	}
	public function send_mail(Request $req){
	
			$mail_data = [
			'customer_name' => $req->customer_name,
			'cnic' => $req->cnic,
			"qq" => $req->qq,
			"email" => $req->email
			];
			
			$send = '';
			
			$sales_email = \DB::table('users')->select('email')->where('id',$req->user_id)->first();
			
			//dd($sales_email);

	
			$recipients = [$sales_email,$req->email];
			foreach ($recipients as $recipient) {
			$send = Mail::to($recipient)->send(new Welcome($mail_data));
				if (empty($send)) {
					\DB::table('email_activities')->insert([
					'status' => 'success',
					'msg' => 'mail has been sent successfully',
					'action' => 'form creation',
					'created_at' => now()
					]);
	
				} else {			 		
	
					\DB::table('email_activities')->insert([
					'status' => 'fail',
					'msg' => 'mail not sent',
					'action' => 'form creation',
					'created_at' => now()
					]);	
				}
			}

			$recipients = \DB::table('users')->select('email')->where('role_id',3)->get();
			foreach ($recipients as $recipient) {
			$send = Mail::to($recipient)->send(new Welcome($mail_data));
				if (empty($send)) {
					\DB::table('email_activities')->insert([
					'status' => 'success',
					'msg' => 'mail has been sent successfully',
					'action' => 'form creation',
					'created_at' => now()
					]);	
				} else {			 		
	
					\DB::table('email_activities')->insert([
					'status' => 'fail',
					'msg' => 'mail not sent',
					'action' => 'form creation',
					'created_at' => now()
					]);
				}
			}

}
}
