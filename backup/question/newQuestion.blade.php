@extends('layouts.back')
@section('css')

@endsection

@section('contents')
 <div class="content">
	<div class="col-md-12">
 	<div class="card">

        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Question</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
     		<form method="post" action="saveQuestion" enctype="multipart/form-data">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	            	<div class="col-md-6">
	                		<div class="form-group label-floating is-empty {{ $errors->has('CategoryService') ? ' has-error' : '' }}">
	                		<select name="CategoryService" id="CategoryService" class="selectpicker" required>
                            <option selected>Select Service</option>
                            @foreach($ary as $rows)
                            <option value ="{{$rows->id}}">{{$rows->name}}</option>
                            @endforeach
                            </select>
                            </div>
	                </div>
	                <div class="col-md-6">
	                </div>   
	                </div>
	                <div class="col-md-12">
	                <div class="form-group label-floating is-empty {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question"> 
							<span class="material-input"></span>
					  	</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-6">
	               	    <div class="form-group label-floating is-empty {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint"> 
							<span class="material-input"></span>
					  	</div>
	               	</div>
	                <div class="col-md-6">
	                   		<div class="form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}">
	                		<select name="QuestionType[]" id="QuestionType" class="selectpicker" required>
                            <option >Question Type</option>
                        	<option value ="1" selected>Radio</option>
                        	<option value ="2">Radio With Image Single</option>
                        	<option value ="3">Radio With TextBox Single</option>
                        	<option value ="4">checkBox</option>
                        	<option value ="5">checkBox With Image</option>
                        	<option value ="6">checkBox With Image Multiple</option>
                        	<option value ="7">checkBox With TextBox Multiple</option>
                        	<option value ="8">checkBox With Dropdown Multiple</option>
                        	<option value ="9">Textbox</option>
                        	<option value ="10">TextArea</option>
                        	<option value ="11">DatePicker</option>
                        	</select>
                            </div>
	                </div>
	                </div>
	                <div id="Radio">
	                <div class="col-md-12" id="main-menu1">
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText1[]" class="form-control" id="RadioText" placeholder="Radio Option">
	                	</div>
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText1[]" class="form-control" id="RadioText1" placeholder="Radio Option">
	                	</div>
	                </div>
	                	<a name="optionbtn" id="optionbtn" class="btn btn-success pull-right">+</a>
	                </div>
	                <div id="Textbox" style="display: none;">
	                <div class="col-md-12" id="main-menu2" >
	                	<input type="text" name="" class="form-control">
	                </div>
	                </div>
	               	<div id="CheckBox" style="display: none;">
	                <div class="col-md-12" id="main-menu4" >
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                </div>
	                	<a class="btn btn-info pull-right" onclick="addCheckboxOption()">+</a>
	                </div>

	                <div class="col-md-12 AddMoreQuestion" id="AddMoreQuestion"></div>

	                <div class="col-md-12">
	                <input type="button" name="AddQuestionBtn" id="AddQuestionBtn" value="Add More Question" class="btn btn-info pull-right">
	                </div>
					

	                <button type="submit" class="btn btn-success pull-right">Save<div class="ripple-container"></div>
					</button>
					</div>
			</form>
	    </div>
	                        
	</div>
</div>
</div>

@endsection
@section('javascript')
 <script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
 <script>
  $("#QuestionType").change(function () {
  	$('#Radio').css('display', ($(this).val() === '1') ? 'block':'none');
    $('#Textbox').css('display', ($(this).val() === '2') ? 'block':'none');
    $('#CheckBox').css('display', ($(this).val() === '4') ? 'block':'none');
 });
</script>
<script>
	var OptionNo = 3;
	$("#optionbtn").click(function(){
		$('#main-menu1').append("<div class='col-md-3' id='optionDivNo"+OptionNo+"'>"+
	                	"<div class='form-group is-empty'>"+
						"<input class='form-control' name='RadioText1[]' type='text' placeholder='Radio Option'>"+
						"<span class='material-input'></span>"+
						"<a onclick='removeRadioOption("+OptionNo+")' class='removeRadioOption'"+
						" style='float:right'>Remove</a>"+
						"</div>"+
	                	"</div>");
		OptionNo = OptionNo + 1;
	});

	//REMOVE RADIO OPTION
	function removeRadioOption(i)
  	{
  		OptionNo = OptionNo - 1;
  		$("#optionDivNo"+OptionNo+"").remove();
  	}
</script>
<script>
	var count = 2;
	$("#AddQuestionBtn").click(function(){
		
		var randomnumber=Math.floor(Math.random()*150);
     	var i = randomnumber;
		$('#AddMoreQuestion').append("<div class='col-md-12' id='Question"+i+"'>"+
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
	                   	
						"<select onchange='RadioChange("+i+")' name='QuestionType[]' id='QuestionType"+i+"' class='	' required>"+
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
	                "<div id='Radio"+i+"'>"+
	                "<div class='col-md-12' id='RadioOption"+i+"'>"+
	                	"<div class='col-md-3 Radio"+i+"' >"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='RadioText"+count+"[]'"+
	                	 "class='form-control' id='RadioText"+i+"' placeholder='Radio Option'>"+
	                	"</div>"+
	                	"</div>"+
	                	"<div class='col-md-3 Radio"+i+"'>"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='RadioText"+count+"[]' class='form-control' id='RadioText"+i+"' placeholder='Radio Option'>"+
	                	"</div>"+
	                	"</div>"+

	                	"</div>"+
	                	"<a onclick='addRadio("+i+","+count+")' name='optionbtn' id='optionbtn' class='btn btn-success pull-right'>+</a>"+
	                	"<a onclick='removeQuestion("+i+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right'>Remove Question</a>"+
						"</div>"+
						"<div id='Textbox"+i+"' style='display:none;'>"+
						"<div class='col-md-12' id='main-menu2' >"+
	                	"<input type='text' name=''>"+
		                "</div>"+
						"</div>"+

						"<div id='CheckBox"+i+"' style='display: none;'>"+
	                	"<div class='col-md-12' id='main-menu"+i+"' >"+
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
	                	"<a class='btn btn-success pull-right' onclick='addDynamicCheckboxOption("+i+","+count+")'>+</a>"+
	                	"<a onclick='removeQuestion("+i+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right'>Remove Question</a>"+
	                	"</div>"+
						"</div>");
		count = count + 1;

	});

	function addRadio(i,count)
	{
		var optionRadioNo = $(".Radio"+i).length;
		optionRadioNo = optionRadioNo + 1;
		
		$("#RadioOption"+i).append("<div class='col-md-3 Radio"+i+"' id='optionDivNo"+optionRadioNo+"'>"+
	                	"<div class='form-group is-empty'>"+
						"<input class='form-control' name='RadioText"+count+"[]' type='text' id='RadioText"+i+"' placeholder='Radio Option'>"+
						"<span class='material-input'></span>"+
						"<a onclick='removeRadio("+i+")' class='removeRadioOption'"+
						" style='float:right'>Remove</a>"+
						"</div>"+
	                	"</div>");
		 	optionRadioNo = optionRadioNo + 1;
	}
	function removeRadio(i)
	{
		var optionRadioNo = $(".Radio"+i).length;
		$('.Radio'+i+':last').remove();	
	}
	function RadioChange(i)
	{
		$("#QuestionType"+i).change(function () {
	  	$("#Radio"+i).css('display', ($(this).val() === '1') ? 'block':'none');
	    $("#Textbox"+i).css('display', ($(this).val() === '2') ? 'block':'none');
	    $("#CheckBox"+i).css('display', ($(this).val() === '4') ? 'block':'none');
	    });
  	}
  	function removeQuestion(i)
	{
		$('#Question'+i).remove();
  	}
</script>

<!-- checkBox javaScript -->

<script>
	function addCheckboxOption()
	{
		var randomnumber=Math.floor(Math.random()*150);
     	var i = randomnumber;
     	$('#main-menu4').append("<div class='col-md-3 checkBox"+i+"'>"+
     					"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText1[]' class='form-control' placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"<a onclick='removeCheckboxOption("+i+")'"+
						" style='float:right'>Remove</a>"+
	                	"</div>");
	                	
	}
	function removeCheckboxOption(i)
	{	
		$('.checkBox'+i+':last').remove();	
	}
	function addDynamicCheckboxOption(i,count)
	{
		$('#main-menu'+i).append("<div class='col-md-3 checkBox"+i+"'>"+
     					"<div class='form-group is-empty'>"+
	                	"<input type='text' name='checkBoxText"+count+"[]' class='form-control' placeholder='CheckBox Option'>"+
	                	"</div>"+
	                	"<a onclick='removeCheckboxOption("+i+")'"+
						" style='float:right'>Remove</a>"+
	                	"</div>");
	}
</script>

@endsection
