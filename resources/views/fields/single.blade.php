<?php 
// dd($crs_details);
?>

@extends('layouts.admin-app')

@section('content')
<!-- main content start-->
<style type="text/css">
input[type='checkbox'] {
-webkit-appearance:none;
width:30px;
height:30px;
background:white;
border-radius:5px;
border:2px solid #555;
}
input[type='checkbox']:checked {
background: #abd;
}

@media print
{
input[type='checkbox']{display: none;}

.dropdown-toggle {display:none!important;}

button.printbtn{display: none!important;}

.btnsiscussion{display: none!important;}

.form-title
{
/*display: none!important;*/
margin-top: -200px;
border: none!important;
}

.form-title h4
{
font-weight: 700;
font-size: 24px!important;
margin-left: -12px!important;
}

.addspecial{display: none!important;}

.to_cbc{display: none!important;}

.bckchanges{display: none!important;}

.textblock{display: none!important;}

.header-section{display:none!important;}

.c_details
{
  margin-top: -80px!important; 
  background-color:#9c9e9b!important;
}

.bank_detail{margin-top: -30px!important;}

.fatca_detail{margin-top:-30px!important;}

.action{margin-top:-30px!important;}

.tables {margin-top:20px!important;}

.tables h4
{
color: #000000!important;
font-weight:600!important;
border: solid #000!important;
}

.alert{padding: 5px!important;}

img{width: 75px!important; height: 75px!important;}

.footer
{margin-top:40px!important;
display:none!important;
}

.tables .table > thead > tr > th, .tables .table > tbody > tr > th, .tables .table > tfoot > tr > th, .tables .table > thead > tr > td, .tables .table > tbody > tr > td, .tables .table > tfoot > tr > td 
{
    border-top: 1px solid #150000!important;
    line-height: 01;
}

.inv_details{margin-top:-30px!important;}

table.table tr td:nth-child(1) {
    display: none;
}

td.td_print{padding-left: 145px!important;}

td.td_print_fatca{padding-right: 200px!important;}

td.td_print_action{padding-left: 130px!important;}

}

</style>
<div id="page-wrapper">
<br>
<button type="submit" class="btn btn-info printbtn" onclick="window.print()" style="float: right; margin-top: -35px;">Print</button>

<div class="main-page">

  @if (session()->has('msg'))
  <br>
<div class="alert alert-success" role="alert">
<strong></strong> {{session('msg')}}
</div>
@endif

@if (session()->has('err'))
<br>
<div class="alert alert-danger" role="alert">
{{session('err')}}
</div>
@endif

<br>



<div class="form-title">

<h4 style="color:white;">Form Id # {{$form_id}}</h4>


</div>
<div class="tables">
<div class="panel-body widget-shadow">
<br><br>
<table class="table">
<tbody>
<h4 class="alert alert-success c_details">Customer Details</h4>
<tr>
<th>Name</th>
<td>{{$customer_details->name}}</td>
</tr>

<tr>
<th>Father Name</th>
<td>{{$customer_details->father_name}}</td>
</tr>

<tr>
<th>Mother Name</th>
<td>{{$customer_details->mother_name}}</td>
</tr>

<tr>
<th>Date Of Birth</th>
<td>{{$customer_details->dob}}</td>
</tr>

<tr>
<th>CNIC</th>
<td>{{$customer_details->cnic}}</td>
</tr>

<tr>
<th>CNIC Attachment</th>
<td>
<button id="cnic_attachment" type="button" style="background: none; border:none;" value="{{$customer_details->cnic_attachment}}" class="pop">
<img width="150px" height="150px" src="{{url('uploads/cnic_attachment')}}/{{$customer_details->cnic_attachment}}">
</button>
</td>
</tr>


<tr>
<th>CNIC Issue Date</th>
<td>{{$customer_details->cnic_issue_date}}</td>
</tr>

<tr>
<th>Place Of Birth (Country)</th>
<td>{{$customer_details->pob_country}}</td>
</tr>

<tr>
<th>Place Of Birth (City)</th>
<td>{{$customer_details->pob_city}}</td>
</tr>

<tr>
<th>Email</th>
<td>{{$customer_details->email}}</td>
</tr>


<tr>
<th>Cell</th>
<td>{{$customer_details->cell}}</td>
</tr>

<tr>
<th>Occupation</th>
<td>{{$customer_details->occupation}}</td>
</tr>

<tr>
<th>Occupation name</th>
<td>{{$customer_details->occ_name}}</td>
</tr>

<tr>
<th>Designatioin</th>
<td>{{$customer_details->designation}}</td>
</tr>

<tr>
<th>Department</th>
<td>{{$customer_details->department}}</td>
</tr>

<tr>
<th>Working Experience</th>
<td>{{$customer_details->working_experience}}</td>
</tr>

<tr>
<th>Organization/Employer/Business Name</th>
<td>{{$customer_details->org_emp_bes_name}}</td>
</tr>

<tr>
<th>Age of Business</th>
<td>{{$customer_details->age_of_business}}</td>
</tr>

<tr>
<th>Education</th>
<td>{{$customer_details->education}}</td>
</tr>

<tr>
<th>Marital Status</th>
<td>{{$customer_details->marital_status}}</td>
</tr>

<tr>
<th>No. of Dependants</th>
<td>{{$customer_details->no_of_dependants}}</td>
</tr>

<tr>
<th>Public Figure</th>
<td>{{$customer_details->public_figure}}</td>
</tr>

<tr>
<th>Average Annual Income</th>
<td>{{$customer_details->average_annual_income}}</td>
</tr>

<tr>
<th>Has any Financial Institution ever refused to open your account?</th>
<td>{{$customer_details->refused_account_by_institute}}</td>
</tr>

<tr>
<th>Do you deal high value items such as precious metal and real estate?</th>
<td>{{$customer_details->high_value_item}}</td>
</tr>

<tr>
<th>Source Of Income</th>
<td>{{$customer_details->soi}}</td>
</tr>

<tr>
<th>Source Of Income Attachment</th>
<td>
<button id="soi_attachment" type="button" style="background: none; border:none;" value="{{$customer_details->soi_attachment}}" class="pop">
<img width="150px" height="150px" src="{{url('uploads/soi_attachment')}}/{{$customer_details->soi_attachment}}">
</button>
</td>
</tr>

<tr>
<th>Address</th>
<td>{{$customer_details->address}}</td>
</tr>

<tr>
<th>Mailing Country</th>
<td>{{$customer_details->country1}}</td>
</tr>

<tr>
<th>Mailing City</th>
<td>{{$customer_details->city1}}</td>
</tr>

<tr>
<th>Zakat</th>
<td>{{$customer_details->zakat}}</td>
</tr>

<tr>
<th>Zakat Option</th>
<td>{{$customer_details->zakat_options}}</td>
</tr>

@if($customer_details->zakat == 'no')
<tr>
<th>Zakat Certificate</th>
<td>
<button id="zc" type="button" style="background: none; border:none;" value="{{$customer_details->zakat_certificate}}" class="pop">
<img width="150px" height="150px" src="{{url('uploads/zakat_certificates')}}/{{$customer_details->zakat_certificate}}">
</button>
</td>
</tr> 
@endif
</tbody>
</table>


<table class="table">
<tbody>

<br>
<h4 class="alert alert-success bank_detail">Common Reporting Standard (CRS) Details</h4>

<tr>
<th>Name of Account Holder </th>
<td class="td_print">{{$crs_details->crs_name_account_holder}}</td>
</tr>

<tr>
<th>Family Name of Surname(s) Title </th>
<td class="td_print">{{$crs_details->crs_family_name}}</td>
</tr>


<tr>
<th>First or Given Name (Text Box) </th>
<td class="td_print">{{$crs_details->crs_given_name}}</td>
</tr>

<tr>
<th>Middle Name(s) (Text Box) </th>
<td class="td_print">{{$crs_details->crs_middle_name}}</td>
</tr>

<tr>
<th>Current Residential Address </th>
<td class="td_print">{{$crs_details->crs_current_address}}</td>
</tr>

<tr>
<th>Country </th>
<td class="td_print">{{$crs_details->crs_country_txt}}</td>
</tr>

<tr>
<th>Town/City/Province </th>
<td class="td_print">{{$crs_details->crs_city_txt}}</td>
</tr>

<tr>
<th>County/State </th>
<td class="td_print">{{$crs_details->crs_state}}</td>
</tr>


<tr>
<th>Postal Code / Zip Code </th>
<td class="td_print">{{$crs_details->crs_zipcode}}</td>
</tr>

<tr>
<th>PO Box </th>
<td class="td_print">{{$crs_details->crs_pobox}}</td>
</tr>

<tr>
<th colspan="2"> <h4 style="margin-top: 15px;">Mailing Address Details</h4> </th>
</tr>

<tr>
  <th>Mailing Address </th>
  <td class="td_print">{{$crs_details->mailing_address}}</td>
  </tr>
  
  
  <tr>
  <th>Town/City/Province </th>
  <td class="td_print">{{$crs_details->mailing_city}}</td>
  </tr>
    
    <tr>
    <th>County/State </th>
    <td class="td_print">{{$crs_details->mailing_state}}</td>
    </tr>

    <tr>
    <th>Country </th>
    <td class="td_print">{{$crs_details->mailing_country}}</td>
    </tr>

    <tr>
    <th>Postal Code / Zip Code </th>
    <td class="td_print">{{$crs_details->mailing_zipcode}}</td>
    </tr>

    <tr>
    <th>PO Box </th>
    <td class="td_print">{{$crs_details->mailing_pobox}}</td>
    </tr>

    <tr>
    <th>Date of Birth </th>
    <td class="td_print">{{$crs_details->mailing_dob}}</td>
    </tr>

    <tr>
    <th>Place of Birth </th>
    <td class="td_print">{{$crs_details->mailing_pob}}</td>
    </tr>
   
    <tr>
    <th>Town or City of Birth </th>
    <td class="td_print">{{$crs_details->mailing_tob}}</td>
    </tr>
    <tr>
    <th>Country of Birth </th>
    <td class="td_print">{{$crs_details->mailing_cob}}</td>
    </tr>


    <tr>
      <th colspan="2"> <h4 style="margin-top: 15px;">Country of tax Residence & Taxpayer Identification Number (TIN) Details</h4> </th>
      </tr>

    <tr>
    <th>Name of Country Residence</th>
    <td class="td_print">{{$crs_details->mailing_tax_country}}</td>
    </tr>
            

    <tr>
    <th>Taxpayer Identification (TIN)</th>
    <td class="td_print">{{$crs_details->isTaxPayer}}</td>
    </tr>

    <tr>
    <th>Taxpayer Number</th>
    <td class="td_print">{{$crs_details->TaxPayerNumber}}</td>
    </tr>

    <tr>
    <th>Reason</th>
    <td class="td_print">{{$crs_details->reason}}</td>
    </tr>

    <tr>
    <th>Specific Reason</th>
    <td class="td_print">{{$crs_details->specify_second_reason}}</td>
    </tr>

</tbody>
</table>


<table class="table">
  <tbody>
  
  <br>
  <h4 class="alert alert-success bank_detail">Bank Details</h4>
  
  <tr>
  <th>Bank Name</th>
  <td class="td_print">{{$bank_details->bank_name}}</td>
  </tr>
  
  <tr>
  <th>Branch Name</th>
  <td class="td_print">{{$bank_details->branch_name}}</td>
  </tr>
  
  <tr>
  <th>Account Title</th>
  <td class="td_print">{{$bank_details->account_title}}</td>
  </tr>
  
  <tr>
  <th>IBAN</th>
  <td class="td_print">{{$bank_details->iban_number}}</td>
  </tr>
  
  
  </tbody>
  </table>

<table class="table">
<tbody>

<br>
<h4 class="alert alert-success inv_details">Investment Details</h4>   

<tr>
<th>Fund Name</th>
<td>{{$investment_details->fund_name}}</td>
</tr>

<tr>
<th>Amount</th>
<td>{{$investment_details->amount}} ({{$investment_details->amount_in_words}})</td>
</tr>

<tr>
<th>Payment Mode</th>
<td>{{$investment_details->payment_mode}}</td>
</tr>

<tr>
<th>Attachment</th>
<td>
<button id="id" type="button" style="background: none; border:none;" value="{{$investment_details->attachment}}" class="pop">
<img width="150px" height="150px" src="{{url('uploads/investment_detail_attachments')}}/{{$investment_details->attachment}}">
</button>
</td>
</tr>

<tr>
<th>Bank Name</th>
<td>{{$investment_details->bank_name}}</td>
</tr>


<tr>
<th>Instrument Number</th>
<td>{{$investment_details->instrument_number}}</td>
</tr>


</tbody>
</table>


<table class="table">
<tbody>

<br>
<h4 class="alert alert-success bank_detail">Other Instructions/Information
</h4>

<tr>
<th>Frequency of Account Statement</th>
<td class="td_print">{{$other_details->asf}}</td>
</tr>

<tr>
<th>Dividend pay-out</th>
<td class="td_print">{{$other_details->dpo}}</td>
</tr>


<tr>
<th>Type of Units</th>
<td class="td_print">{{$other_details->type_of_units}}</td>
</tr>



</tbody>
</table>

<table class="table">
<tbody>

<br>
<h4 class="alert alert-success fatca_detail">Fatca Details</h4>

<tr>
<th>Multiple Nationalities</th>
<td class="td_print_fatca">{{$fatca_details->multiple_nat}}</td>
</tr>

@if($fatca_details->multiple_nat == 'yes')
<tr>
<th>Nationilty </th>
<td class="td_print_fatca">{{$fatca_details->nats}}</td>
</tr>
@endif

<tr>
<th>Green Card</th>
<td class="td_print_fatca">{{$fatca_details->green_card}}</td>
</tr>

<tr>
<th>Foriegn Citizenship</th>
<td class="td_print_fatca">{{$fatca_details->for_citi}}</td>
</tr>

<tr>
<th>Care Of Mailing Address</th>
<td class="td_print_fatca">{{$fatca_details->co_ma}}</td>
</tr>


<tr>
<th>Care Of Mailing Phone Number</th>
<td class="td_print_fatca">{{$fatca_details->co_mp}}</td>
</tr>

<tr>
<th>Power of Attorney</th>
<td class="td_print_fatca">{{$fatca_details->attor}}</td>
</tr>


@if($fatca_details == 'yes')
<tr>
<th>Power of Attorney</th>
<td class="td_print_fatca">{{$fatca_details->attor_addr}}</td>
</tr>
@endif


<tr>
<th>Transfer Funds </th>
<td>{{$fatca_details->trans_fund}}</td>
</tr>


<tr>
<th>w8/w9 form</th>
<td>{{$fatca_details->wf}}</td>
</tr>

@if($fatca_details->wf == 'yes')
<tr>
<th>form</th>
<td>{{$fatca_details->wform}}</td>
</tr>
@endif

</tbody>
</table>

<br>
<table class="table">
<h4 class="alert alert-success action">Action</h4>
<tbody>
<tr>  
<th>Sales Agent</th>
<td class="td_print_action"><strong>{{$user_name}}</strong></td>
</tr>

<tr>  
<th>Channel</th>
<td class="td_print_action">{{$form_data->channel}}</td>
</tr>

<tr>  
<th>Submitted At</th>
<td class="td_print_action">{{$form_data->created_at}}</td>
</tr>


</tbody>
</table>

<!-- Modal -->




</div>

</div>

<div class="clearfix"> </div>


</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">



<div class="container">
<div class="row">
<div class="col-md-5">
<div class="panel">
<div class="panel-heading">
<span class="glyphicon glyphicon-comment"></span> Chat
<button type="button" class="close" data-dismiss="modal">&times;</button>
<hr>

</div>
<div class="panel-body">
<ul class="chat">

@foreach($msgs as $msg)
@php 
$role = \DB::table('users')->where('id',$msg->sender_id)->pluck('role_id')[0]; 
$string = ($role == 5) ? 'CBC' : 'S';
@endphp
@if($role == 1 || $role == 5)

<li class="left clearfix" style="list-style-type: none;"><span class="chat-img pull-left">
<img src="http://placehold.it/50/55C1E7/fff&text={{$string}}" alt="User Avatar" class="img-circle" />
</span>
<div class="chat-body clearfix">
<div class="header">
<strong style="margin-left:7px;">{{DB::table('users')->where('id',$msg->sender_id)->first()->name}}</strong>
</div>
<p style="padding-left: 14%;     margin-bottom: 10%;">
{{$msg->msg}}
<br>
@php $d = new DateTime($msg->created_at);
$dates = $d->format('M d, h:i:sa');
@endphp
{{$dates}}
</p>
</div>
</li>
@else
@php
$role = \DB::table('users')->where('id',$msg->sender_id)->pluck('role_id')[0];
$string = ($role == 3) ? 'RA' : 'R';
@endphp
@if($role != 5)

<li class="right clearfix" style="list-style-type: none;"><span class="chat-img pull-right">
<img src="http://placehold.it/50/FA6F57/fff&text={{$string}}" alt="User Avatar" class="img-circle" />
</span>
<div class="chat-body clearfix">
<div class="header text-right">
<strong style="margin-left:7px;">{{DB::table('users')->where('id',$msg->sender_id)->first()->name}}</strong>
</div>
<p style="padding-right: 2%; float:right;    margin-bottom: 10%;">
{{$msg->msg}}
<br>
@php $d = new DateTime($msg->created_at);
$dates = $d->format('M d, h:i:sa');
@endphp
{{$dates}}
</p>
</div>
</li>
@endif
@endif
@endforeach


</ul>
</div>

</div>
</div>
</div>
</div>


</div>
</div>

<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel">Image preview</h4>
</div>
<div class="modal-body">
<img src="" id="imagepreview" style="width: 100%; height: auto;" >
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<script type="text/javascript">

$("#zc").on("click", function() {
  
var url = '<?php echo url('uploads/zakat_certificates/');?>';
$('#imagepreview').attr('src',url+'/'+ this.value);
$('#imagemodal').modal('show');
});

$("#id").on("click", function() {
  
  var url = '<?php echo url('uploads/investment_detail_attachments/');?>';
  $('#imagepreview').attr('src',url+'/'+ this.value);
  $('#imagemodal').modal('show');
  });


$("#cnic_attachment").on("click", function() {
  
  var url = '<?php echo url('uploads/cnic_attachment/');?>';
  $('#imagepreview').attr('src',url+'/'+ this.value);
  $('#imagemodal').modal('show');
  });


$("#soi_attachment").on("click", function() {
  
  var url = '<?php echo url('uploads/soi_attachment/');?>';
  $('#imagepreview').attr('src',url+'/'+ this.value);
  $('#imagemodal').modal('show');
  });


</script>
@endsection
