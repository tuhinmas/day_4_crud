<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
class AnswersController extends Controller
{
    public function store(Request $request,$pertanyaan_id){
        $data = $request->all();
        unset($data["_token"]);
        $current_date_time = date('Y-m-d H:i:s');
        $data = array_merge($data, ["q_id" => $pertanyaan_id,
                                    "created_at" =>$current_date_time,
                                    "updated_at" =>$current_date_time]);
        $answer = JawabanModel::save($data);
        if($answer){
            return redirect() -> action (
                                    'QuestionsController@show',
                                    ['pertanyaan_id' => $pertanyaan_id]
                                );
        }
    }
}
