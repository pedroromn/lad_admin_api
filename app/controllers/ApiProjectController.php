<?php

class ApiProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();

		Response::json(array('projects' => $projects->toArray()));

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

		Response::json(array('project' => $project->toArray()));
	}


	


}
