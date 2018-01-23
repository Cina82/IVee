@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Page</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editPage">
	        	{{csrf_field()}}
	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="{{$post->name}}"> 
							<input type="hidden" name="id" value="{{$post->id}}">
							<span class="material-input"></span>
					   </div>
	                   </div>
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">Meta Title</label>
							<input class="form-control" type="text" name="metaTitle" id="metaTitle" value="{{$post->metaTitle}}"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Meta Description</label>
						   <input class="form-control" type="text" name="metaDescription" id="metaDescription" value="{{$post->metaDescription}}">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Meta Value</label>
						   <input class="form-control" type="text" name="metaValue" id="metaValue" value="{{$post->metaValue}}">
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