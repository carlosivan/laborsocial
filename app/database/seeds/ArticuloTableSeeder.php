<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticuloTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$max=4;
		$min=1;
		foreach(range(1, 50) as $index)
		{
			Articulo::create([
				'nombre'=>'titulo',
				'contenido'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aliquid, minima, totam, ut recusandae eum itaque eveniet quas esse nihil similique tempora provident sequi. Inventore quidem tempora sed cupiditate id.',
				'resumen'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, vel, tempora, ad dolorem voluptatum assumenda est laborum nesciunt ipsum voluptate beatae doloribus molestiae autem praesentium harum earum porro libero repellendus.',
				'idcategoria'=>1
			]);
		}
	}

}