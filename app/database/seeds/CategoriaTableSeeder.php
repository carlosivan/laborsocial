<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		
		$categorias = array("Tecnologia","Apoyo Social","blue","yellow"); 

		foreach ($categorias as $categoria) {
			Categoria::create([
				'nombre'=>$categoria
			]);

		}//fin for
			
		
	}

}