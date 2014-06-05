angular.module('categoriaService', [])

	.factory('Categoria', function($http) {

		return {
			get : function() {

				return $http.get('/laborsocialv2/public/categoria');
			},
			borrar:function(id){
				return $http.get('/laborsocialv2/public/borrarcategoria?id='+id);
			},
			agregar:function(nombre){
							
				return $http.post('/laborsocialv2/public/agregarcategoria',nombre);
			}

		}

	});