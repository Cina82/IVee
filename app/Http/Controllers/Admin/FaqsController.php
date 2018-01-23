<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqsController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function get()
    {
        $faqs = Faq::all();
    	return view('pages.admin.pages.faq', compact('faqs'));
    }

    public function add()
    {
        return view('pages.admin.pages.faqadd');   
    }

    public function post(Request $request)
    {
        Faq::create([
            'title' => request('title'),
            'description' =>request('description')
        ]);

        return redirect('admin/faqs');
    }

    public function single($id)
    {
        $faqs = Faq::where('id',$id)->get();
        return view('pages.admin.pages.faqedit', compact('faqs'));
    }

    public function put(Request $request)
    {
        $data = array(
            'title' => $request->title,
            'description' => $request->description
        );
        $pages1 = Faq::where('id',$request->id)->update($data);
        return redirect('admin/faqs');
    }

    public function delete($id)
    {
        $featured = Faq::where('id',$id);    
        $featured->delete();

        return redirect()->back();  
    }
}
