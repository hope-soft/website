<?php

class HomeController extends \BaseController {

  protected $user;
  public  function  __construct(Admin $user)
  {
    $this->user=$user;
  }



  public function index()
  {
    $data=Project::all();
    $types=Type::all();

    $image_path="/uploads/";

    return View::make('home')->withdata($data)->withtypes($types)->withpath($image_path);
  }



  public function create()

  {
    if(Auth::check()){
      return Redirect::route('adminPanel.index');
    }
    return View::make('login');
  }



  public function store()
  {
    $uname=Input::get('uname');
    $password=Input::get('password');

    $input=Input::all();
    if(!$this->user->fill($input)->isValid()){
      return Redirect::back()->withInput()->withErrors($this->user->messages);
    }

    if (Auth::attempt(array('uname' => $uname, 'password' => $password)))
    {

      return Redirect::route('adminPanel.index');
    }else{

      return Redirect::back()->withInput();
    }
  }



  public function show($id)
  {
		//
  }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}



	public function update($id)
	{

	}



	public function destroy()
	{
    Auth::logout();
    return Redirect::to('admin');

  }


}
