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

		Response::json(array('error' => 'false', 'projects' => $projects->toArray()), 200);

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

		Response::json(array('error' => 'false', 'project' => $project->toArray()), 200);
	}


	


}
