demoApp.config( function ($routeProvider,$locationProvider) {
    $routeProvider
        .when('/',
        {
            controller: 'SimpleController',
            templateUrl: 'view1.html'
        })
        .when('/view2',
        {
            controller: 'SimpleController',
            templateUrl: 'view1.html'
        })
        .otherwise({redirectTo: '/'});
    });
    demoApp.controller('SimpleController',function ($scope,$http){
    $http.post('project/view.php').success(function(data){
        $scope.friends = data;
    });;
    $scope.addNewFriend = function(add){
        var data = {
            fname:$scope.newFriend.fname,
            lname:$scope.newFriend.lname
        }
        $http.post("server/insert.php",data).success(function(data, status, headers, config){
            console.log("inserted Successfully");
        });
        $scope.friends.push(data);
        $scope.newFriend = {
            fname:"",
            lname:""
        };
    };   
});