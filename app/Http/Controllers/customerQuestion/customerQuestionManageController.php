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
    public function serviceQuestion($serviceId)
    {

        $tkn = $_GET['tn'];
        
        $serviceQuestion = QuestionModel::where('categoryServiceId',$serviceId)->get()->toArray();
        $decodeQue = json_decode($serviceQuestion[0]['question']);
        $questionArray = $decodeQue[0]->question;
        
        $count = count($questionArray);
        for ($i=0; $i < $count; $i++) { 
          $questionType = $questionArray[$i]->questionType;
          $questionOption = $questionArray[$i]->options;

          if($questionType == 1)
          {
            echo "<div class='wizard-step' data-title=''><center><h3>".$questionArray[$i]->question."</h3></center>";
            echo '<input type="hidden" name="serviceId" value="'.$serviceId.'">';
            echo'<input type="hidden" name="_token" value="'.$tkn.'">';
            echo'<input type="hidden" name="questionType[]" value="{{$questionType}}">';
            foreach ($questionOption as $option) {
            $random = rand(1,9999999);
            print_r('<div class="InputRadio">
                <input name="options'.$i.'[]"  value="'.$option.'" class="ng-scope ng-pristine ng-valid u-visuallyHidden" id="'.$random.'" type="radio"><label class="InputRadio-label" for="'.$random.'"><div class="InputRadio-label-inner ng-scope">'.$option.'</div></label>
                </div>');
            }
            echo "</div>";
          }
          if($questionType == 4)
          {
            echo "<div class='wizard-step' data-title=''><center><h3>".$questionArray[$i]->question."</h3></center>";
            echo'<input type="hidden" name="questionType[]" value="{{$questionType}}">';
            echo'<input type="hidden" name="_token" value="'.$tkn.'">';
            foreach ($questionOption as $option) {
            $random = rand(1,9999999);
            print_r('<div class="InputCheckbox">
                 <input class="ng-scope ng-valid u-visuallyHidden ng-dirty" id="'.$random.'" type="checkbox" name="options'.$i.'[]" value="'.$option.'"><label class="InputCheckbox-label" for="'.$random.'"><div class="InputCheckbox-label-inner">'.$option.'</div>
                  </label></div>');
            }
            echo "</div>";
          }
        }
          
    }
}


               