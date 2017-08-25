@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Page</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="savePage">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty {{ $errors->has('Name') ? ' has-error' : '' }}">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" required="required"> 
							<span class="material-input"></span>
					  	</div>
	                  	</div>
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty {{ $errors->has('metaTitle') ? ' has-error' : '' }}">
							<label class="control-label">Meta Title</label>
							<input class="form-control" type="text" name="metaTitle" id="metaTitle" required="required"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty {{ $errors->has('metaDescription') ? ' has-error' : '' }}">
						   <label class="control-label">Meta Description</label>
						   <input class="form-control" type="text" name="metaDescription" id="metaDescription" required="required">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group label-floating is-empty {{ $errors->has('metaValue') ? ' has-error' : '' }}">
						   <label class="control-label">Meta Value</label>
						   <input class="form-control" type="text" name="metaValue" id="metaValue" required="required">
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
        
@endsection