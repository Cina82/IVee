@extends('layouts.back')
@section('css')
        
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Service Quotes Credit</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editQuotesCredit">
	        	{{csrf_field()}}
	            <div class="row">
	           
					<div class="col-md-12">
					<div class="col-md-6">
						<div class="form-group label-floating is-empty {{ $errors->has('service') ? ' has-error' : '' }}">
	                		 	<select name="service" id="service" class="selectpicker" required>
                                <option selected>Select service</option>
                                @foreach($ary as $rows)
                                @if($post->serviceId == $rows->id)
                                <option value ="{{$rows->id}}" selected>{{$rows->name}}</option>
                                @else
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endif
                                @endforeach
                                </select>
                        </div>
						</div>

					<div class="col-md-6">
	                   <div class="form-group">
							<label class="control-label">Credit</label>
							<input class="form-control" type="text" name="credit" id="credit" value="{{$post->credit}}" required> 
							<input type="hidden" name="id" value="{{$post->id}}">
							<span class="material-input"></span>
					   </div>
					   </div>
	                </div>
	           
	           		    <button type="submit" class="btn btn-primary pull-right">Edit<div class="ripple-container"></div>
					    </button>
					    <div class="clearfix"></div>
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