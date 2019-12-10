<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function GetFullNameAttribute(){
    	return "$this->first_name $this->middle_name $this->last_name";
    }
}
