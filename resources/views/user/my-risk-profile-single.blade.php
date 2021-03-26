<?php //die; dd($data->created_at);?>

@extends('layouts.admin-app')

@section('content')
<!-- main content start-->
<div id="page-wrapper">
<div class="main-page">

<br>
<br>

<div class="tables">
<div class="panel-body widget-shadow">
<h4>Risk Profiles</h4>
<table class="table">

<tbody>
<tr>
<th>Client ID</th>
<td>{{$data->id}}</td>
</tr>
<tr>
<th>Client Name</th>
<td>{{$data->client_name}}</td>
</tr>
<tr>
<th>Client Email</th>
<td>{{$data->client_email}}</td>
</tr>
<tr>
<th>Client Number</th>
<td>{{$data->client_number}}</td>
</tr>
<tr>
<th>Client CNIC</th>
<td>{{$data->client_cnic}}</td>
</tr>
<tr>
<th>Location</th>
<td>{{$data->location}}</td>
</tr>
<tr>
<th>Choosen Fund</th>
<td>{{$data->choosen_fund}}</td>
</tr>

<tr>
<th>Recommended Islamic Fund</th>
<td>{{$data->irf}}</td>
</tr>

<tr>
<th>Recommended Conventional Fund</th>
<td>{{$data->crf}}</td>
</tr>

<tr>
<th>Client Decision</th>
<td>{{$data->decision}}</td>
</tr>

<tr>
<th>Seller</th>
<td>{{$user->name}}</td>
</tr>

<tr>
    <th>Submitted At</th>
    <td> {{$data->created_at}}</td>
</tr>

</tbody>
</table>
</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

@endsection