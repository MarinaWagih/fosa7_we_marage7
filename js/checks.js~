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
		
		function(datae)
		{
			$("#mydiv").html("");
		
			var data = jQuery.parseJSON(datae);
		
			for(var i=0;i<data.length ; i++)
			{

				$("#mydiv").append("<table border='1px' id='"+data[i].id+"'></table><div class='display' id='display"+data[i].id+"'></div>");

				$('#'+data[i].id).append("<tr>"+"<td></td>"+"<td>"+"date"+"</td>"
											+"<td>"+"total"+"</td>"
											+"<td>"+"is paid"+"</td>"
											+"</tr>");
			
				$('#'+data[i].id).append("<tr>"+"<td id='show"+data[i].id+"'>+</td>"+"<td>"+data[i].timeStamp+"</td>"
										+"<td>"+data[i].totalBill+"</td>"
										+"<td>"+"<button id='pay-"+data[i].id+"'>Payed</button>"+"</td>"
										+"</tr>");
										
				for(var j=0;j<data[i].Items.length;j++)
				{
			
					$('#display'+data[i].id).append("<div class='item'style='float: left;' ><span>"+data[i].Items[j].ItemId[0].name+"</span><br>"+"<span>"+data[i].Items[j].quantity+"</span><br>"+"<img src='"+data[i].Items[j].ItemId[0].picture+"'><br></div>");
					
				 }
				
				$("#pay-"+data[i].id).click(function()
											{
												
											}
				);
				 
				$('#display'+data[i].id).hide();					
				$('#show'+data[i].id).click(function()
													{
													
														var id=this.id.split("w");
														$('#display'+id[1]).slideToggle( "slow" );
													});				
				$("#mydiv").append("<br/><br/>");
			}
		}
		);

	}




	$("#from").change(connect);
	$("#to").change(connect);
	$("#usr").change(connect);




   	
});





