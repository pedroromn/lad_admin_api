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
		//$image = Input::file('image');

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

			if(Input::file('image') != null){
				// Si viene una imagen

					if(Input::file('image')->isValid()){

						$project = new Project();

						$project->title = Input::get('title');
						$project->direction = Input::get('direction');
						$project->description = Input::get('description');
						$project->format = Input::get('format');
						$project->length = Input::get('length');
						$project->state = Input::get('state');
						$project->link = Input::get('link');
						$project->synopsis = Input::get('synopsis');
						$project->save();

						$imagenes = array();

						if(Input::file('slide1') != null){
							array_push($imagenes, Input::file('slide1'));
						}

						if(Input::file('slide2') != null){
							array_push($imagenes, Input::file('slide2'));
						}

						if(Input::file('slide3') != null){
							array_push($imagenes, Input::file('slide3'));
						}

						if(Input::file('slide4') != null){
							array_push($imagenes, Input::file('slide4'));
						}

						if(empty($imagenes)){

							return Redirect::to('project/create')
								->withInput()
								->with('error_msg', 'Al menos una imagen para el slide de la aplicación debe ser agregada');

						}

						$destinationPath = public_path().'/img/projects/';
						$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension

						$realName = 'proyecto_'.$project->id.'.'.$extension;


						$project = Project::find($project->id);

						for ($i=0; $i < count($imagenes); $i++) { 
							# code...

							$ext = $imagenes[$i]->getClientOriginalExtension();
							$name = $project->id.'_'.($i+1).'.'.$ext;

							if($i+1 == 1){
								$project->slide1 = 'img/projects/'.$name;
							}

							if($i+1 == 2){
								$project->slide2 = 'img/projects/'.$name;
							}

							if($i+1 == 3){
								$project->slide3 = 'img/projects/'.$name;
							}

							if($i+1 == 4){
								$project->slide4 = 'img/projects/'.$name;
							}

							$imagenes[$i]->move($destinationPath, $name);

						}

						$project->image = 'img/projects/'.$realName;
						Input::file('image')->move($destinationPath, $realName);

						$project->update();

						
						// 
						// //$name = $image->getClientOriginalName(); // getting image name
						// $realName = 'proyecto_'.$project->id.'.jpg';

						// $project = Project::find($project->id);
						// $project->image = 'img/projects/'.$realName;
						// $project->update();

						// Input::file('image')->move($destinationPath, $realName);

						return Redirect::to('project')->with('msg', 'Nuevo proyecto registrado satisfactoriamente!!');


					}else{

						return Redirect::to('project/create')
								->withInput()
								->with('error_msg', 'Archivo no válido');

					}

			}else{

				// No viene imagen
				return Redirect::to('project/create')
								->withInput()
								->with('error_msg', 'Procure establecer al menos imagen de portada para el nuevo proyecto ');
				
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

        if(!empty($project)){

        	$user = Auth::user();
        	return View::make('project.edit', array('project' => $project,
                                                   'user'=> $user));
        }else{

        	return Redirect::to('project')
						->with('error_msg', 'Proyecto no existente');

        }
        
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

			$destinationPath = public_path().'/img/projects/';

			$project = Project::find($id);

			if(Input::file('image') != null){

				if($project->image != null){
					File::delete(public_path().'/'.$project->image);
				}

				$extension = Input::file('image')->getClientOriginalExtension();
				$name_image = 'proyecto_'.$project->id.'.'.$extension;
				$project->image = 'img/projects/'.$name_image;

				Input::file('image')->move($destinationPath, $name_image);
			}

			if(Input::file('slide1') != null){

				if($project->slide1 != null){
					File::delete(public_path().'/'.$project->slide1);
				}

				$extension = Input::file('slide1')->getClientOriginalExtension();
				$name = $project->id.'_1'.'.'.$extension;
				$project->slide1 = 'img/projects/'.$name;

				Input::file('slide1')->move($destinationPath, $name);

			}

			if(Input::file('slide2') != null){

				if($project->slide2 != null){
					File::delete(public_path().'/'.$project->slide2);
				}

				$extension = Input::file('slide2')->getClientOriginalExtension();
				$name = $project->id.'_2'.'.'.$extension;
				$project->slide2 = 'img/projects/'.$name;

				Input::file('slide2')->move($destinationPath, $name);

			}

			if(Input::file('slide3') != null){

				if($project->slide3 != null){
					File::delete(public_path().'/'.$project->slide3);
				}

				$extension = Input::file('slide3')->getClientOriginalExtension();
				$name = $project->id.'_3'.'.'.$extension;
				$project->slide3 = 'img/projects/'.$name;

				Input::file('slide3')->move($destinationPath, $name);

			}

			if(Input::file('slide4') != null){

				if($project->slide4 != null){
					File::delete(public_path().'/'.$project->slide4);
				}

				$extension = Input::file('slide4')->getClientOriginalExtension();
				$name = $project->id.'_4'.'.'.$extension;
				$project->slide4 = 'img/projects/'.$name;

				Input::file('slide4')->move($destinationPath, $name);

			}

			$project->title = Input::get('title');
            $project->direction = Input::get('direction');
            $project->description = Input::get('description');
            $project->format = Input::get('format');
            $project->length = Input::get('length');
            $project->state = Input::get('state');
            $project->link = Input::get('link');
            $project->synopsis = Input::get('synopsis');

            $project->update();

            return Redirect::to('project')->with('msg', 'Proyecto modificado satisfactoriamente !!');

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

        if($project->image != null){
        	File::delete(public_path().'/'.$project->image);
        }

        if($project->slide1 != null){
        	File::delete(public_path().'/'.$project->slide1);
        }

        if($project->slide2 != null){
        	File::delete(public_path().'/'.$project->slide2);
        }

        if($project->slide3 != null){
        	File::delete(public_path().'/'.$project->slide3);
        }

        if($project->slide4 != null){
        	File::delete(public_path().'/'.$project->slide4);
        }
        

        $project->delete();

        return Redirect::to('project')->with('msg', 'Proyecto borrado satisfactoriamente');
	}


}
