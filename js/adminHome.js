$(document).ready(function(){

	if($("#UserType").val()=="admin"){

		$.ajax({

		url:'../Controllers/listordersbyadmin.php',
		data:'',
		dataType:'json',
		success:function(data){

			 var obj = $.parseJSON(data);

			 
            	

 for (var i = data.length - 1; i >= 0; i--)
  {
  	$('.body').append('<table class="table table-striped Mytable"><thead><tr>'+
  		'<td>Order Data</td>'+
  		'<td>User</td>'+
  		'<td>Room</td><td>Ext</td><td>Status</td></tr></thead><tr><td>'
  		+data[i].timeStamp+'</td><td>'+data[i].UserId[0].name+'</td><td>'+data[i].RoomId[0].id+'</td><td>'+data[i].UserId[0].ext+
  		'</td><td id="?'+data[i].id+'"><button class="status" >'+data[i].status
  		+'</button></td></tr></table><div class="display" id="display'+data[i].id+'"></div>');
			

	for (var j = data[i].Itemes.length - 1; j >= 0; j--)
	{
			
					
		$('#display'+data[i].id).append("<div class='item'>"+
			"<img width='100px' height='100px' src='"+data[i].Itemes[j].ItemId[0].picture+"'><br>"+
			"<span class='Productname'>"+data[i].Itemes[j].ItemId[0].name+"</span>&nbsp;&nbsp;"+
			"<span class='ProductQuantity'>"+data[i].Itemes[j].quantity+"</span><br>"+
			"</div>");							


	}

	}

					$('.status').click(function(){
						var id=$(this).closest('td').attr('id');
						id=id.split('?');
						
						
					$.ajax({
						
						type:"GET",
						url:'../Controllers/changestatus.php?status='+$(this).text()+'&orderid='+id[1],
						data:'',
						dataType:'text',
						success:function(){
								 window.location.replace('../html/home.php');
						}
					});				

				});
		}
	});


	}else{
		window.location.replace('../html/Error.php');
	}

	

});



	