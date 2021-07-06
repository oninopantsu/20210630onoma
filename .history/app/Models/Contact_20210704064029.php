<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array (
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => 'required|max:8',
            'address' => "required",
            'buildingname' => '',
            'opinion' => 'required|max:8',

    );
    public
     public function contact(){
        return $this->hasOne('App\Models\Contact');
     }
     public function getDate
     
}
