angular.module('inExample', ['ngRoute'])
     .controller('ExController',function($scope,$http, $location) {
		
     	$scope.ownApp =40;
     	$scope.join = 1;

		$http.get('../recruitment/parameter').
		 	success(function(data, status, headers, config) {
				//$scope.departments = data;	
				$scope.ownApp = data.ownApp;
				$scope.join = data.join;
				console.log(data);
				//$scope.departments
				//$scope.depSelected = $scope.depOptions[0]; 
		 	}).
		  	error(function(data, status, headers, config) {
		    	console.log("error get recruitment data");
		  	});
		

     
       	
});