<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Student as StudentEloquent;
class Score extends Model
{
    protected $table = 'score';

    public function student(){
        return $this->belongsTo(StudentEloquent::class);
    }

    //用以對查詢的資料作排序
    public function scopeOrderByTotal($query){
        return $query->orderBy('score.total','DESC');
    }

    //用以對查詢的資料作排序
    public function scopeOrderBySubject($query){
        return $query->orderBy('score.chinese','DESC')->orderBy('score.english','DESC')->orderBy('score.math','DESC');
    }

}
