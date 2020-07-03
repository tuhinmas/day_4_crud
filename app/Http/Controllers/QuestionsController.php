<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
class QuestionsController extends Controller
{
    //
    public function index(){
         $questions = PertanyaanModel::get_all();
         return view('questions.index', compact('questions'));
    }

    public function create(){
        return view('questions.form');
    }

    public function store(Request $request){
    // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $current_date_time = date('Y-m-d H:i:s');
        $data = array_merge($data, ["created_at" =>$current_date_time,"updated_at" =>$current_date_time]);
        $question = PertanyaanModel::save($data);
        if($question){
            return redirect('/pertanyaan');
        }
    }
    
}
