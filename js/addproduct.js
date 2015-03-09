$(document).ready(function(){



if($("#UserType").val()=="admin"){

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
	
			alert($('#category').val());
		
		});
	},
	 			
});
	
   }else{

      window.location.replace('../html/Error.php');

    }


    });