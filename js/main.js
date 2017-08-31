$(document).ready(function(){
		//view stock details in stocks.php
        $("#viewButtonMain").click(function(){
			$("#main").css("display:block");
            $("#main").slideDown("slow",function(){
					buttonMainGrocery();//hide
				 	buttonMainOfficeSupplies();//hide
					buttonMainOfficeEquipment();//hide
			});
			
			$("#viewButtonMain").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewButtonMain").attr("onclick","buttonMainBack()");

			$.get("categoryMain.php",function(data)	{
				$("#categoryMainTable tbody").append(data);
					//DataTable for 'Main category'
					 $('#categoryMainTable').DataTable({
						destroy: true, //destroy DataTable for reinitialization
						colReorder: true,   
						dom: 'Bfrtip',
						buttons: ['excel', 'pdf','print'],
						responsive: true,
						keys: true
					 });
			});
        });
	    $("#viewButtonGrocery").click(function(){
			$("#grocery").css("display:none");
            $("#grocery").slideDown("slow",function(){
					buttonMainBack(); //hide	
				 	buttonMainOfficeSupplies();//hide
					buttonMainOfficeEquipment();//hide

				 	
				});
			$("#viewButtonGrocery").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewButtonGrocery").attr("onclick","buttonMainGrocery()");

			$.get("categoryGrocery.php",function(data)	{
				$("#categoryGroceryTable tbody").append(data);
				//DataTable for 'Grocery category'
				 $('#categoryGroceryTable').DataTable({
					destroy: true, //destroy DataTable for reinitialization
					colReorder: true,   
					dom: 'Bfrtip',
					buttons: ['excel', 'pdf','print'],
					responsive: true,
					keys: true

				 });
			});
				
        });
	    $("#viewButtonOfficeSupplies").click(function(){
			$("#officeSupplies").css("display:block");
            $("#officeSupplies").slideDown("slow",function(){
					buttonMainBack();	//hide
				 	buttonMainGrocery();	//hide
					buttonMainOfficeEquipment();//hide

				 	
				});
			$("#viewButtonOfficeSupplies").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewButtonOfficeSupplies").attr("onclick","buttonMainOfficeSupplies()");
			 
			$.get("categoryOfficeSupplies.php",function(data)	{
				$("#categoryOfficeSuppliesTable tbody").append(data);
				//DataTable for 'Grocery category'
				 $('#categoryOfficeSuppliesTable').DataTable({
					destroy: true, //destroy DataTable for reinitialization
					colReorder: true,   
					dom: 'Bfrtip',
					buttons: ['excel', 'pdf','print'],
					responsive: true,
					keys: true

				 });
			});
        });
	    $("#viewButtonOfficeEquipment").click(function(){
			$("#officeEquipment").css("display:block");
            $("#officeEquipment").slideDown("slow",function(){
					buttonMainBack();	//hide
				 	buttonMainGrocery();	//hide
					buttonMainOfficeSupplies();//hide

				 	
				});
			$("#viewButtonOfficeEquipment").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewButtonOfficeEquipment").attr("onclick","buttonMainOfficeEquipment()");
			
			$.get("categoryOfficeEquipment.php",function(data)	{
			  $("#categoryOfficeEquipmentTable tbody").append(data);
				//DataTable for 'Grocery category'
				 $('#categoryOfficeEquipmentTable').DataTable({
					destroy: true, //destroy DataTable for reinitialization
					colReorder: true,   
					dom: 'Bfrtip',
					buttons: ['excel', 'pdf','print'],
					responsive: true,
					keys: true

				 });
			});

        });
	

		//forms for adding new stocks
		$("#formMain").click(function(){
            $("#formMainDiv").slideDown("slow");  //unhide
			$("#formGroceryDiv").slideUp("slow"); //hide
            $("#formOfficeSuppliesDiv").slideUp("slow"); //hide
            $("#formOfficeEquipmentDiv").slideUp("slow");//hide

			
		});
		$("#formGrocery").click(function(){
            $("#formGroceryDiv").slideDown("slow"); //unhide
			$("#formMainDiv").slideUp("slow");  //hide
            $("#formOfficeSuppliesDiv").slideUp("slow");//hide
            $("#formOfficeEquipmentDiv").slideUp("slow");//hide
		});
		$("#formOfficeSupplies").click(function(){
            $("#formOfficeSuppliesDiv").slideDown("slow");//unhide
			$("#formMainDiv").slideUp("slow");  //hide
			$("#formGroceryDiv").slideUp("slow");//hide
            $("#formOfficeEquipmentDiv").slideUp("slow");//hide
			
		});
		$("#formOfficeEquipment").click(function(){
            $("#formOfficeEquipmentDiv").slideDown("slow");//unhide
			$("#formMainDiv").slideUp("slow");  //hide
			$("#formGroceryDiv").slideUp("slow");//hide
            $("#formOfficeSuppliesDiv").slideUp("slow");//hide
			
		});
	
		//forms for requesting item
		$("#formMainRequest").click(function(){
            $("#formMainDivRequest").slideDown("slow");  
			$("#formGroceryDivRequest").slideUp("slow");//hide
            $("#formOfficeSuppliesDivRequest").slideUp("slow");//hide
            $("#formOfficeEquipmentDivRequest").slideUp("slow");//hide

			
		});
		$("#formGroceryRequest").click(function(){
            $("#formGroceryDivRequest").slideDown("slow");
			$("#formMainDivRequest").slideUp("slow");  //hide
            $("#formOfficeSuppliesDivRequest").slideUp("slow");//hide
            $("#formOfficeEquipmentDivRequest").slideUp("slow");//hide
		});
		$("#formOfficeSuppliesRequest").click(function(){
            $("#formOfficeSuppliesDivRequest").slideDown("slow");
			$("#formMainDivRequest").slideUp("slow");  //hide
			$("#formGroceryDivRequest").slideUp("slow");//hide
            $("#formOfficeEquipmentDivRequest").slideUp("slow");//hide
			
		});
		$("#formOfficeEquipmentRequest").click(function(){
            $("#formOfficeEquipmentDivRequest").slideDown("slow");
			$("#formMainDivRequest").slideUp("slow");  //hide
			$("#formGroceryDivRequest").slideUp("slow");//hide
            $("#formOfficeSuppliesDivRequest").slideUp("slow");//hide
			
		});
		
		//view stocks details in index.php
        $("#viewStocksButtonMain").click(function(){
			$("#belowStocksMainDiv").css("display:block");
            $("#belowStocksMainDiv").slideDown("slow",function(){
					buttonStocksGroceryHide();//hide	
				 	buttonStocksOfficeSuppliesHide();//hide
				 	buttonStocksOfficeEquipmentHide();//hide

			});
			
			$("#viewStocksButtonMain").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewStocksButtonMain").attr("onclick","buttonStocksMainHide()");

			$.get("belowStocksMain.php",function(data)	{
				$("#belowStocksMainTable tbody").append(data);
			
					//DataTable for 'Main category'
					 $('#belowStocksMainTable').DataTable({
						destroy: true, //destroy DataTable for reinitialization
						colReorder: true,   
						responsive: true,
						keys: true
					 });
			});
        });
	    $("#viewStocksButtonGrocery").click(function(){
			$("#belowStocksGroceryDiv").css("display:block");
            $("#belowStocksGroceryDiv").slideDown("slow",function(){
					buttonStocksMainHide();	//hide
				 	buttonStocksOfficeSuppliesHide();//hide
				 	buttonStocksOfficeEquipmentHide();//hide

			});
			
			$("#viewStocksButtonGrocery").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewStocksButtonGrocery").attr("onclick","buttonStocksGroceryHide()");

			$.get("belowStocksGrocery.php",function(data)	{
				$("#belowStocksGroceryTable tbody").append(data);
					//DataTable for 'Main category'
					 $('#belowStocksGroceryTable').DataTable({
						destroy: true, //destroy DataTable for reinitialization
						colReorder: true,   
						responsive: true,
						keys: true
					 });
				
			});
        });
		$("#viewStocksButtonOfficeSupplies").click(function(){
			$("#belowStocksOfficeSuppliesDiv").css("display:block");
            $("#belowStocksOfficeSuppliesDiv").slideDown("slow",function(){
				 	buttonStocksMainHide();//hide
					buttonStocksGroceryHide();	//hide
				 	buttonStocksOfficeEquipmentHide();//hide

			});
			
			$("#viewStocksButtonOfficeSupplies").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewStocksButtonOfficeSupplies").attr("onclick","buttonStocksOfficeSuppliesHide()");

			$.get("belowStocksOfficeSupplies.php",function(data)	{
				$("#belowStocksOfficeSuppliesTable tbody").append(data);
					//DataTable for 'Main category'
					 $('#belowStocksOfficeSuppliesTable').DataTable({
						destroy: true, //destroy DataTable for reinitialization
						colReorder: true,   
						responsive: true,
						keys: true
					 });
			});
        });	
		$("#viewStocksButtonOfficeEquipment").click(function(){
			$("#belowStocksOfficeEquipmentDiv").css("display:block");
            $("#belowStocksOfficeEquipmentDiv").slideDown("slow",function(){	
				buttonStocksMainHide();//hide
				buttonStocksGroceryHide();	//hide
				buttonStocksOfficeSuppliesHide();//hide

			});
			
			$("#viewStocksButtonOfficeEquipment").html("<i class='fa fa-arrow-circle-up'></i> hide details");
			$("#viewStocksButtonOfficeEquipment").attr("onclick","buttonStocksOfficeEquipmentHide()");

			$.get("belowStocksOfficeEquipment.php",function(data)	{
				$("#belowStocksOfficeEquipmentTable tbody").append(data);
					//DataTable for 'Main category'
					 $('#belowStocksOfficeEquipmentTable').DataTable({
						destroy: true, //destroy DataTable for reinitialization
						colReorder: true,   
						responsive: true,
						keys: true
					 });
			});
        });
	


    });
	

	//javascript functions
function buttonMainBack(){
	document.getElementById("main").style.display = "none";
	document.getElementById("viewButtonMain").removeAttribute("onclick");
	document.getElementById("viewButtonMain").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";
}
function buttonMainGrocery(){
	document.getElementById("grocery").style.display = "none";
	document.getElementById("viewButtonGrocery").removeAttribute("onclick");
	document.getElementById("viewButtonGrocery").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";
}
function buttonMainOfficeSupplies(){
	document.getElementById("officeSupplies").style.display = "none";
	document.getElementById("viewButtonOfficeSupplies").removeAttribute("onclick");
	document.getElementById("viewButtonOfficeSupplies").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";
}
function buttonMainOfficeEquipment(){
		document.getElementById("officeEquipment").style.display = "none";
		document.getElementById("viewButtonOfficeEquipment").removeAttribute("onclick");
		document.getElementById("viewButtonOfficeEquipment").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";
	}

function buttonStocksMainHide(){
	document.getElementById("belowStocksMainDiv").style.display = "none";
	document.getElementById("viewStocksButtonMain").removeAttribute("onclick");
	document.getElementById("viewStocksButtonMain").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";

}
function buttonStocksGroceryHide(){
	document.getElementById("belowStocksGroceryDiv").style.display = "none";
	document.getElementById("viewStocksButtonGrocery").removeAttribute("onclick");
	document.getElementById("viewStocksButtonGrocery").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";

}
function buttonStocksOfficeSuppliesHide(){
	document.getElementById("belowStocksOfficeSuppliesDiv").style.display = "none";
	document.getElementById("viewStocksButtonOfficeSupplies").removeAttribute("onclick");
	document.getElementById("viewStocksButtonOfficeSupplies").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";

}
function buttonStocksOfficeEquipmentHide(){
	document.getElementById("belowStocksOfficeEquipmentDiv").style.display = "none";
	document.getElementById("viewStocksButtonOfficeEquipment").removeAttribute("onclick");
	document.getElementById("viewStocksButtonOfficeEquipment").innerHTML = "View Details <i class='fa fa-arrow-circle-down'></i>";

}


function selectItemChangeMain(a){
	var item = a.options[a.selectedIndex].value;
	
	var ajaxRequest;  // The variable that makes Ajax possible!
  
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }
  // Create a function that will receive data sent from the server
  ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState == 4){
		 var myArray = ajaxRequest.responseText.split("-");
		document.getElementById("displayItemStockMainAdd").innerHTML = myArray[0];
		document.getElementById("displayItemStockMainRequest").innerHTML = myArray[0];
		document.getElementById("itemPriceMain").value	 = myArray[1];

      	document.getElementById("displayItemStockMainRequest").innerHTML = myArray[0];
		 document.getElementById("idQuantityRequestMain").setAttribute("max",myArray[0]);

     }
  }

  ajaxRequest.open("POST", "displayItemStockMainRequest.php",true);
   ajaxRequest.send(item);

}
function selectItemChangeGrocery(a){
	var item = a.options[a.selectedIndex].value;
	
	var ajaxRequest;  // The variable that makes Ajax possible!
  
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }
  // Create a function that will receive data sent from the server
  ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState == 4){
		  var myArray = ajaxRequest.responseText.split("-");

		document.getElementById("displayItemStockGroceryAdd").innerHTML = myArray[0];
		document.getElementById("itemPriceGrocery").value = myArray[1];

		 
      	document.getElementById("displayItemStockGroceryRequest").innerHTML = myArray[0];
		  document.getElementById("idQuantityRequestGrocery").setAttribute("max",myArray[0]);
     }
  }

  ajaxRequest.open("POST", "displayItemStockGroceryRequest.php",true);
   ajaxRequest.send(item);

}
function selectItemChangeOfficeSupplies(a){
	var item = a.options[a.selectedIndex].value;
	
	var ajaxRequest;  // The variable that makes Ajax possible!
  
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }
  // Create a function that will receive data sent from the server
  ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState == 4){
		   var myArray = ajaxRequest.responseText.split("-");

		document.getElementById("displayItemStockOfficeSuppliesAdd").innerHTML = myArray[0];
		document.getElementById("itemPriceOfficeSupplies").value = myArray[1];
		 
      	document.getElementById("displayItemStockOfficeSuppliesRequest").innerHTML = myArray[0];
		 document.getElementById("idQuantityRequestOfficeSupplies").setAttribute("max",myArray[0]);
     }
  }

  ajaxRequest.open("POST", "displayItemStockOfficeSuppliesRequest.php",true);
   ajaxRequest.send(item);

}
function selectItemChangeOfficeEquipment(a){
	var item = a.options[a.selectedIndex].value;
	
	var ajaxRequest;  // The variable that makes Ajax possible!
  
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }
  // Create a function that will receive data sent from the server
  ajaxRequest.onreadystatechange = function(){
     if(ajaxRequest.readyState == 4){
		 var myArray = ajaxRequest.responseText.split("-");
		 	
		document.getElementById("displayItemStockOfficeEquipmentAdd").innerHTML =myArray[0];
		document.getElementById("itemPriceOfficeEquipment").value = myArray[1];
		 
      	document.getElementById("displayItemStockOfficeEquipmentRequest").innerHTML = myArray[0];
		  document.getElementById("idQuantityRequestOfficeEquipment").setAttribute("max",myArray[0]);
     }
  }

  ajaxRequest.open("POST", "displayItemStockOfficeEquipmentRequest.php",true);
   ajaxRequest.send(item);

}

function clearValuesIn(){
	document.getElementById("displayItemStockMainAdd").innerHTML = "";
	document.getElementById("displayItemStockGroceryAdd").innerHTML = "";
	document.getElementById("displayItemStockOfficeSuppliesAdd").innerHTML = "";
	document.getElementById("displayItemStockOfficeEquipmentAdd").innerHTML = "";
	document.getElementById("idSelectMainAdd").selectedIndex = 0;
	document.getElementById("idSelectGroceryAdd").selectedIndex = 0;
	document.getElementById("idSelectOfficeSuppliesAdd").selectedIndex = 0;
	document.getElementById("idSelectOfficeEquipmentAdd").selectedIndex = 0;
	document.getElementById("idQuantityNewStockMain").value = "";
	document.getElementById("idQuantityNewStockGrocery").value = "";
	document.getElementById("idQuantityNewStockOfficeSupplies").value = "";
	document.getElementById("idQuantityNewStockOfficeEquipment").value = "";
	document.getElementById("itemPriceMain").value = "";
	document.getElementById("itemPriceGrocery").value = "";
	document.getElementById("itemPriceOfficeSupplies").value = "";
	document.getElementById("itemPriceOfficeEquipment").value = "";


	
}
function clearValuesOut(){
	document.getElementById("displayItemStockMainRequest").innerHTML = "";
	document.getElementById("displayItemStockGroceryRequest").innerHTML = "";
	document.getElementById("displayItemStockOfficeSuppliesRequest").innerHTML = "";
	document.getElementById("displayItemStockOfficeEquipmentRequest").innerHTML = "";
	document.getElementById("idSelectMainRequest").selectedIndex = 0;
	document.getElementById("idSelectGroceryRequest").selectedIndex = 0;
	document.getElementById("idSelectOfficeSuppliesRequest").selectedIndex = 0;
	document.getElementById("idSelectOfficeEquipmentRequest").selectedIndex = 0;
	document.getElementById("idQuantityRequestMain").value = "";
	document.getElementById("idQuantityRequestGrocery").value = "";
	document.getElementById("idQuantityRequestOfficeSupplies").value = "";
	document.getElementById("idQuantityRequestOfficeEquipment").value = "";
	
	
}

function showDepartments(a){
	var id = a.options[a.selectedIndex].value; //department selected
	var count = document.getElementById("counter").value;
	var x = document.getElementById("departments").querySelectorAll("div");

	var i;
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	} 
	
	if(id=="all"){
	    var y;
		for (y = 0; y < x.length; y++) {
			x[y].style.display = "block";
		} 	
	}else{
		
		var b;
        
		for (b = 0; b <= count; b++) {
           
//			var tableId = document.getElementById(id+tableNum).setAttribute("style", "display:block");
			document.getElementsByName(id)[b].setAttribute("style", "display:block");
			
			var x = document.querySelectorAll("div[name="+id+"]"); 
			for(var t = 0; t<x.length;t++){
				x[t].style.display="block";
			}
			
			var x = document.querySelectorAll("div[name="+id+"] > div"); 
			for(var t = 0; t<x.length;t++){
				x[t].style.display="block";
			}
			var x = document.querySelectorAll("div[name="+id+"] > div > div"); 
			for(var t = 0; t<x.length;t++){
				x[t].style.display="block";
			}

	
		}
		
		
	}

	

}

$("#displayINhistory").click(function(){
	$("#displayINhistoryDiv").css("display:block");

		$("#displayOUThistoryDiv").slideUp("slow");

		$("#displayINhistoryDiv").slideDown("slow");
		$.get("displayINhistory.php",function(data)	{
			$("#displayINhistoryTable tbody").append(data);

				//DataTable for 'Main category'
				 $('#displayINhistoryTable').DataTable({
					destroy: true, //destroy DataTable for reinitialization
					colReorder: true,   
					responsive: true,
					keys: true
				 });
		});
});
$("#displayOUThistory").click(function(){

	 $("#displayINhistoryDiv").slideUp("slow");

	 $("#displayOUThistoryDiv").slideDown("slow");
		$.get("displayOUThistory.php",function(data){
			$("#displayOUThistoryTable tbody").append(data);

				//DataTable for 'Main category'
				 $('#displayOUThistoryTable').DataTable({
					destroy: true, //destroy DataTable for reinitialization
					colReorder: true,   
					responsive: true,
					keys: true
				 });
		});
});

//reset database
function enterPassword(){
    var key = prompt("ENTER PASSWORD");

    if (key === "admin") {
		alert("Data has been reset.");

    }else {
      alert("WRONG PASSWORD!");
    }
}