<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $guarded = array('id');
    //以下追記
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
}
