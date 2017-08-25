<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Admin\QuestionModel;
use App\Models\Admin\ServiceModel;
use Session;
class questionManageController extends Controller
{
    	
    	public function question()
    	{  
            
            $services = ServiceModel::select('id','name')->get();
            $data = QuestionModel::all();

            $mainData = json_decode($data);
            $categoryService = array();
            foreach ($mainData as $posts) {
                $categoryService[] = json_decode($posts->question);
            }
          return view('pages.admin.question.question',compact('mainData','services'));
    	}

  	    public function newQuestion()
    	{
            $ary = ServiceModel::all();
            return view('pages.admin.question.newQuestion',compact('ary'));
    	}

       
        public function saveQuestion(Request $request)
        {   
            
            $categoryService = $request->CategoryService;
            $QuestionType = $request->QuestionType;
            $QuestionTypeCount = count($QuestionType);
            $data = array();

            for ($j=0; $j<$QuestionTypeCount; $j++) {

                if($QuestionType[$j] =='1')
                {
                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   $option = $request->{"RadioText".($j+1)};
                  
                }
                if($QuestionType[$j] =='2')
                {
                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   /*$option = $request->{"radioWithImageSingleText".($j+1)};*/
                   $Image = $request->file("radioWithImageSingleImg".($j+1));
                   $optionImage = array();
                   for ($i=0; $i <count($Image) ; $i++) { 
                        $imgpath = $Image[$i];
                        $photos = time().$imgpath->getClientOriginalName();
                        $optionImage[]=$photos;
                        $imgpath->move(public_path('uploads/optionImage'),$photos);
                    }
                    $option['imageText'] = $request->{"radioWithImageSingleText".($j+1)};
                   
                    $option['image'] = $optionImage;
                }
                if($QuestionType[$j] =='4')
                {
                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   $option = $request->{"checkBoxText".($j+1)};
                }
                $data[] = array('questionType' => $QuestionType[$j],'question' => $question,'questionHint' => $questionHint,'options'=>$option);
            }
            
            $mainArray[] = array('categoryService' => $categoryService,'question'=>$data);
            
            
            $post = new QuestionModel;
            $post->question = json_encode($mainArray);
            $post->save();
            Session::flash('message', 'Question save successfully.');
             Session::flash('alert-class', 'alert-success');
            return redirect('question');
        }
        public function showEditQuestion($id)
        {
             $ary = ServiceModel::all();
             $post = QuestionModel::find($id);

             $mainData = json_decode($post);

             return view('pages.admin.question.editQuestion',compact('mainData','ary'));
        }
        public function editQuestion(Request $request)
        {
           //dd($request);
           //exit();

            $questionId = $request->questionId;
            $categoryService = $request->CategoryService;
            $QuestionType = $request->QuestionType;
            $QuestionTypeCount = count($QuestionType);
            $data = array();
            for ($j=0; $j<$QuestionTypeCount; $j++) {
                if($QuestionType[$j] =='1')
                {
                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   $option = $request->{"RadioText".($j+1)};
                  
                }
                if($QuestionType[$j] =='2')
                {

                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   $Image = $request->file("radioWithImageSingleImg".($j+1));
                   $imageName = $request->{"radioWithImageSingleImg".($j+1)};
                   $optionImage = array();
                   for ($i=0; $i <count($imageName) ; $i++) {
                        if(is_object($imageName[$i]))
                        { 
                            $imgpath = $imageName[$i];
                            $photos = time().$imgpath->getClientOriginalName();
                            $optionImage[]=$photos;
                            $imgpath->move(public_path('uploads/optionImage'),$photos);
                        }
                        else
                        {
                              $optionImage[]=$imageName[$i];
                        }
                    }
                    $option['imageText'] = $request->{"radioWithImageSingleText".($j+1)};
                   
                    $option['image'] = $optionImage;
                  
                }
                if($QuestionType[$j] =='4')
                {
                   $question = $request->question[$j];
                   $questionHint = $request->questionHint[$j];
                   $option = $request->{"checkBoxText".($j+1)};
                  
                }
                $data[] = array('questionType' => $QuestionType[$j],'question' => $question,'questionHint' => $questionHint,'options'=>$option);
             }

             $mainArray[] = array('categoryService' => $categoryService,'question'=>$data);
             $post = array();
             $post['question'] = json_encode($mainArray);
             $pages = QuestionModel::where('id',$questionId)->update($post);
             Session::flash('message', 'question update successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('question');
        }
        public function deleteQuestion($id)
        {
             $post = QuestionModel::find($id);
             $post->delete();
             Session::flash('message', 'Question Delete successfully.');
             Session::flash('alert-class', 'alert-success');
             return redirect('question');
        }
        
}
