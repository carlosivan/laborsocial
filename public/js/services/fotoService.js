angular.module('fotoService', [])

	.factory('Foto', function($http) {
		return {
		get : function() {
			return $http.get('/laborsocialv2/public/fotos');
			},
		borrar:function(id){
				return $http.get('/laborsocialv2/public/borrarfoto?id='+id);
			}
		}
});
