<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $projects = Project::all();
        $user = Auth::user();
		return View::make('project.index', array('projects' => $projects, 'user' => $user));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = Auth::user();
		return View::make('project.create', array('user' => $user));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $project = Project::find($id);
        $user = Auth::user();
        return View::make('project.show', array('user' => $user, 'project' => $project));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $project = Project::find($id);
        $user = Auth::user();
        return View::make('project.edit', array('user' => $user, 'project' => $project));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $project = Project::find($id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDestroy()
	{
		$id = Input::get('project_id');
        $project = Project::find($id);
        $project->delete();

        return Redirect::to('project')->with('msg', 'Proyecto eliminado de la base de datos correctamente');
	}


}
