@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Admin</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editAdmin">
	        	{{csrf_field()}}
	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text" name="firstName" id="first_name" value="{{$post->first_name}}"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">Family Name</label>
							<input class="form-control" type="text" name="Familyname" id="last_name" value="{{$post->last_name}}"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Email</label>
						   <input class="form-control" type="text" name="email" id="email" value="{{$post->email}}">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Mobile No</label>
						   <input class="form-control" type="text" name="mobile" id="mobile" value="{{$post->mobile}}">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	           		    <button type="submit" class="btn btn-primary pull-right">Edit<div class="ripple-container"></div>
					    </button>
					    <div class="clearfix"></div>
	        	
			</form>
	    </div>
	                        
	</div>
</div>
</div>
</div>
@endsection

@section('javascript')
        
@endsection