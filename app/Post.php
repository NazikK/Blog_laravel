<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // //Table Name
     protected $table = 'posts';
    // //Primary Key
    protected $primaryKey = 'id';
    // //timeStamps
     public $timestamps = true;
    
     public function user(){
         return $this->belongsTo('App\User');
     }
}
