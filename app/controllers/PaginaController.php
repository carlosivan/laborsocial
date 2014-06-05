<?php

class PaginaController extends BaseController {

// paginas de la vista
	public function index()
	{

	$articulos =Articulo::orderBy('id', 'desc')->paginate(6);
	return View::make('index',compact('articulos'));		
	}

	public function articulos($id){
		$tablaarticulos=Articulo::where("idcategoria","=",$id)->select("id","nombre","resumen")->orderBy('id', 'desc')->paginate(6);
		$tablafoto=Foto::all(); 
		$tablafotos = array();

		foreach ($tablaarticulos as $i) {
			$aux=0;
			foreach ( $tablafoto as $j) {
				if($i->id == $j->idarticulo){
					if($aux==0){
						array_push($tablafotos,array("id"=>$j->id,"idarticulo"=>$j->idarticulo,"ruta"=>$j->ruta) );
						$aux=1;
					}
					
				}
			}
		}
		//echo $tablafoto;
		//return $tablaarticulos;
		//return $tablafotos;
		return View::make('articulos')->with(compact('tablaarticulos'))->with(compact('tablafotos'));
		
		
	}
	public function articulo($id){
		$tablaarticulos = Articulo::where('id', '=', $id)->get();
		$tablafotos=Foto::where('idarticulo','=',$id)->get();
		return View::make('articulo')->with(compact('tablaarticulos'))->with(compact('tablafotos'));
		//return Response::json($tablas);
		
	}
// pagina oculta
	public function admin()
	{
	return View::make('admin');		
	}

	

}
