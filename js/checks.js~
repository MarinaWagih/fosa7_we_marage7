$(document).ready(function () 
{
	
   	$.post("../Controllers/returnallusers.php",
   	
	   	function(data)
	   	{
	   		var obj = $.parseJSON(data);
	   		
	   		for(var i = 0 ; i < obj.length ; i++)
	   		{
	   			$("#usr").append("<option value='"+obj[i]["id"]+"'>"+obj[i]['name']+"</option>");
	   		}
	   	}				
	   	
	   	
	   	);
	   	
	   	function connect()
	   	{
	   		var fr = $("#from").val();
	   		var to = $("#to").val();
	   		
	   		if(fr==null)
	   			fr="";
	   		if(to==null)
	   			to="";
	   		
	   		
				$.post("../Controllers/returnallorders.php",{"user":$("#usr").val() ,"from":fr , "to":to},
				
				function(data)
				{
					
					$("#mydiv").html(data);
				}
				);
	   		
    	}
	   	
	   	
	   	
    	
    	
	  $("#from").blur(connect);
	  $("#to").blur(connect);
	  
	  

    	
	
	   	
   	
   	
});





