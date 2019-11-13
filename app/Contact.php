<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['name','phone'];


    public function user()
    {
    	return $this->belongsTo(User::class);

    }

    public function hey($name=null,$type=false)
    {
        return $name;

    }
}
