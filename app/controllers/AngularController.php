<?php

class AngularController extends BaseController {
// solo para angular
	
	public function categoria(){
		$tabla= Categoria::all();
		return Response::json($tabla);
	}
	public function articulos(){
		$tabla= Articulo::all();
		return Response::json($tabla);
	}

	public function articulo(){
		$id=Input::get('id');
		$tabla= Articulo::where('idcategoria', '=', $id)->get();
		return Response::json($tabla);
	}
	public function fotos(){
		$tabla= Foto::all();
		return Response::json($tabla);
	}


	public function agregarcategoria(){
		$datos = Input::all();

		$tabla = new Categoria;
		$tabla->nombre=$datos['nombre'];
		$tabla->save();
		$idcategoria = Categoria::max('id');
		mkdir("img/".$idcategoria);
		$tabla= Categoria::all();
		return Response::json($tabla);
		
	}
	public function agregararticulo(){
		$datos = Input::all();
		$tabla = new Articulo;
		$tabla->nombre=$datos['nombre'];
		$tabla->idcategoria=$datos['idcategoria'];
		$tabla->contenido=$datos['contenido'];
		$tabla->resumen=$datos['resumen'];
		$tabla->save();
		$idarticulo = Articulo::max('id');
		mkdir("img/".$datos['idcategoria']."/".$idarticulo);
		$tabla= Articulo::all();
		return Response::json($tabla);
	}
	public function agregarimagen(){
		$datos=Input::all();
		$imagenes=Input::file();

		$idarticulo=$datos['id'];
		$idcategoria=$datos['idcategoria'];

		foreach($imagenes as $imagen) {

			$numero_aleatorio = rand(1000000,10000000000); 
			$destino    = 'img/'.$idcategoria.'/'.$idarticulo; 
			$foto_nombre          = $numero_aleatorio.".".$imagen->getClientOriginalExtension();
			$imagen->move($destino,$foto_nombre);
			$tabla = new Foto;
			$tabla->idarticulo = $idarticulo;
			$tabla->ruta =$destino.'/'.$foto_nombre;
			$tabla->save();

		}

		$tabla= Foto::all();
		return Response::json($tabla);
	}

	// crud de borrar 
	public function borrarcategoria(){
		$idborrar=Input::get('id');
		Categoria::destroy($idborrar);
		rmdir("img/".$idborrar);
		$tabla = Categoria::all();
		return Response::json($tabla);
	}

	public function borrararticulo(){
		$idborrar=Input::get('id');
		$id=Input::get('idcate');
		Articulo::destroy($idborrar);

		rmdir("img/".$id."/".$idborrar);

		$tabla = Articulo::where('idcategoria', '=', $id)->get();
		return Response::json($tabla);
	}

	public function borrarfoto(){
		$idborrar=Input::get('id');
		$foto=Foto::find($idborrar);

		unlink($foto['ruta']);
		
		Foto::destroy($idborrar);
		$tabla = Foto::all();
		return Response::json($tabla);
	}

}

	 // 
//  if ($file) {



//      return Redirect::to('guardarimagen')
//      ->with('flash_notice', 'Listo Puede editar borrar la pagina web :)');   
//  }
//  else{
//      return Redirect::to('guardarimagen')->with('flash_error', 'Error :(');
//  } 

