<?php

class AdminController extends \BaseController {

	public function index()
	{
        $data=Project::all();
        $types=Type::all();
		return View::make('admin.admin')->withdata($data)->withtypes($types);

	}



	public function create()
	{

	}



	public function store()
	{
        $input=array(
            'password'=>Input::get('password'),
            'rpassword'=>Input::get('rpassword'),
        );
        $rules = array(
            'password'=>'required',
            'rpassword'=>'required|same:password',
        );
        $validation = Validator::make($input,$rules);
        if($validation->fails()){
            $messages=$validation->messages();
            return Redirect::back()->withInput()->withErrors($messages);
        }
        $password = Admin::find(1);

        $password->password = Hash::make(Input::get('password'));

        $password->save();


        return Redirect::to('logout');


    }




	public function show($id)
	{
		//
	}



	public function edit($id)
	{
		//
	}



	public function update()
	{
		return View::make('admin.password');
	}



	public function destroy($id)
	{
		//
	}


}
