@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Category</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editCategory">
	        	{{csrf_field()}}
	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="form-group">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="{{$post->name}}" required> 
							<input type="hidden" name="id" value="{{$post->id}}">
							<span class="material-input"></span>
					   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Priority</label>
						   <input class="form-control" type="text" name="priority" id="priority" value="{{$post->priority}}" onkeydown='return ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required>
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6" style="margin-top: 58px">
	                   		@if($post->status == 1)
	                   		<div class="checkbox">
	                   		<label>
							<input type="checkbox" name="status" id="status" value="1" checked >
									Status
							</label>
							</div>
							@else
							<div class="checkbox">
							<label>
							<input type="checkbox" name="status" id="status" value="1">
									Status
							</label>
							</div>
							@endif
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