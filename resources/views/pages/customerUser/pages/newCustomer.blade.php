@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Customer User</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="savecreateCustomerUser">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text" name="firstName" id="firstName"> 
							<span class="material-input"></span>
							<input type="hidden" name="role_id" value="4">
					   </div>
	                   </div>
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
							<label class="control-label">Family Name</label>
							<input class="form-control" type="text" name="familyName" id="familyName"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
						   <label class="control-label">Email</label>
						   <input class="form-control" type="email" name="email" id="email">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
						   <label class="control-label">Mobile No</label>
						   <input class="form-control" type="text" name="mobile" id="mobile" onKeyUp="numericFilter(this);">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
						   <label class="control-label">Password</label>
						   <input class="form-control" type="password" name="password" id="password">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6"> 
					    <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
						   <label class="control-label">Conform Password</label>
						   <input class="form-control" type="password" name="conform_password" id="conform_password">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	                
	                
	                	<button type="submit" class="btn btn-primary pull-right">Save<div class="ripple-container"></div>
					    </button>
					    
	        	
			</form>
	    </div>
	                        
	</div>
</div>
</div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
   function numericFilter(txb) {
   txb.value = txb.value.replace(/[^\0-9]/ig, "");
}
</script>
@endsection