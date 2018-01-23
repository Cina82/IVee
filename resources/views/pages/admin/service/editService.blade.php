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
	        <form method="post" action="editService" enctype="multipart/form-data">
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
	                		 	<select name="category" id="category" class="selectpicker" onchange="subCategoryOption(this.value)" required>
                                <option selected >Select Category</option>
                                @foreach($ary as $rows)
                                @if($rows->id == $post->categoryId)
                                <option value ="{{$rows->id}}" selected>{{$rows->name}}</option>
                                @else
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endif
                                @endforeach
                                </select>
                              </div>
	                	</div>
	                	<div class="col-md-6">
	                		 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="subCategory" id="subCategory" class="form-control" required>
                                <option selected >Select Category</option>
                                @foreach($subCategory as $sub)
                                @if($sub->id == $post->subCategoryId)
                                <option value ="{{$sub->id}}" selected>{{$sub->name}}</option>
                                @else
                                <option value ="{{$sub->id}}">{{$sub->name}}</option>
                                @endif
                                @endforeach
                                </select>
                              </div>
	                	</div>
	                </div>
	                <div class="col-md-12">
	                <div class="col-md-6">
						   <div class="form-group{{ $errors->has('Priority') ? ' has-error' : '' }}">
								<label class="control-label">Priority</label>
								<input class="form-control" type="text" name="priority" id="Priority" value="{{$post->priority}}" onkeydown='return ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required> 
								<span class="material-input"></span>
						   </div>
	                   </div>
	                	<div class="col-md-6">
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
						<div class="col-md-12">
							<div class="col-md-3">
	                		<label>Service Image</label>
	                		<input type="file" name="image" id="image" class="" onchange="readURL(this);" value="">
	                		</div>
	                		<div class="col-md-3">
	                		<img id="blah" src="{{URL::to('public/thumbtack_image')}}/{{$post->image}}" alt="your image" style="width: 100px; height: 100px;"  />
						</div>
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