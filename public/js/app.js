
var articulosApp = angular.module('articulosapp', ['mainCtrl','articuloService','categoriaService','fotoService','angularFileUpload'],function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
