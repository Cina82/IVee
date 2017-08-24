@extends('layouts.back')
@section('css')
        

@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Service</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editSubService" enctype="multipart/form-data">
	        	{{csrf_field()}}
	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="form-group {{ $errors->has('Name') ? ' has-error' : '' }}">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="{{$post->name}}" required>
							<input type="hidden" name="id" value="{{$post->id}}"> 
							<span class="material-input"></span>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
	                		 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="subService" id="subService" class="selectpicker" onchange="subCategoryOption(this.value)" required>
                                <option selected >Select Sub Service</option>
                                @foreach($ary as $rows)
                                @if($rows->id == $post->serviceId)
                                <option value ="{{$rows->id}}" selected>{{$rows->name}}</option>
                                @else
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endif
                                @endforeach
                                </select>
                              </div>
	                	</div>
	                	<div class="col-md-6" style="padding-top: 40px !important;">
						 	@if($post->status == 1)
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1" checked>
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