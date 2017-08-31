//////ADD STOCK
ourAngularJsApp.controller("mainAddAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockMainAdd").innerText);
		$scope.newStock = oldQuantity + $scope.newQuantity; //display the result to the variable newStock(index.php:398)
	}
}); 
ourAngularJsApp.controller("groceryAddAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockGroceryAdd").innerText);
		$scope.newStock = oldQuantity + $scope.newQuantity;//display the result to the variable newStock(index.php:469)
	}
}); 
ourAngularJsApp.controller("officeSuppliesAddAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockOfficeSuppliesAdd").innerText);
		$scope.newStock = oldQuantity + $scope.newQuantity;//display the result to the variable newStock(index.php:537)
	}
}); 
ourAngularJsApp.controller("officeEquipmentAddAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockOfficeEquipmentAdd").innerText);
		$scope.newStock = oldQuantity + $scope.newQuantity;//display the result to the variable newStock(index.php:607)
	}
}); 


////////REQUEST ITEM
ourAngularJsApp.controller("mainRequestAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockMainRequest").innerText);
		$scope.newStock = oldQuantity - $scope.newQuantity;//display the result to the variable newStock(index.php:699)
	}
}); 
ourAngularJsApp.controller("groceryRequestAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockGroceryRequest").innerText);
		$scope.newStock = oldQuantity - $scope.newQuantity;//display the result to the variable newStock(index.php:772)
	}
}); 
ourAngularJsApp.controller("officeSuppliesRequestAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockOfficeSuppliesRequest").innerText);
		$scope.newStock = oldQuantity - $scope.newQuantity;//display the result to the variable newStock(index.php:847)
	}
}); 
ourAngularJsApp.controller("officeEquipmentRequestAppCtrl", function($scope) {
	$scope.myFunction = function(){
		var oldQuantity = parseInt(document.getElementById("displayItemStockOfficeEquipmentRequest").innerText);
		$scope.newStock = oldQuantity - $scope.newQuantity;//display the result to the variable newStock(index.php:919)
	}
});