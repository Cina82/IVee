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
        	<form method="post" action="saveSubService" enctype="multipart/form-data">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="form-group label-floating is-empty {{ $errors->has('Name') ? ' has-error' : '' }}">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="Name" id="Name" required> 
							<span class="material-input"></span>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
	                		 <div class="form-group label-floating is-empty {{ $errors->has('subService') ? ' has-error' : '' }}">
	                		 	<select name="subService" id="subService" class="selectpicker" onchange="subCategoryOption(this.value)" required>
                                <option selected>Select Sub Service</option>
                                @foreach($ary as $rows)
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endforeach
                                </select>
                              </div>
	                	</div>
	                	<div class="col-md-6" style="padding-top: 40px !important ;">
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1">
									Status
								</label>
							</div>
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