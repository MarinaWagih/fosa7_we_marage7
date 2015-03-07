$(document).ready(function(){


	
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
			
			alert($('#category').val());
		
			$.ajax({

			url:'../Controllers/submitproduct.php?name='+$('#name').val()+'&price='+$('#price').val()+'&category='+$('#category').val()+'&pic='+$('#pic').val(),
			data:'',
			dataType:'text',
			success:function(sata){

				window.location.replace('../html/products.php');
			}




		});		



		});






	 			},
	 			//window.location.replace("../html/products.php");

		});
	
		
		
		







});