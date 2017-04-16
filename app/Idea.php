<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable =[
        'user_id','name','kind','text'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
