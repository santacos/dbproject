angular.module('inputExample', ['ngRoute'])
     .controller('ExampleController',function($scope,$http, $location) {
     	$scope.depOptions = [];
     	$scope.departments =[];
     	$scope.act_id = 1;
     	$scope.showWarning = false;
       	$scope.count = 0;
       	$scope.array =[];

     	

		$http.get('../recruitment/allrec?id='+$scope.act_id).
		 	success(function(data, status, headers, config) {
				//$scope.departments = data;	
				$scope.count = data.length;
				//$scope.departments
				//$scope.depSelected = $scope.depOptions[0]; 
		 	}).
		  	error(function(data, status, headers, config) {
		    	console.log("error get recruitment data");
		  	});

		$http.get('../recruitment/alloption?id='+$scope.act_id).
		 	success(function(data, status, headers, config) {
				$scope.depOptions = data;
		 	}).
		  	error(function(data, status, headers, config) {
		    	console.log("error get department data");
		  	});

		

		$scope.getDetail = function(){
			$scope.showWarning = false;
			$scope.detailSelected = $scope.depSelected.default_detail;
		};

		$scope.addDepart = function(){
			if(!isFormError()){
				$scope.showWarning = false;
				$scope.depSelected.detail = $scope.detailSelected;
				$scope.depSelected.min_num = $scope.min_num;
				$scope.depSelected.max_num = $scope.max_num;
				$scope.departments.push($scope.depSelected);
				$scope.depOptions.splice($scope.depOptions.indexOf($scope.depSelected), 1);
				
				clearform();
				$scope.count++;
			}
		};

		$scope.editDepart = function(item){
			var i =$scope.departments.indexOf(item);
			
			
			$scope.depOptions.push($scope.departments[i]);
			
			console.log($scope.departments[i]);

			console.log($scope.departments[i][1]);


			// $scope.departments.push($scope.depSelected);
			// $scope.depOptions.splice($scope.depOptions.indexOf($scope.depSelected), 1);
			$scope.depSelected = $scope.departments[i];
			$scope.depSelected.detail = $scope.departments[i][1];
			$scope.depSelected.min_num = $scope.departments[i][2];
			$scope.depSelected.max_num = $scope.departments[i][3];

			$scope.departments.splice(i, 1);
		}

		function isFormError(){
			if($scope.detailSelected==null||$scope.depSelected==null||$scope.min_num==null||$scope.max_num==null){
				$scope.showWarning = true;
				$scope.text = '';
				
				if($scope.depSelected==null) $scope.text = $scope.text + 'Department ';
				if($scope.detailSelected==null) $scope.text =$scope.text +  'Detail ';
				if($scope.min_num==null)$scope.text =$scope.text +  'min_num ';
				if($scope.max_num==null)$scope.text =$scope.text +  'max_num ';
 				$scope.text = $scope.text + ' require';
				return true;
			}
			else if($scope.max_num<$scope.min_num){
				$scope.showWarning = true;
				$scope.text = 'Error min > max';

				return true;
			}
			return false;
		}

		function clearform(){
				$scope.depSelected=null;
				$scope.detailSelected=null;
				$scope.min_num = null;
				$scope.max_num = null;
		}

		$scope.removefromdepart = function(item){
			$scope.departments.splice($scope.departments.indexOf(item), 1);
			$scope.depOptions.push(item);
			$scope.count--;
			console.log('hey');
		}

		$scope.confirm = function(){
			$scope.item =null;
			$scope.array =[];
			$scope.size = $scope.departments.length;
			for(var i=0;i<$scope.size;i++){
				$scope.array.push({'dep_id':$scope.departments[i].dep_id,'detail':$scope.departments[i].detail,'name':$scope.departments[i].name,'min_num':$scope.departments[i].min_num,'max_num':$scope.departments[i].max_num});
			}
			$http.post('../recruitment/recruit', {'array':$scope.array,'size':$scope.size,'act_id':$scope.act_id}).
			  success(function(data, status, headers, config) {
			    // this callback will be called asynchronously
			    // when the response is available
			    console.log(data.msg);
			    alert(data.msg);
			    window.location.href = '../home';
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    console.log("error post");
			  });
		};

     
       	
});