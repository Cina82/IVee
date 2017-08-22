	@extends('layouts.back')
@section('css')

@endsection
@section('contents')
 <div class="content">
	<div class="col-md-12">
 	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Service</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="saveService" enctype="multipart/form-data">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="form-group label-floating is-empty {{ $errors->has('Name') ? ' has-error' : '' }}">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" required> 
							<span class="material-input"></span>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
	                		 <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="category" id="category" class="selectpicker" onchange="subCategoryOption(this.value)" required>
                                <option selected>Select Category</option>
                                @foreach($ary as $rows)
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endforeach
                                </select>
                              </div>
	                	</div>
	                	<div class="col-md-6">
	                		 <div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="subCategory" id="subCategory" class="form-control" required>
                                <option selected>Select Sub Category</option>
                                </select>
                              </div>
	                	</div>
	                	
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
						   <div class="form-group label-floating is-empty {{ $errors->has('Priority') ? ' has-error' : '' }}" style="margin-top: 9px">
								<label class="control-label">Priority</label>
								<input class="form-control" type="text" name="priority" id="Priority" onkeydown='return ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required> 
								<span class="material-input"></span>
						   </div>
	                   </div>
	                	
						 <div class="col-md-6">
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1">
									Status
								</label>
							</div>
						</div>
					<div class="col-md-12">
						<div class="col-md-6">
	                		<label>Service Image</label>
	                		<input type="file" name="image" id="image" class="" onchange="readURL(this);">
	                		<div>&nbsp;</div>
	                		<img id="blah" src="#" alt="your image" height="50" width="50" style="width: 100px; height: 100px;" />
	                		
						</div>
					</div>
					</div>
	                <button type="submit" class="btn btn-success pull-right">Save<div class="ripple-container"></div>
					</button>
			</form>
	    </div>
	                        
	</div>
</div>
</div>
</div>
 	<script>
       function subCategoryOption(id)
        {
			$.ajax({
        		'url':'subCategoryOption'+id,
                'success':function(data){
                $("#subCategory").html(data);
               },
              });
        }
 	</script>
@endsection

@section('javascript')
    <script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection