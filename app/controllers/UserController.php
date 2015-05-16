<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $user;
	public function __construct( admin $user)
	{
		$this->user=$user;
	}

	public function index()
	{
		return View::make('user.new');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$UserModel= new UserModel();
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$UserModel = new UserModel();
		$UserModel->fname=Input::get('fname');
		$UserModel->lname=Input::get('lname');
		$UserModel->email=Input::get('email2');
		$UserModel->pnumber=Input::get('pnumber');
		$UserModel->password=Hash::make(Input::get('password2'));
		$UserModel->save();
		return Redirect::route('login');
	}
	 public function check()
	{
		$userData = array(
			'email'=>Input::get('email'),
			'password'=>Input::get('password')
			);	
		if(Auth::attempt($userData)){
			return Redirect::route('profile');
		}
		else{
			return Redirect::route('login');
			echo "Please enter valid email or password";
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$users=UserModel::all();
		return View::make('user.profile', array('users'=>$users));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$users = UserModel::find($id);
		return View::make('user.edit', ['users'=>$users]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{

		$id=Input::get('id');
		$UserModel = UserModel::find($id);
		$UserModel->fname=Input::get('fname');
		$UserModel->lname=Input::get('lname');
		$UserModel->email=Input::get('email');
		$UserModel->pnumber=Input::get('pnumber');
		$UserModel->password=Hash::make(Input::get('password'));
		$UserModel->update();
		return Redirect::route('profile');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::table('users')->where('id','=',$id)->delete();
		return Redirect::route('profile');
	}
    public function login()
    {
		return View::make('user.login');
    }
 
}
