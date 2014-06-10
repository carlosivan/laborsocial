angular.module('categoriaService', [])

	.factory('Categoria', function($http) {

		return {
			get : function() {

				return $http.get('/laborsocial/public/categoria');
			},
			borrar:function(id){
				return $http.get('/laborsocial/public/borrarcategoria?id='+id);
			},
			agregar:function(nombre){
							
				return $http.post('/laborsocial/public/agregarcategoria',nombre);
			}

		}

	});