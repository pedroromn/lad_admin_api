<?php

class ApiProjectController extends \BaseController {

	public function index()
	{
        $projects = Project::all();

        return Response::json(array('projects' => $projects), 200);
	}

	public function show($id)
	{
        $project = Project::find($id);

        return Response::json(array('project' => $project), 200);
	}





}
