<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Score as ScoreEloquent;
class Student extends Model
{
    protected $table = 'student';
    public function score(){
        return $this->hasOne(ScoreEloquent::class);
    }
}
