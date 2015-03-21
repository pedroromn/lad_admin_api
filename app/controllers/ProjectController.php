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
		$image = Input::file('image');

		$rules = array(
			'title' => 'required',
			'direction' => 'required',
			'description' => 'required',
			'format' => 'required',
			'state' => 'required',
			'synopsis' => 'required'
		);


		$data = array(

			'title' => Input::get('title'),
			'direction' => Input::get('direction'),
			'description' => Input::get('description'),
			'format' => Input::get('format'),
			'state' => Input::get('state'),
			'synopsis' => Input::get('synopsis')
		);

		$validator = Validator::make($data, $rules);

		if($validator->fails()){

			return Redirect::to('project/create')
						->with('error_msg', 'Datos erróneos!!');
		}else{

			if($image->isValid()){


				$title = Input::get('title');
				$direction = Input::get('direction');
				$description = Input::get('description');
				$format = Input::get('format');
				$length = Input::get('length');
				$state = Input::get('state');
				$link = Input::get('link');
				$synopsis = Input::get('synopsis');
				
				// HAY QUE CREAR EL CAMPO image y agregarlo a partir de la ruta con el nombre de la imagen generado

				// El nombre de la imagen será el mismo título del proyecto, sin espacios en blanco y en minúscula.


				$destinationPath = public_path().'/img/projects/'; // destino de la imagen

				$extension = $image->getClientOriginalExtension(); // getting image extension

				//$name = $image->getClientOriginalName(); // getting image name

				//$name = explode('.', $name);

				//$prueba = "Ojos";

				$project = new Project();

				$project->title = $title;
				$project->direction = $direction;
				$project->description = $description;
				$project->format = $format;
				$project->length = $length;
				$project->state = $state;
				$project->link = $link;
				$project->synopsis = $synopsis;
				$project->save();


				$realName = 'proyecto_'.$project->id.'.'.$extension;

				$project = Project::find($project->id);

				$project->image = 'img/projects/'.$realName;
				$project->path = $destinationPath.$realName;
				$project->update();

				Input::file('image')->move($destinationPath, $realName);

				return Redirect::to('project')->with('msg', 'Nuevo proyecto registrado satisfactoriamente!!');

			}else{

				return Redirect::to('project/create')
						->with('error_msg', 'Archivo no válido');

			}

		}

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


        return View::make('project.edit', array('project' => $project,
                                                   'user'=> $user, 'file' => Input::file(public_path().'/img/projects/'.'proyecto_'.$project->id)));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$rules = array(
			'title' => 'required',
			'direction' => 'required',
			'description' => 'required',
			'format' => 'required',
			'state' => 'required',
			'synopsis' => 'required'
		);


		$data = array(

			'title' => Input::get('title'),
			'direction' => Input::get('direction'),
			'description' => Input::get('description'),
			'format' => Input::get('format'),
			'state' => Input::get('state'),
			'synopsis' => Input::get('synopsis')
		);

		//print_r($data);

		$validator = Validator::make($data, $rules);

		if($validator->fails()){

			return Redirect::to('project/'.$id.'/edit')
						->with('error_msg', 'Datos erróneos!!');
		}else{


			if(Input::file('image') != null){

				if(Input::file('image')->isValid()){

					$image = Input::file('image');

					//echo "ok";


					$destinationPath = public_path().'/img/projects/'; // destino de la imagen
					$extension = $image->getClientOriginalExtension(); // getting image extension

					$title = Input::get('title');
					$direction = Input::get('direction');
					$description = Input::get('description');
					$format = Input::get('format');
					$length = Input::get('length');
					$state = Input::get('state');
					$link = Input::get('link');
					$synopsis = Input::get('synopsis');

					
					$project = Project::find($id);

					$project->title = $title;
					$project->direction = $direction;
					$project->description = $description;
					$project->format = $format;
					$project->length = $length;
					$project->state = $state;
					$project->link = $link;
					$project->synopsis = $synopsis;

					$realName = 'proyecto_'.$project->id.'.'.$extension;

					$project->image = 'img/projects/'.$realName;
					$project->path = $destinationPath.$realName;

					File::delete($project->path);
					Input::file('image')->move($destinationPath, $realName);

					
					$project->update();

					

					return Redirect::to('project')->with('msg', 'Proyecto modificado satisfactoriamente !!');

				}else{

					return Redirect::to('project/'.$id.'/edit')
							->with('error_msg', 'Archivo no válido');

				}

			}else{

				//echo "NOT";

					$title = Input::get('title');
					$direction = Input::get('direction');
					$description = Input::get('description');
					$format = Input::get('format');
					$length = Input::get('length');
					$state = Input::get('state');
					$link = Input::get('link');
					$synopsis = Input::get('synopsis');

					
					$project = Project::find($id);
					$project->title = $title;
					$project->direction = $direction;
					$project->description = $description;
					$project->format = $format;
					$project->length = $length;
					$project->state = $state;
					$project->link = $link;
					$project->synopsis = $synopsis;

					$project->update();

					return Redirect::to('project')->with('msg', 'Proyecto modificado satisfactoriamente !!');

			}

		}

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

        File::delete($project->path);

        $project->delete();

        return Redirect::to('project')->with('msg', 'Proyecto eliminado satisfactoriamente');
	}


}
