$(document).ready(function((){

	$.ajax({

		url:'../Controllers/listordersbyadmin.php',
		data:'',
		dataType:'json',
		success:function($data){

			var obj = $.parseJSON(data);

            
     //             $(data).each(function(index , record) {

       			


					// });

		}




	});











};)