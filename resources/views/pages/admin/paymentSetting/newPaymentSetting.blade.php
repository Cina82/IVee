@extends('layouts.back')
@section('css')
<style type="text/css">
 fieldset 
	{
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;       
		position: relative;
		border-radius:4px;
		background-color:#f5f5f5;
		padding-left:10px!important;
	}	
	legend
	{
			font-size:16px;
			margin-bottom: 0px; 
			width: relative; 
			border: 1px solid #ddd;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
			float: center;
	}
	.mybox{
	height: 100%;
	width: 100%;
	border: 1px solid #000;
	
}
</style>
@endsection
@section('contents')
 <div class="content">
	<div class="col-md-12">
 	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Payment Setting</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="{{URL::to('savePaymentSetting')}}">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
						<div class="radio">
	            				<label>Select Payment Type:</label>
								<label>
									<input type="radio" name="paymentType" value="sandbox" checked />
									SendBox
								</label>
								<label>
									<input type="radio" name="paymentType" value="live"/>
									production
								</label>
							</div>
	            		</div>
	            	<div class="col-md-12">
	            		<fieldset class="col-md-6">
	            		<legend>SendBox</legend>
	            		<div class="form-group label-floating is-empty {{ $errors->has('marchantName') ? ' has-error' : '' }}">
							<label class="control-label">Marchant Name</label>
							<input class="form-control" type="text" name="sdxmarchantName" id="marchantName"> 
							<span class="material-input"></span>
					  	</div>
	            		<div class="form-group label-floating is-empty {{ $errors->has('clientId') ? ' has-error' : '' }}">
							<label class="control-label">Client Id</label>
							<input class="form-control" type="text" name="sdxclientId" id="clientId"  
							<span class="material-input"></span>
					  	</div>
					  	<div class="form-group label-floating is-empty {{ $errors->has('secretKey') ? ' has-error' : '' }}">
							<label class="control-label">Secret Key</label>
							<input class="form-control" type="text" name="sdxsecretKey" id="secretKey"> 
							<span class="material-input"></span>
					  	</div>
					  	</fieldset>
					  	<fieldset class="col-md-6">
	            		<legend>Production</legend>
	            		<div class="form-group label-floating is-empty {{ $errors->has('marchantName') ? ' has-error' : '' }}">
							<label class="control-label">Marchant Name</label>
							<input class="form-control" type="text" name="marchantName" id="marchantName"> 
							<span class="material-input"></span>
					  	</div>
	            		<div class="form-group label-floating is-empty {{ $errors->has('clientId') ? ' has-error' : '' }}">
							<label class="control-label">Client Id</label>
							<input class="form-control" type="text" name="clientId" id="clientId"> 
							<span class="material-input"></span>
					  	</div>
					  	<div class="form-group label-floating is-empty {{ $errors->has('secretKey') ? ' has-error' : '' }}">
							<label class="control-label">Secret Key</label>
							<input class="form-control" type="text" name="secretKey" id="secretKey"> 
							<span class="material-input"></span>
					  	</div>
					  	</fieldset>
	                </div>
	                <button type="submit" class="btn btn-success pull-right">Save<div class="ripple-container"></div>
					</button>
					</div>
			</form>
	    </div>
	      </div>                  
	</div>
</div>
</div>
@endsection
@section('javascript')
<script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
@endsection