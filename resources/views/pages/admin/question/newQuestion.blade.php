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
	
}
</style>
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
                            <option value="">Select Service</option>
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
	                <div class="col-md-12 mybox">
	                <div class="col-md-12">
	                <div class="col-md-6">
	                <div class="form-group label-floating is-empty {{ $errors->has('question') ? ' has-error' : '' }}">
							<label class="control-label">Question</label>
							<input class="form-control" type="text" name="question[]" id="question" required="required"> 
							<span class="material-input"></span>
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group label-floating is-empty {{ $errors->has('questionHint') ? ' has-error' : '' }}">
							<label class="control-label">Question Hint</label>
							<input class="form-control" type="text" name="questionHint[]" id="questionHint" required="required"> 
							<span class="material-input"></span>
					  	</div>
					</div>
					</div>
	              	<div class="col-md-12">
	              	<div class="col-md-4"><label style="padding-top: 50px !important;">Select Answer Type</label></div>
	              	<div class="col-md-6">
	              			<div class="form-group label-floating is-empty {{ $errors->has('QuestionType') ? ' has-error' : '' }}">
	                		<select name="QuestionType[]" id="QuestionType" class="selectpicker" required="required">
                            <option value="">Question Type</option>
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
	             	 <fieldset class="col-md-12" id="main-menu1">
	                	<legend>Radio Answer Options
	                	<a name="optionbtn" id="optionbtn" class="btn btn-success pull-right btn-xs"><i class="material-icons">add_box</i></a>
	                	</legend>
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText1[]" class="form-control" id="RadioText" placeholder="Radio Option" required="required">
	                	</div>
	                	<div class="col-md-3">
	                	<input type="text" name="RadioText1[]" class="form-control" id="RadioText1" placeholder="Radio Option" required="required">
	                	</div>
	                	</fieldset>
	              	</div>
	                <div id="RadioWithImageSingle" style="display: none;">
	                 <fieldset class="col-md-12 mybox" id="main-menu2">
	                 	<legend>Radio With Image Answer Options
	                 	<a class="btn btn-success pull-right btn-xs" onclick="addradioWithImageSingleOption()"><i class="material-icons">add_box</i></a>
	                 	</legend>
	                 	<div class="col-md-6">
	                	<input type="text" name="radioWithImageSingleText1[]" class="form-control" placeholder="Image Text">
	                	<input type="file" name="radioWithImageSingleImg1[]" id="radioWithImageSingleImg" class="" onchange="readURL(this);">
	                	<img id="blah" src="#" alt="your image" height="50" width="50" style="width: 100px; height: 100px;" />
	                	</div>
	                </fieldset>
	                </div>
	               	<div id="CheckBox" style="display: none;">
	                <fieldset class="col-md-12  mybox" id="main-menu4" style="border-color: #3C3B37;border: 1px solid;" >
	                	<legend>Checkbox Answer Options
	                	<a class="btn btn-success pull-right btn-xs" onclick="addCheckboxOption()"><i class="material-icons">add_box</i></a>
	                	</legend>
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                	<div class="col-md-3 checkBox">
	                	<input type="text" name="checkBoxText1[]" class="form-control" placeholder="CheckBox Option">
	                	</div>
	                </fieldset>
	                </div>
	                </div>
	                </div>
	                <div class="col-md-12 AddMoreQuestion" id="AddMoreQuestion"></div>
	                <!-- Question Div -->
	                <div class="col-md-12">
	                <button type="submit" class="btn btn-success pull-right">
	                <i class="material-icons">save</i>
	                Save All Question
					</button>
	                <button type="button" name="AddQuestionBtn" id="AddQuestionBtn" class="btn btn-info pull-right">
	                <i class="material-icons">add_circle</i>
	                Add New Question
					</button>
					</div>
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
    $('#RadioWithImageSingle').css('display', ($(this).val() === '2') ? 'block':'none');
    $('#CheckBox').css('display', ($(this).val() === '4') ? 'block':'none');
 });
</script>
<script>
	var OptionNo = 3;
	$("#optionbtn").click(function(){
		$('#main-menu1').append("<div class='col-md-3' id='optionDivNo"+OptionNo+"'>"+
	                	"<div class='form-group is-empty'>"+
						"<input class='form-control' name='RadioText1[]' required='required' type='text' placeholder='Radio Option'>"+
						"<span class='material-input'></span>"+
						"<a class='btn btn-danger btn-xs' onclick='removeRadioOption("+OptionNo+")' class='removeRadioOption'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
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
		$('#AddMoreQuestion').append("<div class='col-md-12' id='test'>&nbsp;</div><div class='col-md-12 mybox' id='Question"+i+"'>"+
					"<div class='col-md-12'>"+
					"<div class='col-md-6'>"+
	                "<div class='form-group label-floating is-empty {{ $errors->has('question') ? ' has-error' : '' }}'>"+
							"<label class='control-label'>Question</label>"+
							"<input class='form-control' type='text' name='question[]' id='question'>"+ 
							"<span class='material-input'></span>"+
					  	"</div>"+
					"</div>"+
	              	"<div class='col-md-6'>"+
	               	    "<div class='form-group label-floating is-empty {{ $errors->has('questionHint') ? ' has-error' : '' }}'>"+
							"<label class='control-label'>Question Hint</label>"+
							"<input class='form-control' type='text' name='questionHint[]' id='questionHint'>"+ 
							"<span class='material-input'></span>"+
					  	"</div>"+
	               	"</div>"+
	               	"</div>"+
	               	"<div class='col-md-12'>"+
	               	"<div class='col-md-4'>"+
	               	"<label style='padding-top: 30px !important;''>Select Answer Type</label>"+
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
	                "<fieldset class='col-md-12' id='RadioOption"+i+"'>"+
	                	"<legend>Radio Answer Options"+
	                	"<a onclick='addRadio("+i+","+count+")' name='optionbtn' id='optionbtn' class='btn btn-success pull-right btn-xs'><i class='material-icons'>add_box</i></a>"+
	                	"</legend>"+
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
						"</fieldset>"+
	                	"</div>"+

						"<fieldset id='RadioWithImageSingle"+i+"' style='display:none;'>"+
						"<legend>Radio With Image Answer Options"+
						"<a class='btn btn-success pull-right btn-xs' onclick='addradioWithImageSingleOptionDynamic("+i+","+count+")'><i class='material-icons'>add_box</i></a>"+
	                	"</legend>"+
						"<div class='col-md-12' id='main-menu2' >"+
	                	"<div class='col-md-6'>"+
	                	"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText"+count+"[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>	"+
	                	"<input type='file' name='radioWithImageSingleImg"+count+"[]'"+
	                	"id='radioWithImageSingleImg' onchange='imagePreview(this,"+i+");'>"+
	                	"<img id='blah"+i+"' src='#' alt='your image' height='50' width='50' style='width: 100px; height: 100px;'' />"+
	                	"</div>"+
	                	"</div>"+
						"</fieldset>"+

						"<fieldset id='CheckBox"+i+"' style='display: none;'>"+
						"<legend>Checkbox Answer Options"+
						"<a class='btn btn-success pull-right btn-xs' onclick='addDynamicCheckboxOption("+i+","+count+")'><i class='material-icons'>add_box</i></a>"+
	                	"</legend>"+
	                	"<div class='col-md-12 mybox' id='main-menu"+i+"' >"+
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
	                	"</fieldset>"+
	                	"<a onclick='removeQuestion("+i+")' name='removeQuestionBtn' id='removeQuestionBtn' class='btn btn-danger pull-right btn-xs'>Remove Question</a>"+
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
						"<a onclick='removeRadio("+i+")' class='btn btn-danger btn-xs'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
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
	    $("#RadioWithImageSingle"+i).css('display', ($(this).val() === '2') ? 'block':'none');
	    $("#CheckBox"+i).css('display', ($(this).val() === '4') ? 'block':'none');
	    });
  	}
  	function removeQuestion(i)
	{
		$('#Question'+i).remove();
		$('#test').remove();
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
	                	"<a class='btn btn-danger btn-xs' onclick='removeCheckboxOption("+i+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
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
	                	"<a class='btn btn-danger btn-xs' onclick='removeCheckboxOption("+i+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
	}
</script>
<!-- End checkBox javaScript -->

<!-- Radio with Image single javaScript -->
<script>
	function addradioWithImageSingleOption()
	{
		var randomnumber=Math.floor(Math.random()*150);
     	var i = randomnumber;
			$('#main-menu2').append("<div class='col-md-6 radioWithImageSingle"+i+"'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText1[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>"+
	                	"<input type='file' name='radioWithImageSingleImg1[]'' id='radioWithImageSingleImg' onchange='imagePreview(this,"+i+");''>"+
	                	"<img id='blah"+i+"' src='#'' alt='your image' height='50' width='50' style='width: 100px; height: 100px;' />"+
	                	"<a class='btn btn-danger btn-xs pull-right' onclick='removeRadioWithImageSingleOption("+i+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
	}
	function imagePreview(input,i) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah'+i).attr('src', e.target.result);
                }
				reader.readAsDataURL(input.files[0]);
            }
    }
    function removeRadioWithImageSingleOption(i)
    {
    	$('.radioWithImageSingle'+i+':last').remove();	
    }
    function addradioWithImageSingleOptionDynamic(i,count)
    {
    	var randomnumber=Math.floor(Math.random()*150);
     	var t = randomnumber;
    	$('#RadioWithImageSingle'+i).append("<div class='col-md-6 radioWithImageSingle"+i+"'>"+
						"<div class='form-group is-empty'>"+
	                	"<input type='text' name='radioWithImageSingleText"+count+"[]'"+
	                	"class='form-control' placeholder='Image Text'>"+
	                	"</div>"+
	                	"<input type='file' name='radioWithImageSingleImg"+count+"[]'' id='radioWithImageSingleImg' onchange='imagePreview(this,"+t+");''>"+
	                	"<img id='blah"+t+"' src='#'' alt='your image' height='50' width='50' style='width: 100px; height: 100px;' />"+
	                	"<a class='btn btn-danger btn-xs' onclick='removeRadioWithImageSingleOption("+i+")'"+
						" style='float:right'><i class='material-icons'>delete</i></a>"+
	                	"</div>");
    }
</script>
<!-- End Radio with Image single javaScript -->

<!-- input type file show image using this script -->
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
