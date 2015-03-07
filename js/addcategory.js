$(document).ready(function(){
	
	$('#submit').click(function(){

								$.ajax({

									url:'../Controllers/addcategory.php?name='+$('#name').val()+'&disc='+$('#disc').val(),
									data:'',
									dataType:'text',
									success:function(data){

										$(location).attr("href", '../html/addproduct.php');

									},

								});
	





	});


























});