<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ProjectAppSeeder');
        $this->command->info('Projects app seeds finished.');
	}

}

class ProjectAppSeeder extends Seeder{


	public function run(){

		DB::table('projects')->delete();
		DB::table('users')->delete();

		// Proyecto 1

		Project::create(array(

			'title' => 'CONTROL Z',
			'direction' => 'Eri Pedrozo y Jehisel Ramos',
			'description' => 'Cortometraje de animación',
			'format' => 'HD',
			'length' => '14:59',
			'state' => 'finalizado',
			'link' => 'http://vimeo.com/102566945',
			'image' => 'img/projects/proyecto_1.png',
			'slide1' => 'img/projects/ControlZ_1.png',
			'slide2' => 'img/projects/ControlZ_2.png',
			'slide3' => 'img/projects/ControlZ_3.png',
			'slide4' => 'img/projects/ControlZ_4.png',
			'synopsis' => 'Esta historia se desarrolla en una ciudad antigua al lado del mar en la que vive Adolfo, joven fotógrafo, serio y analítico enamorado de ese lugar y de Iris, una chica descomplicada y dulce que para su vida es como la brisa refrescante. Ambos son testigos de una marcha sin descanso, se puede percibir en el ambiente toda su impotencia y desesperanza que para un sujeto de guantes blancos es la excusa perfecta. Este sujeto, líder y autoridad, reparte a los ciudadanos una pastilla llamada Control Z para borrar sus malos recuerdos y brindarles una nueva vida, paz y seguridad a sus corazones dolidos... ¿Si pudieras borrar de tu mente los malos recuerdos, lo harías?'

		));


		// Proyecto 2
		
		Project::create(array(

			'title' => 'Ojos Alas Balas',
			'direction' => 'Mauricio Arrieta',
			'description' => 'Cortometraje de animación',
			'format' => 'HD',
			'length' => '7:05',
			'state' => 'finalizado',
			'link' => 'http://vimeo.com/52698662',
			'image' => 'img/projects/proyecto_2.png',
			'slide1' => 'img/projects/OAB_1.png',
			'slide2' => 'img/projects/OAB_2.png',
			'slide3' => 'img/projects/OAB_3.png',
			'slide4' => 'img/projects/OAB_4.png',
			'synopsis' => 'Una paloma ciega, un hombre sin caminos y un oportunista'

		));


		// Proyecto 3

		Project::create(array(

			'title' => 'Canville',
			'direction' => 'Luis Felipe Uribe Saltaren',
			'description' => 'Cortometraje de animación',
			'format' => 'HD',
			'length' => '9:20',
			'state' => 'En desarrollo',
			'link' => 'https://www.youtube.com/watch?v=zfnZxtXvKs8',
			'image' => 'img/projects/proyecto_3.png',
			'slide1' => 'img/projects/Canville_1.png',
			'slide2' => 'img/projects/Canville_2.png',
			'slide3' => 'img/projects/Canville_3.png',
			'slide4' => 'img/projects/Canville_4.png',
			'synopsis' => 'Bob, un beagle apasionado por los videojuegos, vive con sus padres en una pequeña villa habitada por otros perros llamada Canville. Obsesionado por el juego Instinto, Bob acaba por perder el control y busca la aniquilación de todos sus supuestos enemigos, incluyendo a sus padres. Pero Bob no es el único con un objetivo.'
		));

		



		// Proyecto 4

		// Project::create(array(

		// 	'title' => 'Todo es Posible',
		// 	'direction' => 'Mauricio García Matamoros',
		// 	'description' => 'Largometraje de animación',
		// 	'format' => 'HD',
		// 	'length' => '75:00',
		// 	'state' => 'En desarrollo',
		// 	'link' => 'http://',
		// 	'image' => 'img/projects/proyecto_3.jpg',
		// 	'synopsis' => 'Todo es posible, solo anímate y lo verás .....'
		// ));

		

		$this->command->info('The projects are ready!');






		// Creación del usuario administrador del sistema


		User::create(array(

			'name' => 'Administrador',
			'email' => 'lad@lad.com.co',
			'password' => Hash::make('lad123')
		));


		$this->command->info('The admin is ready!');




	}
	

}
