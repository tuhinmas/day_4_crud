<?php

namespace App\Models  ;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PertanyaanModel { 
    //
    public static function get_all(){
        $pertanyaan = DB::table('questions') ->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_question = DB::table('questions') -> insert($data);
        return $new_question;
    }
    public static function show_question($pertanyaan_id){
        $question = DB::table('questions') -> where('id',$pertanyaan_id) ->first();
        return $question;
    }
}
