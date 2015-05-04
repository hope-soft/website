<?php

class ProjectController extends \BaseController {
    protected $user;

    public $path;

    public  function  __construct(Project $user)
    {
        $this->user=$user;
        $this->path='uploads/';
    }



    public function index()
	{

	}



	public function create()
	{
        $data = Type::lists('name', 'id');
        return View::make('admin.project')->withdata($data);
	}



	public function store()
	{
        $title=Input::get('title');
        $text=Input::get('text');
        $image=Input::file('image');
        $type=Input::get('type');

        $input=Input::all();



        if(!$this->user->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->messages);
        }

        $name= str_replace(" ","_",$image->getClientOriginalName());
        $image->move($this->path,$name );

        $data=new Project;
        $data->image=$name;
        $data->title=$title;
        $data->text=$text;
        $data->type_id=$type;
        $data->save();


        return Redirect::route('adminPanel.index');




	}



	public function show($id)
	{
        $data=Project::Find($id);
        $type=Type::lists('name', 'id');
        return View::make('admin.singleproject')->withdata($data)->withtype($type);
	}



	public function edit($id)
	{
		//
	}


	public function update($id)
	{
        $title=Input::get('title');
        $text=Input::get('text');
        $image=Input::file('image');
        $type=Input::get('type');
        $input=Input::all();
        if(!$this->user->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->messages);
        }

        $name=$image->getClientOriginalName();
        $image->move($this->path,$name );

        $data=Project::Find($id);
        $data->image=$name;
        $data->title=$title;
        $data->text=$text;
        $data->type_id=$type;
        $data->save();

        return Redirect::route('adminPanel.index');
	}



	public function destroy($id)
	{
        $data=Project::Find($id);
        $data->delete();
        return Redirect::route('adminPanel.index');

	}


}
