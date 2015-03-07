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
	   	
	  $("#from").blur(function(){
   		if($('#from').val()!="")
   		{
		    $.post("../Controllers/returnallorders.php",{"user":$("#usr").val() ,"from":$(this).val() , "to":$("#to").val()},
		    
		    function(data)
		    {
		    	
		    	$("#mydiv").html(data);
		    }
		    );
   		}
    }); 	
	
	   	
   	
   	
});





