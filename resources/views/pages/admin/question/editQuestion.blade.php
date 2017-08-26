@extends('layouts.back')
@section('css')
        <style type="text/css">
 fieldset 
	{
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;       
		position: relative;
		border-radius:4px;
		background-color:#f5f5f5;
		padding-left:10px!important;
	}	
	legend
	{
			font-size:16px;
			margin-bottom: 0px; 
			width: relative; 
			border: 1px solid #ddd;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
			float: center;
	}
	.mybox{
	height: 100%;
	width: 100%;
	border: 1px solid #000;
</style>
@endsection
@section('contents')
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Question</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editQuestion" enctype="multipart/form-data">
	        	{{csrf_field()}}
	            <div class="row">
	            <input type="hidden" name="questionId" value="{{$mainData->id}}">
	            @php
	            $id = $mainData->id;
	            $question = json_decode($mainData->question);
	            $categoryService = $mainData->categoryServiceId;

	            $questionArray[] = $question[0]->question;
	            $questionType = $questionArray['0']['0']->questionType;

	             
	            @endphp
	            	@php $count = 1; @endphp
	            	
	           		<div class="col-md-12">
	            	<div class="col-md-6">
	                		<div class="form-group label-floating is-empty {{ $errors->has('CategoryService') ? ' has-error' : '' }}">
	                		<select name="CategoryService" id="CategoryService" class="selectpicker" required>
                            <option selected>Select Service</option>
                            @foreach($ary as $rows)
                            @if($rows->id == $categoryService) 
                            <option value ="{{$rows->id}}" selected>{{$rows->name}}</option>
                            @else
                            <option value ="{{$rows->id}}">{{$rows->name}}</option>
                            @endif
                            @endforeach
                            </select>
                            </div>
	                </div>
	                <div class="col-md-6">
	                </div>   
	                </div>
	                
	                @foreach($questionArray as $questionAry)
	                @foreach($questionAry as $dd)

	                <!-- radio -->
	              	@if($dd->questionType == '1')
	              	<div class="col-md-12">&nbsp;</div>
	              	<div class="col-md-12 mybox" id="Question{{$count}}">
	               	<div class="col-md-12">
	               	<div class="col-md-6">
	                <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" value="{{$dd->question}}"> 
							<span class="material-input"></span>
					  	</div>
					</div>
					<div class="col-md-6">
	               	    <div class="form-group  {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" value="{{$dd->questionHint}}"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-4"><label style="padding-top: 50px !important;">Select Answer Type</label></div>
	                <div class="col-md-6">
	                   		<div class="form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}">
	                		<select name="QuestionType[]" id="QuestionType{{$count}}" class="selectpicker" onchange="RadioChange({{$count}})" required>
                            <option >Question Type</option>
                        	<option value ="1" @if($dd->questionType == 1)selected @endif>Radio</option>
                        	<option value ="2" @if($dd->questionType == 2)selected @endif>Radio With Image Single</option>
                        	<option value ="3" @if($dd->questionType == 3)selected @endif>Radio With TextBox Single</option>
                        	<option value ="4" @if($dd->questionType == 4)selected @endif>checkBox</option>
                        	<option value ="5" @if($dd->questionType == 5)selected @endif>checkBox With Image</option>
                        	<option value ="6" @if($dd->questionType == 6)selected @endif>checkBox With Image Multiple</option>
                        	<option value ="7" @if($dd->questionType == 7)selected @endif>checkBox With TextBox Multiple</option>
                        	<option value ="8" @if($dd->questionType == 8)selected @endif>checkBox With Dropdown Multiple</option>
                        	<option value ="9" @if($dd->questionType == 9)selected @endif>Textbox</option>
                        	<option value ="10" @if($dd->questionType == 10)selected @endif>TextArea</option>
                        	<option value ="11" @if($dd->questionType == 11)selected @endif>DatePicker</option>
                        	</select>
                            </div>
	                </div>
	                </div>
	                <fieldset id="Radio{{$count}}">
	                <legend>Radio Answer Options
					<a name="optionbtn" id="optionbtn{{$count}}" class="btn btn-success pull-right btn-xs" onclick="addRadio({{$count}})"><i class='material-icons'>add_box</i></a>
	               	
	                </legend>
					<div class="col-md-12" id="main-menu1">
							@foreach($dd->options as $option)
							<div class="col-md-3 RadioText{{$count}}">
		                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText" value="{{$option}}">
		                	<a class="btn btn-danger btn-xs pull-right" onclick="removeOption({{$count}})" id="removeOption"><i class="material-icons">delete</i></a>
		                	</div>
							@endforeach
	               </fieldset>
	              	<fieldset id="RadioWithImageSingle{{$count}}" style="display: none;">
	                <legend>Radio With Image Answer Options
	                	<a class="btn btn-success btn-xs pull-right" onclick="addRadioWithImageSingle({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
	                <div class="col-md-12" id="main-menu2" >
	                	<div class="col-md-6">
	                	<input type="text" name="radioWithImageSingleText1[]" class="form-control" placeholder="Image Text">
	                	<input type="file" name="radioWithImageSingleImg1[]" id="radioWithImageSingleImg" class="" onchange="readURL(this);">
	                	<img id="blah" src="#" alt="your image" height="50" width="50" style="width: 100px; height: 100px;" />
	                	</div>
	                	
	                </div>
	                </fieldset>

	               	<fieldset id="CheckBox{{$count}}" style="display: none;">
	               	<legend>Checkbox Answer Options
	               			<a class="btn btn-success pull-right btn-xs" onclick="addCheckbox({{$count}})"><i class='material-icons'>add_box</i></a>
	               	</legend>
	                <div class="col-md-12" id="main-menu4" >
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                </div>
	                </fieldset>
	                <a name="removeQuestionBtn" id="removeQuestionBtn" class="btn btn-danger pull-right btn-xs" onclick="removeQuestion({{$count}})">Remove Question</a>
	                </div>

	               	@php $count = $count + 1; @endphp
	               	@endif
	               	<!-- radio with image single -->
	               	@if($dd->questionType == '2')
	               	<div class="col-md-12">&nbsp;</div>
	              	<div class="col-md-12 mybox" id="Question{{$count}}">
	               	<div class="col-md-12">
	               	<div class="col-md-6">
	                <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">

							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" value="{{$dd->question}}"> 
							<span class="material-input"></span>
					  	</div>
					</div>
					<div class="col-md-6">
	               	    <div class="form-group  {{ $errors->has('questionHint') ? ' has-error' : '' }}">

							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" value="{{$dd->questionHint}}"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-4"><label style="padding-top: 50px !important;">Select Answer Type</label></div>
	                <div class="col-md-6">
	                   		<div class="form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}">
	                		<select name="QuestionType[]" id="QuestionType{{$count}}" class="selectpicker" onchange="RadioChange({{$count}})" required>
                            <option >Question Type</option>
                        	<option value ="1" @if($dd->questionType == 1)selected @endif>Radio</option>
                        	<option value ="2" @if($dd->questionType == 2)selected @endif>Radio With Image Single</option>
                        	<option value ="3" @if($dd->questionType == 3)selected @endif>Radio With TextBox Single</option>
                        	<option value ="4" @if($dd->questionType == 4)selected @endif>checkBox</option>
                        	<option value ="5" @if($dd->questionType == 5)selected @endif>checkBox With Image</option>
                        	<option value ="6" @if($dd->questionType == 6)selected @endif>checkBox With Image Multiple</option>
                        	<option value ="7" @if($dd->questionType == 7)selected @endif>checkBox With TextBox Multiple</option>
                        	<option value ="8" @if($dd->questionType == 8)selected @endif>checkBox With Dropdown Multiple</option>
                        	<option value ="9" @if($dd->questionType == 9)selected @endif>Textbox</option>
                        	<option value ="10" @if($dd->questionType == 10)selected @endif>TextArea</option>
                        	<option value ="11" @if($dd->questionType == 11)selected @endif>DatePicker</option>
                        	</select>
                            </div>
	                </div>
	                </div>
	               <fieldset id="Radio{{$count}}" style="display: none;">
	               <legend>Radio Answer Options
	               		<a name="optionbtn" id="optionbtn" class="btn btn-success pull-right btn-xs" onclick="addRadio({{$count}})"><i class='material-icons'>add_box</i></a>
	               </legend>
	                <div class="col-md-12" id="main-menu1">
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText" placeholder="Radio Option">
	                	</div>
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText1" placeholder="Radio Option">
	                	</div>
	                </div>
	                </fieldset>

	                <fieldset id="RadioWithImageSingle{{$count}}">
	                <legend>Radio With Image Answer Options
	                <a name="optionbtn" id="optionbtn{{$count}}" class="btn btn-success pull-right btn-xs" onclick="addRadioWithImageSingle({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
					<div class="col-md-12" id="main-menu2">
	                		@for($i=0;$i<count($dd->options->imageText);$i++)
							<div class="col-md-6 radioWithImageSingle{{$count}}">
	                		<input type="text" name="radioWithImageSingleText{{$count}}[]" class="form-control" value="{{$dd->options->imageText[$i]}}">

	                		<input type="file" name="radioWithImageSingleImg{{$count}}[]" id="radioWithImageSingleImg" class="" onchange="imagePreview(this,{{$i}},{{$count}});">
	                		<input type="hidden" name="radioWithImageSingleImg{{$count}}[]" value="{{$dd->options->image[$i]}}">

							<img id="blah{{$i}}{{$count}}" src="{{URL::to('public/uploads/optionImage')}}/{{$dd->options->image[$i]}}" alt="your image" height="50" width="50" style="width: 100px; height: 100px;" />
	                		<a class="btn btn-danger btn-xs" onclick="removeRadioWithImageSingleOption({{$count}})" id="removeOption"><i class="material-icons">delete</i></a>
	                		</div>
	                		@endfor
	                </div>
	                </fieldset>


	                <fieldset id="CheckBox{{$count}}" style="display: none;">
	                <legend>Checkbox Answer Options
	                <a class="btn btn-success pull-right btn-xs" onclick="addCheckbox({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
	                <div class="col-md-12" id="main-menu4" >
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                </div>
	                </fieldset>
	               <a name="removeQuestionBtn" id="removeQuestionBtn" class="btn btn-danger pull-right btn-xs" onclick="removeQuestion({{$count}})">Remove Question</a>
	               </div>

	               	@php $count = $count + 1; @endphp
	               	@endif
	               	<!-- checkbox -->
	               	@if($dd->questionType == '4')
	               	<div class="col-md-12">&nbsp;</div>
	              	<div class="col-md-12 mybox" id="Question{{$count}}">
	               	<div class="col-md-12">
	               	<div class="col-md-6">
	                <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" value="{{$dd->question}}"> 
							<span class="material-input"></span>
					  	</div>
					</div>
					<div class="col-md-6">
	               	    <div class="form-group  {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" value="{{$dd->questionHint}}"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-4"><label style="padding-top: 50px !important;">Select Answer Type</label></div>
	                <div class="col-md-6">
	                   		<div class="form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}">
	                		<select name="QuestionType[]" id="QuestionType{{$count}}" class="selectpicker" onchange="RadioChange({{$count}})" required>
                            <option >Question Type</option>
                        	<option value ="1" @if($dd->questionType == 1)selected @endif>Radio</option>
                        	<option value ="2" @if($dd->questionType == 2)selected @endif>Radio With Image Single</option>
                        	<option value ="3" @if($dd->questionType == 3)selected @endif>Radio With TextBox Single</option>
                        	<option value ="4" @if($dd->questionType == 4)selected @endif>checkBox</option>
                        	<option value ="5" @if($dd->questionType == 5)selected @endif>checkBox With Image</option>
                        	<option value ="6" @if($dd->questionType == 6)selected @endif>checkBox With Image Multiple</option>
                        	<option value ="7" @if($dd->questionType == 7)selected @endif>checkBox With TextBox Multiple</option>
                        	<option value ="8" @if($dd->questionType == 8)selected @endif>checkBox With Dropdown Multiple</option>
                        	<option value ="9" @if($dd->questionType == 9)selected @endif>Textbox</option>
                        	<option value ="10" @if($dd->questionType == 10)selected @endif>TextArea</option>
                        	<option value ="11" @if($dd->questionType == 11)selected @endif>DatePicker</option>
                        	</select>
                            </div>
	                </div>
	                </div>
	                <fieldset id="Radio{{$count}}" style="display: none;">
	                <legend>Checkbox Answer Options
	                	<a name="optionbtn" id="optionbtn" class="btn btn-success pull-right btn-xs" onclick="addRadio({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
	                <div class="col-md-12" id="main-menu1">
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText" placeholder="Radio Option">
	                	</div>
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText1" placeholder="Radio Option">
	                	</div>
	                </div>
	                </fieldset>
	                <fieldset id="RadioWithImageSingle{{$count}}" style="display: none;">
	                <legend>Radio With Image Answer Options
	               	<a class="btn btn-success pull-right btn-xs" onclick="addRadioWithImageSingle({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
	                <div class="col-md-12" id="main-menu2" >
	                	<div class="col-md-6">
	                	<input type="text" name="radioWithImageSingleText1[]" class="form-control" placeholder="Image Text">
	                	<input type="file" name="radioWithImageSingleImg1[]" id="radioWithImageSingleImg" class="" onchange="readURL(this);">
	                	<img id="blah" src="#" alt="your image" height="50" width="50" style="width: 100px; height: 100px;" />
	                	</div>
	                </div>
	                </fieldset>

	                <fieldset id="CheckBox{{$count}}">
	                <legend>Checkbox Answer Options
	                <a name="optionbtn" id="optionbtn{{$count}}" class="btn btn-success pull-right btn-xs" onclick="addCheckbox({{$count}})"><i class='material-icons'>add_box</i></a>
	                </legend>
					<div class="col-md-12" id="main-menu4">
	           				@foreach($dd->options as $option)
							<div class="col-md-3 checkBoxText{{$count}}">
		                	<input type="text" name="checkBoxText{{$count}}[]" class="form-control" id="checkBoxText1" value="{{$option}}">
		                	<a class="btn btn-danger btn-xs pull-right" onclick="removeCheckboxOption({{$count}})" id="removeOption"><i class="material-icons">delete</i></a>
		                	</div>

	                		@endforeach
	                </div>
	                </fieldset>
	                 <a name="removeQuestionBtn" id="removeQuestionBtn" class="btn btn-danger pull-right btn-xs" onclick="removeQuestion({{$count}})">Remove Question</a>
	                </div>

	               	@php $count = $count + 1; @endphp
	               	@endif
					@endforeach               	 
	                @endforeach
	                <div class="col-md-12 AddMoreQuestion" id="AddMoreQuestion"></div>
	                <div class="col-md-12">

					<button type="submit" class="btn btn-success pull-right">
					<i class="material-icons">save</i>	
					Save Changes<div class="ripple-container"></div>
					</button>
	                <button type="button" name="AddQuestionBtn" id="AddQuestionBtn" class="btn btn-info pull-right" onclick="addMoreQuestion({{$count}})">
	                 <i class="material-icons">add_circle</i>
	                Add New Question
	                </button>
	                </div>
	                
			</form>
	    </div>
	    
	</div>
</div>
@endsection

@section('javascript')
         <script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
         <script>
         	function addRadio(count)
			{
				$("#Radio"+count).append("<div class='col-md-3 RadioText"+count+"'>"+
							"<div class='form-group'>"+
		                	"<input type='text' name='RadioText"+count+"[]' "+
		                	"class='form-control' id='RadioText' placeholder='option'>"+
		                	"<span class='material-input'></span>"+
		                	"</div>"+
		                	"<a class='btn btn-danger btn-xs pull-right' onclick='removeOption("+count+")' id='removeOption'><i class='material-icons'>delete</i></a>"+
		                	"</div>");
			}
			var count1 = 0;
			function addMoreQuestion(count)
			{
				
				count = count + count1 ;
				var randomnumber=Math.floor(Math.random()*150);
     			var i = randomnumber;
				$('#AddMoreQuestion').append("<div class='col-md-12' id='test'>&nbsp;</div><div class='col-md-12 mybox' id='Question"+count+"'>"+
					"<div class='col-md-12'>"+
	                "<div class='form-group label-floating is-empty {{ $errors->has('question') ? ' has-error' : '' }}'>"+
							"<label class='control-label'>Question</label>"+
							"<input class='form-control' type='text' name='question[]' id='question'>"+ 
							"<span class='material-input'></span>"+
					  	"</div>"+
					"</div>"+
	              	"<div class='col-md-12'>"+
	              	"<div class='col-md-6'>"+
	               	    "<div class='form-group label-floating is-empty {{ $errors->has('questionHint') ? ' has-error' : '' }}'>"+
							"<label class='control-label'>Question Hint</label>"+
							"<input class='form-control' type='text' name='questionHint[]' id='questionHint'>"+ 
							"<span class='material-input'></span>"+
					  	"</div>"+
	               	"</div>"+
	                "<div class='col-md-6'>"+
	                   	"<div class='form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}'>"+
	                   	
						"<select onchange='RadioChange("+count+")' name='QuestionType[]' id='QuestionType"+count+"' class='	' required>"+
                        "<option >Question Type</option>"+
                        "<option value ='1' selected>Radio</option>"+
                        "<option value ='2'>Radio With Image Single</option>"+
                        "<option value ='3'>Radio With TextBox Single</option>"+
                        "<option value ='4'>checkBox</option>"+
                        "<option value ='5'>checkBox With Image</option>"+
                        "<option value ='6'>checkBox With Image Multiple</option>"+
                        "<option value ='7'>checkBox With TextBox Multiple</option>"+
                        "<option value ='8'>checkBox With Dropdown Multiple</option>"+
                        "<option value ='9'>Textbox</option>"+
                        "<option value ='10'>TextArea</option>"+
                        "<option value ='11'>DatePicker</option>"+
                        "</select>"+
                        "</div>"+
	                "</div>"+
	                "</div>"+

	                "<fieldset id='Radio"+count+"'>"+
	                "<legend>Radio Answer Options"+
	                "<a onclick='addRadio("+count+")' name='optionbtn' id='optionbtn' class='btn btn-success pull-right btn-xs'><i class='material-icons'>add_box</i></a>"+
	                "</legend>"+
	                "<div class='col-md-12' id='main-menu1'>"+
	                	"<div class='col-md-3 RadioText"+count+"' >"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='RadioText"+count+"[]'"+
	                	 "class='form-control' id='RadioText"+i+"' placeholder='option'>"+
	                	"</div>"+
	                	"</div>"+
	                	"<div class='col-md-3 RadioText"+count+"'>"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='RadioText"+count+"[]' class='form-control' id='RadioText"+i+"' placeholder='option'>"+
	                	"</div>"+
	                	"</div>"+
						"</div>"+
						"</fieldset>"+

						"<fieldset id='RadioWithImageSingle"+count+"'  style='display: none;'>"+
						"<legend>Radio With Image Answer Options"+
						"<a class='btn btn-success pull-right btn-xs' onclick='addradioWithImageSingleOptionDynamic("+i+","+count+")'><i class='material-icons'>add_box</i></a>"+
	                	"</legend>"+
						"<div class='col-md-12' id='main-menu2'>"+
	                	"<div class='col-md-6'>"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText"+count+"[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>	"+
	                	"<input type='file' name='radioWithImageSingleImg"+count+"[]'"+
	                	"id='radioWithImageSingleImg' onchange='imagePreview(this,"+i+","+count+");'>"+
	                	"<img id='blah"+i+""+count+"' src='#' alt='your image' height='50' width='50' style='width: 100px; height: 100px;'' />"+
	                	"</div>"+
	                	"</div>"+
	                	"</fieldset>"+
						
						"<fieldset id='CheckBox"+count+"'  style='display: none;'>"+
						"<legend>Checkbox Answer Options"+
						"<a class='btn btn-success pull-right btn-xs' onclick='addDynamicCheckboxOption("+count+")'><i class='material-icons'>add_box</i></a>"+
	                	"</legend>"+
						"<div class='col-md-12' id='main-menu4'>"+
						"<div class='col-md-3 checkBox1'>"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control'"+ "placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"</div>"+
						"<div class='col-md-3 checkBox2'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control'"+  "placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"</div>"+
	                	"</div>"+
	                	"</fieldset>"+
	                	"<a onclick='removeQuestion("+count+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right btn-xs'>Remove Question</a>"+
						"</div>"+
	                	"</div>");
				count1 = count1 + 1;
			}
			function RadioChange(count)
			{
				$("#QuestionType"+count).change(function () {

				  	$("#Radio"+count).css('display', ($(this).val() === '1') ? 'block':'none');
				    $("#RadioWithImageSingle"+count).css('display', ($(this).val() === '2') ? 'block':'none');

				    $("#CheckBox"+count).css('display', ($(this).val() === '4') ? 'block':'none');
			    });
		  	}
		  	function removeOption(count)
			{
				
				$('.RadioText'+count+':last').remove();	
			}
			function removeQuestion(count)
			{
				/*alert(count);*/
				$("#Question"+count).remove();
				$("#test").remove();
			}
         </script>
         
         <!-- checkbox javascript -->
         <script>
         	function removeCheckboxOption(count)
         	{
         		$('.checkBoxText'+count+':last').remove();	
         	}
         	function addCheckbox(count)
         	{
         		$("#CheckBox"+count).append("<div class='col-md-3 checkBoxText"+count+"'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control'"+  "placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"<a class='btn btn-danger btn-xs pull-right' onclick='removeCheckboxOption("+count+")' id='removeOption'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
         	}
         	function addDynamicCheckboxOption(count)
			{
				$('#CheckBox'+count).append("<div class='col-md-3 checkBoxText"+count+"'>"+
     					"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control' placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"<a class='btn btn-danger btn-xs pull-right' onclick='removeCheckboxOption("+count+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
			}
         </script>
         <!-- RadioWithImageSingle -->
         <script>
         	function addRadioWithImageSingle(count)
         	{
         		var randomnumber=Math.floor(Math.random()*150);
     			var i = randomnumber;
         		$('#RadioWithImageSingle'+count).append("<div class='col-md-6 radioWithImageSingle"+count+"'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText"+count+"[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>"+
	                	"<input type='file' name='radioWithImageSingleImg"+count+"[]'' id='radioWithImageSingleImg' onchange='imagePreview(this,"+i+","+count+");''>"+

	                	"<img id='blah"+i+""+count+"' src='#'' alt='your image' height='50' width='50' style='width: 100px; height: 100px;' />"+
	                	"<a class='btn btn-danger btn-xs' onclick='removeRadioWithImageSingleOption("+count+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
         	}
         	function imagePreview(input,i,count) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah'+i+''+count).attr('src', e.target.result);
                }
				reader.readAsDataURL(input.files[0]);
            }
        	}
            function removeRadioWithImageSingleOption(count)
            {
            	$('.radioWithImageSingle'+count+':last').remove();
            }
        	
         </script>
         <script>
         	function addradioWithImageSingleOptionDynamic(i,count)
         	{
         		var randomnumber=Math.floor(Math.random()*150);
     			var t = randomnumber;
         		$('#RadioWithImageSingle'+count).append("<div class='col-md-6 radioWithImageSingle"+i+"'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText"+count+"[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>"+
	                	"<input type='file' name='radioWithImageSingleImg"+count+"[]'' id='radioWithImageSingleImg' onchange='imagePreview(this,"+t+","+count+");''>"+
	                	"<img id='blah"+t+""+count+"' src='#'' alt='your image' height='50' width='50' style='width: 100px; height: 100px;' />"+
	                	"<a class='btn btn-danger btn-xs pull-right' onclick='removeRadioWithImageSingleOption("+i+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
         	}
         </script>
         <!-- EndRadioWithImageSingle -->
@endsection
