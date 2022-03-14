<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['user_name','first_name','last_name','dob','phone','email','address','hobby','gender','country','state'];

    public function setHobbyAttribute($value){
        $this->attributes['hobby'] = implode(',', $value);
    }
}