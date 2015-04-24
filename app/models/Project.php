<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Project extends Eloquent implements UserInterface, RemindableInterface {

    protected $fillable=array('title','text','image','type_id');

    public  $rules = array(
        'title'=>'required',
        'text'=>'required',
        'image'=>'required',

    );


    public  $messages;

	use UserTrait, RemindableTrait;


	protected $table = 'projects';


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
