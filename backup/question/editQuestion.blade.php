@extends('layouts.back')
@section('css')
        
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
	            $categoryService = $question['0']->categoryService;

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
	              	@if($dd->questionType == '1')
	              	<div class="col-md-12" id="Question{{$count}}">
	               	<div class="col-md-12">
	                <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" value="{{$dd->question}}"> 
							<span class="material-input"></span>
					  	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-6">
	               	    <div class="form-group  {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" value="{{$dd->questionHint}}"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
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
	                <div id="Radio{{$count}}">
					<div class="col-md-12" id="main-menu1">
	                		
							@foreach($dd->options as $option)
							<div class="col-md-3 RadioText{{$count}}">
		                	<input type="text" name="RadioText{{$count}}[]" class="form-control" id="RadioText" value="{{$option}}">
		                	<a onclick="removeOption({{$count}})" id="removeOption">Remove</a>
		                	</div>

	                		@endforeach
	               </div>
	               	<a name="optionbtn" id="optionbtn{{$count}}" class="btn btn-success pull-right" onclick="addRadio({{$count}})">+</a>
	               	<a name="removeQuestionBtn" id="removeQuestionBtn" class="btn btn-danger pull-right" onclick="removeQuestion({{$count}})">Remove Question</a>
	                </div>
	                <div id="Textbox{{$count}}" style="display: none;">
	                <div class="col-md-12" id="main-menu2">
	                	<input type="text" name="">
	                </div>
	                </div>
	                </div>

	               	@php $count = $count + 1; @endphp
	               	@endif
	               	@if($dd->questionType == '4')
	              	<div class="col-md-12" id="Question{{$count}}">
	               	<div class="col-md-12">
	                <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" value="{{$dd->question}}"> 
							<span class="material-input"></span>
					  	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-6">
	               	    <div class="form-group  {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" value="{{$dd->questionHint}}"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
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
	                <div id="CheckBox{{$count}}">
					<div class="col-md-12" id="main-menu4">
	                		
							@foreach($dd->options as $option)
							<div class="col-md-3 checkBoxText{{$count}}">
		                	<input type="text" name="checkBoxText{{$count}}[]" class="form-control" id="checkBoxText1" value="{{$option}}">
		                	<a onclick="removeCheckboxOption({{$count}})" id="removeOption">Remove</a>
		                	</div>

	                		@endforeach
	                </div>
	                <a name="optionbtn" id="optionbtn{{$count}}" class="btn btn-success pull-right" onclick="addCheckbox({{$count}})">+</a>
	                
	                <a name="removeQuestionBtn" id="removeQuestionBtn" class="btn btn-danger pull-right" onclick="removeQuestion({{$count}})">Remove Question</a>
	                </div>
	                <div id="Textbox{{$count}}" style="display: none;">
	                <div class="col-md-12" id="main-menu2">
	                	<input type="text" name="">
	                </div>
	                </div>

	                </div>

	               	@php $count = $count + 1; @endphp
	               	@endif
					@endforeach               	 
	                @endforeach
	                <div class="col-md-12 AddMoreQuestion" id="AddMoreQuestion"></div>
	                <div class="col-md-12">
	                <input type="button" name="AddQuestionBtn" id="AddQuestionBtn" value="Add More Question" class="btn btn-info pull-right" onclick="addMoreQuestion({{$count}})" />
	                </div>
	                <button type="submit" class="btn btn-success pull-right">Edit<div class="ripple-container"></div>
					</button>
			</form>
	    </div>
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
		                	"<a onclick='removeOption("+count+")' id='removeOption'>Remove</a>"+
		                	"</div>");
			}
			var count1 = 0;
			function addMoreQuestion(count)
			{
				
				count = count + count1 ;
				var randomnumber=Math.floor(Math.random()*150);
     			var i = randomnumber;
				$('#AddMoreQuestion').append("<div class='col-md-12' id='Question"+count+"'>"+
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
	                "<div id='Radio"+count+"'>"+
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
						"<a onclick='addRadio("+count+")' name='optionbtn' id='optionbtn' class='btn btn-success pull-right'>+</a>"+
	                	"<a onclick='removeQuestion("+count+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right'>Remove Question</a>"+

						"</div>"+

						"<div id='Textbox"+count+"'  style='display: none;'>"+
						"	<div class='col-md-12' id='main-menu2'>"+
	                	"		<input type='text' name=''>"+
	                	"	</div>"+
						"</div>"+
						
						"<div id='CheckBox"+count+"'  style='display: none;'>"+
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
	                	"<a class='btn btn-success pull-right' onclick='addDynamicCheckboxOption("+count+")'>+</a>"+
	                	"<a onclick='removeQuestion("+count+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right'>Remove Question</a>"+
	                	"</div>"+
	                	"</div>"+
						"</div>");
				count1 = count1 + 1;
			}
			function RadioChange(count)
			{
				
				$("#QuestionType"+count).change(function () {

				  	$("#Radio"+count).css('display', ($(this).val() === '1') ? 'block':'none');
				    $("#Textbox"+count).css('display', ($(this).val() === '2') ? 'block':'none');

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
	                	"<a onclick='removeCheckboxOption("+count+")' id='removeOption'>Remove</a>"+
	                	"</div>");
         	}
         	function addDynamicCheckboxOption(count)
			{
				$('#CheckBox'+count).append("<div class='col-md-3 checkBoxText"+count+"'>"+
     					"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control' placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"<a onclick='removeCheckboxOption("+count+")'"+
						" style='float:right'>Remove</a>"+
	                	"</div>");
			}
         </script>

@endsection
