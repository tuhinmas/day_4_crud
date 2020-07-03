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
}
