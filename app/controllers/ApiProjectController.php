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

    public function images($id){

        $project = Project::find($id);

        $images = array();

        if($project->slide1 != null){
            array_push($images, $project->slide1);
        }

        if($project->slide2 != null){
            array_push($images, $project->slide2);
        }

        if($project->slide3 != null){
            array_push($images, $project->slide3);
        }

        if($project->slide4 != null){
            array_push($images, $project->slide4);
        }
    

        return Response::json(array('images' => $images), 200);

    }





}
