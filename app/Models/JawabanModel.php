<?php

namespace App\Models  ;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class JawabanModel { 
    //
    public static function get_all($pertanyaan_id){
        $jawaban = DB::table('answers')->where('q_id',$pertanyaan_id) ->get();
        return $jawaban;
    }

    public static function save($data){
        $new_answer = DB::table('answers') -> insert($data);
        return $new_answer;
    }
 
}
