$(document).ready(function(){

	$.ajax({

		url:'../Controllers/listordersbyadmin.php',
		data:'',
		dataType:'json',
		success:function(data){

			 var obj = $.parseJSON(data);

			 
            	

 for (var i = data.length - 1; i >= 0; i--)
  {
  	$('.body').append('<table width="700px"  border="1"><tr><th>Order Data</th><th>User</th><th>Room</th><th>Ext</th><th>Status</th></tr><tr><td>'
  		+data[i].timeStamp+'</td><td>'+data[i].UserId[0].name+'</td><td>'+data[i].RoomId[0].id+'</td><td>'+data[i].UserId[0].ext+
  		'</td><td id="?'+data[i].id+'"><button class="status" >'+data[i].status+'</button></td></tr></table><div class="display" id="'+data[i].id+'"></div>');
			

	for (var j = data[i].Itemes.length - 1; j >= 0; j--) {
			
					
					$('#'+data[i].id).append("<center><div><img width='100px' height='100px' src='"+data[i].Itemes[j].ItemId[0].picture+"'></div></center>");							


		};

	};

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

	



});