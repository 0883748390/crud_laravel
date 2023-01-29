<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //

    protected $tabl = "tasks";

    protected $primaryKey = "id";

    protected $fillable = ['username','password','name','email','birth_date','age','picture'];


    // use SoftDeletes;

    // protected $dates = ['deleted_at'];
}
