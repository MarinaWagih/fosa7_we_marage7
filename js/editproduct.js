$(document).ready(function(){

					//////////////GET paramters from the link /////////////////


	var parameter = window.location.search.replace( "?", "" ); // will return the GET parameter 
	var values = parameter.split("=");
	 // will return and array as ["name", "sample"] 
	 if(values[1]!==null){
	 	//alert('good');
	 					
	 		//////////////////////////send id to edit///////////////////////////////

	 	$.ajax({
	 			url:'../Controllers/edit.php?productid='+values[1]+'',
	 			
	 			data:'',
	 			dataType:'text',
	 			success: function(data){

            		var arr = data.split(':');
            		$('#name').val(arr[1]);
	 				
	 				$('#price').val(arr[2]);		




	 				},


	 	});


	 }
	
 						/////////////////// drop box Contents /////////////////
		
		$.ajax({
			url:'../Controllers/myCat.php',
			data:'',
	 			dataType:'text',
	 			success: function(cat){

	 				var arr = cat.split(':');
            		//alert(arr);
            		for (var i = arr.length - 1; i >= 0; i--) {
            	
            				$('#category').append('<option>'+arr[i]+'</option>');
            			};	



            			////////////////////  submit product ////////
		
		$('#submit').click(function(){

			// $mydata=$('#name').val()+':'+$('#price').val()+":"+$('#category').val()+':'+$('#pic').val();
			
			alert(arr[0]);
		
			$.ajax({

			url:'../Controllers/updateproduct.php?name='+$('#name').val()+'&price='+$('#price').val()+'&category='+$('#category').val()+'&pic='+$('#pic').val()+'&id='+values[1],
			data:'',
			dataType:'text',
			success:function(sata){

				window.location.replace('../html/products.php');
			}




		});		



		});






	 			},
	 			

		});
	
		
		
		







});