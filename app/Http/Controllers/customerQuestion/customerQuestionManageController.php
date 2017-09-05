<?php

namespace App\Http\Controllers\customerQuestion;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Admin\QuestionModel;
use App\Models\customer\CustomerServiceQuestion;
use Session;
class customerQuestionManageController extends Controller
{
    function customerQuestion()
    {
    	$catId = $_GET['id'];
        $data = QuestionModel::where('categoryServiceId',$catId)->get();
       	$decodeData = json_decode($data);
       	$QuestionId = $decodeData[0]->id;
       	$encodeQuestion = $decodeData[0]->question;
       	$decodeQuestion = json_decode($encodeQuestion);
       	$allQuestion = $decodeQuestion[0]->question;
       	$count = count($allQuestion);
		
		$questionHint = $allQuestion[0]->questionHint;
       	$questionOptions = $allQuestion[0]->options;
       	
       	$vararray="";
       	$random=rand(000,999);
       	for ($i=0; $i <$count; $i++) 
       	{ 

       		$questiontype = $allQuestion[$i]->questionType;
       		$question = $allQuestion[$i]->question;
       		
       		
			$vararray .= '<div class="wizard-step" data-title="{{}}" id="'.$random.'">';
			$vararray .= '<center>'.$question.'</center>';
			
       		if($questiontype == 1)
       		{

       			foreach ($questionOptions as $option) {
       			 
       			 $vararray .= '<input-radio input-radio-label="'.$option.'" class="ng-isolate-scope"><div class="InputRadio">
					<input name="metadata_1338_keys[]"  value="2" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="'.$option.'" type="radio"><label class="InputRadio-label" for="'.$option.'"><div class="InputRadio-label-inner ng-scope">'.$option.'</div></label>
                        </div>
				</input-radio>';
       			/*print_r('<input-radio input-radio-label="'.$option.'" class="ng-isolate-scope"><div class="InputRadio">
					<input name="metadata_1338_keys[]"  value="2" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="'.$option.'" type="radio"><label class="InputRadio-label" for="'.$option.'"><div class="InputRadio-label-inner ng-scope">'.$option.'</div></label>
                        </div>
				</input-radio>');*/
       			}
       			
       		}
       		$vararray .= '</div>';
       		/*echo ' <div class="wizard-step" data-title="Step Two">
            This is step two
        	</div>';*/
       	}

       	echo $vararray;
    }
    function popupQuestionAdd(Request $request)
    {
    	
    	$serviceId = $request->serviceId;
    	$question = $request->question;
		$count = count($question);
		$option = array();
		for ($i=0; $i<$count; $i++) { 
			
			$option[$i] = $request->{"options".($i)};  
		}
		$encodeOptions = json_encode($option);
		$mainArray = array('question' => $question,
						   'options' => $encodeOptions,
						  );
		$encodeMainArray = json_encode($mainArray);
		Session::put('serviceId', $serviceId);
		Session::put('questionAndOptions', $encodeMainArray);
		if (Auth::check())
		{
			$saveCustomer = new CustomerServiceQuestion();
			$saveCustomer['serviceId'] = $serviceId;
			$saveCustomer['customerId'] = Auth::id();
			$saveCustomer['questionAndOption'] = $encodeMainArray;
			$saveCustomer->save();

			return redirect('login');
		}
		else
		{
			return redirect('customerHire');	
		}
		
	}
}


               