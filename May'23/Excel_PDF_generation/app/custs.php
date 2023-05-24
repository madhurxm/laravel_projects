<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class custs extends Model
{
    //
    protected $table="learners";
    protected $primary_key = 'id';
    protected $fillable = ['first_name', 'last_name','gender','plan_id','country','username','password'];
}
