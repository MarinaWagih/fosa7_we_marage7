$(document).ready(function () 
{
	
   	$.post("../Controllers/returnallrooms.php",
   	
	   	function(data)
	   	{
	   		var obj = $.parseJSON(data);
	   		
	   		for(var i = 0 ; i < obj.length ; i++)
	   		{
	   			$("#RoomNo").append("<option value='"+obj[i]["id"]+"'>"+obj[i]['number']+"</option>");
	   		}
	   	}				
	   	
	   	
	   	);
   	
   	
});





