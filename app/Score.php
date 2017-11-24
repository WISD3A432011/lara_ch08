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
}
