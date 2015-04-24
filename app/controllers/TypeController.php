<?php

class TypeController extends \BaseController {
    protected $user;

     public  function  __construct(Type $user)
    {
        $this->user=$user;
    }


	public function index()
	{
		//
	}



	public function create()
	{
        return View::make('admin.type');
	}



	public function store()
	{
        $name=Input::get('name');
        $input=Input::all();



        if(!$this->user->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->messages);
        }

        $data=new Type;
        $data->name=$name;
        $data->save();
        return Redirect::route('adminPanel.index');

	}



	public function show($id)
	{
        $data=Type::Find($id);
        return View::make('admin.singletype')->withdata($data);
	}



	public function edit($id)
	{
		//
	}



	public function update($id)
	{
        $name=Input::get('name');
        $input=Input::all();
        if(!$this->user->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->messages);
        }

        $data=Type::Find($id);
        $data->name=$name;
        $data->save();

        return Redirect::route('adminPanel.index');
	}



	public function destroy($id)
	{
        $data=Type::find($id);
        $data->delete();
        return Redirect::route('adminPanel.index');
	}


}
