$(document).ready(function () 
{
	var wskt = new WebSocket('ws://localhost:8080');
	
	if($("#UserType").val()=="user"){

		function connect()
	{
		var fr = $("#from").val();
		var to = $("#to").val();
	
		if(fr==null)
			fr="";
		if(to==null)
			to="";
	
	
		$.post("../Controllers/returnallorders.php",{"from":fr , "to":to},
		
		function(datae)
		{
			$("#mydiv").html("");
		
			var data = jQuery.parseJSON(datae);
		
			for(var i=0;i<data.length ; i++)
			{

				$("#mydiv").append("<table border='1px' id='"+data[i].id+"'></table><div class='display' id='display"+data[i].id+"'></div>");

				$('#'+data[i].id).append("<tr>"+"<td></td>"+"<td>"+"Date"+"</td>"
											+"<td>"+"Status"+"</td>"
											+"<td>"+"Total"+"</td>"
											+"<td>"+"Action"+"</td>"
											+"</tr>");
											
				var x="";
				var y="";
				if(data[i].status=='processing')
				{
					x=$("<button id='pay-"+data[i].id+"'>Cancel</button>");

					x.click(function()
							{

									var id=this.id.split("-");
									$.ajax({
		
									type:"GET",
									url:'../Controllers/deleteorder.php?orderid='+id[1],
									data:'',
									dataType:'text',
									success:function(data){
											
											$("#display"+id[1]).slideUp('slow');
											$("#"+id[1]).slideUp('slow');
									}});
							});
				}
				$('#'+data[i].id).append("<tr>"+"<td id='show-"+data[i].id+"'>+</td>"
										+"<td>"+data[i].timeStamp+"</td>"
										+"<td>"+data[i].status+"</td>"
										+"<td>"+data[i].totalBill+"</td>"
										+"<td class='cancelContainer'>"+"</td>"
										+"</tr>");
				
				$(".cancelContainer",'#'+data[i].id).append(x);					
				for(var j=0;j<data[i].Items.length;j++)
				{
			
					$('#display'+data[i].id).append("<div class='item'style='float: left;' ><span>"+data[i].Items[j].ItemId[0].name+"</span><br>"+"<span>"+data[i].Items[j].quantity+"</span><br>"+"<img src='"+data[i].Items[j].ItemId[0].picture+"'><br></div>");
					
				 }
				
										

				$('#display'+data[i].id).hide();					
				$('#show-'+data[i].id).click(function()
													{
													
														var id=this.id.split("-");
														$('#display'+id[1]).slideToggle( "slow" );
														sendmessage($("#UserId").val(),data[i].id);
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
	
	   	
	

	wskt.onopen = function(e){
		console.log("web socket connected");

	}

   	function sendmessage(uid,oid)
   	{
		x.send("cancel:"+uid+":"+oid+);
	}
   	
   	
   	
});


