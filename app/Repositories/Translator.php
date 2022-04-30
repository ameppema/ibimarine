<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;

class Translator {

    public static function translate($table,$column,$row_id,$translation,$locale = 'en'){
        return DB::table('translations')
                        ->insertGetId([
                            'table'=> $table,
                            'column'=>$column,
                            'row_id'=>$row_id,
                            'translation'=>$translation,
                            'locale'=>$locale,
                        ]);
    }
    public static function updateTranslate($table,$column,$row_id,$translation,$locale = 'en'){
        $translation = DB::table('translations')
                        ->where('table', $table)
                        ->where('column',$column)
                        ->where('row_id',$row_id)
                        ->where('locale',$locale)
                        ->update([

                            'translation'=>$translation ?? '',
                        ]);
    }
    public static function getTranslate($table,$column,$row_id,$locale = 'en'){
        return DB::table('translations')
                        ->where('table', $table)
                        ->where('column',$column)
                        ->where('row_id',$row_id)
                        ->where('locale',$locale)
                        ->first(['translation']);
    }
    public static function deleteTranslations($table,$column,$row_id,$locale = 'en'){
        return DB::table('translations')
                        ->where('table', $table)
                        ->where('column',$column)
                        ->where('row_id',$row_id)
                        ->where('locale',$locale)
                        ->delete();
    }
}