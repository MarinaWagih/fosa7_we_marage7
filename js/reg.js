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
	   	
   	$("#E-mail").blur(function(){
   		if($('#E-mail').val()=="")
   		{
   			$('#spanemail').html(" required ");
   		}
   		else
   		{
		    $.post("../Controllers/checkemail.php",{"email":$(this).val()},
		    
		    function(data)
		    {
		    	if(data=="mawgood")
		    	{
		    		$('#spanemail').html("Email already exists");
		    	}
		    	else
		    	{
		    		$('#spanemail').html(":D :D ");
		    	}
		    	console.log(data);
		    }
		    );
   		}
    });
    
    $("#password").blur(function(){
    	if($('#password').val()=="")
    	{
    		$('#spanpass').html("Required fields");
    	}
    	else
    	{
		    if($('#password').val()!=$("#conpass").val())
		    {
		    	$('#spanpass').html("Don't match");
		    }
		    else
		    {
		    	$('#spanpass').html("Match");
		    }
    	}
    });
    
    $("#conpass").blur(function(){
         if($('#confpass').val()=="")
    	{
    		$('#spanpass').html("Required fields");
    	}
    	else
    	{
		    if($('#password').val()!=$("#conpass").val())
		    {
		    	$('#spanpass').html("Don't match");
		    }
		    else
		    {
		    	$('#spanpass').html("Match");
		    }
    	}
    });
    
   	
});





