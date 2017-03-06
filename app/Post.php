<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'vechiles','vechiletype','weight','pickup','drop','frotoguynumber','frotoguy','name','time','date','contact'
    ];

    public function user(){

      return $this->belongsTo('App\User');
    }
    
}
