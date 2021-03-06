<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
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
        date_default_timezone_set("Asia/Jakarta");
        $current_date_time = date('Y-m-d H:i:s');
        $data = array_merge($data, ["created_at" =>$current_date_time,"updated_at" =>$current_date_time]);
        $question = PertanyaanModel::save($data);
        if($question){
            return redirect('/pertanyaan');
        }
    }
    public function show($pertanyaan_id){
        $question = PertanyaanModel::show_question($pertanyaan_id);
        $jawaban = JawabanModel::get_all($pertanyaan_id);
            return view('answers.index', compact('question','jawaban'));

        // dd($answer);
    }
    public function edit($pertanyaan_id){
        $question = PertanyaanModel::show_question($pertanyaan_id);
        return view('questions.edit', compact('question'));
    }
    public function update($pertanyaan_id, Request $request){
        $question = PertanyaanModel::update($pertanyaan_id, $request -> all());
        return redirect('/pertanyaan');
    }
    public function destroy($pertanyaan_id){
        $delete = PertanyaanModel::destroy($pertanyaan_id);
        return redirect('/pertanyaan');
    }
    
}
