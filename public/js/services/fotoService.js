angular.module('fotoService', [])

	.factory('Foto', function($http) {
		return {
		get : function() {
			return $http.get('/laborsocial/public/fotos');
			},
		borrar:function(id){
				return $http.get('/laborsocial/public/borrarfoto?id='+id);
			}
		}
});
