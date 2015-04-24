<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Type extends Eloquent implements UserInterface, RemindableInterface {

    protected $fillable=array('name');

    public  $rules = array(
        'name'=>'required',
    );


    public  $messages;

	use UserTrait, RemindableTrait;


	protected $table = 'types';


	protected $hidden = array('password', 'remember_token');

    public  function isValid(){
        $validaton = Validator::make($this->attributes,$this->rules);
        if($validaton->passes()){
            return true;
        }
        $this->messages=$validaton->messages();
        return false;
    }



}
