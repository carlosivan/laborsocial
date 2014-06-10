angular.module('articuloService', [])

	.factory('Articulo', function($http) {

		return {
			get : function() {

				return $http.get('/laborsocial/public/aarticulos');
			},
			getid:function(id){
				
				return $http.get('/laborsocial/public/aarticulo?id='+id);
			},
			borrar:function(id,idcategoria){
				return $http.get('/laborsocial/public/borrararticulo?id='+id+'&idcate='+idcategoria);
			},
			agregar:function(datos){
				
				return $http.post('/laborsocial/public/agregararticulo',datos);
			}


			// save a comment (pass in comment data)
			// save : function(commentData) {
			// 	return $http({
			// 		method: 'POST',
			// 		url: '/api/comments',
			// 		headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
			// 		data: $.param(commentData)
			// 	});
			// },

			// // destroy a comment
			// destroy : function(id) {
			// 	return $http.delete('/api/comments/' + id);
			// }
		}

	});
