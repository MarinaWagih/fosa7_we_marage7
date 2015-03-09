$(document).ready(function () 
{
	
   	if($("#UserType").val()=="admin"){
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

				$("#mydiv").append("<table class='table table-striped Mytable' id='"+data[i].id+"'></table><div class='display' id='display"+data[i].id+"'></div>");

				$('#'+data[i].id).append("<thead>"+"<td></td>"+"<td>"+"Date"+"</td>"
											+"<td>"+"Total"+"</td>"
											+"<td>"+"Paid ?"+"</td>"
											+"</thead>");
			
				$('#'+data[i].id).append("<tr>"+"<td id='show-"+data[i].id+"'>+</td>"+"<td>"+data[i].timeStamp+"</td>"
										+"<td>"+data[i].totalBill+"</td>"
										+"<td>"+"<button id='pay-"+data[i].id+"'>Payed</button>"+"</td>"
										+"</tr>");
										
				for(var j=0;j<data[i].Items.length;j++)
				{
			
					$('#display'+data[i].id).append("<div class='item'>"+
									"<img src='"+data[i].Items[j].ItemId[0].picture+"'><br>"
									+"<span class='Productname'>"+data[i].Items[j].ItemId[0].name+"</span>&nbsp;&nbsp;"+
									"<span class='ProductQuantity'>"+data[i].Items[j].quantity+"</span><br>"
									+"</div>");
					
				 }
				
				$("#pay-"+data[i].id).click(function()
											{
													var id=this.id.split("-");
													$.ajax({
						
													type:"GET",
													url:'../Controllers/changeispaid.php?orderid='+id[1],
													data:'',
													dataType:'text',
													success:function(data){
															// $("#pay-"+data[i].id).attr("disabled","true");
															//alert(data);
															$("#display"+id[1]).slideUp('slow');
															$("#"+id[1]).slideUp('slow');
													}});
											});
											
				 
				$('#display'+data[i].id).hide();					
				$('#show-'+data[i].id).click(function()
													{
													
														var id=this.id.split("-");
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


   	}else{

   		window.location.replace('../html/Error.php');
   	}



   	
});





