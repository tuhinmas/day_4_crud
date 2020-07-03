<?php

namespace App\Models  ;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class JawabanModel { 
    //
    public static function get_all(){
        $pertanyaan = DB::table('answers') ->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_question = DB::table('answers') -> insert($data);
        return $new_question;
    }
}
