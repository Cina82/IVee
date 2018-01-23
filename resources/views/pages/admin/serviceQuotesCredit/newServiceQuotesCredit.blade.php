@extends('layouts.back')
@section('contents')
 <div class="content">
	<div class="col-md-12">
 	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Service Credit</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="saveServiceQuotesCredit">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="col-md-6">
	            		<div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="service" id="service" class="selectpicker" required>
                                <option selected>Select service</option>
                                @foreach($ary as $rows)
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endforeach
                                </select>
                              </div>
	            		</div>
	            		<div class="col-md-6">
	                   <div class="form-group label-floating is-empty {{ $errors->has('credit') ? ' has-error' : '' }}">
							<label class="control-label">Credit</label>
							<input class="form-control" type="text" name="credit" id="credit" required> 
							<span class="material-input"></span>
					  	</div>
					  	</div>
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