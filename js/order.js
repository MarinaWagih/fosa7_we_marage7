$(document).ready(function () {

  var OrderItem=[];
  var Quantity=[];
  var Price=[];
  var inc=0;
  var userid=$('#UserId').val();
  var totalOfTotal=0;
  function IncTotal()
  {
    totalOfTotal=0;
    console.log("inc in total"+inc);
    for (var i = 0; i < inc; i++) 
    {
       totalOfTotal+= Quantity[i]*Price[i];   
    }
      $("#Total").html("Total=<br>"+totalOfTotal);
  }
       //alert("hhh");
       if($("#UserType").val()=="admin")
       {
        $.post("../Controllers/returnallusers.php",
        function (data) {
                       $('#latestOrder').html("<select id='userscmb'></select>");
                       var obj = $.parseJSON(data);
        
                      for(var i = 0 ; i < obj.length ; i++)
                      {
                        $("#userscmb").append("<option value='"+obj[i]["id"]+"'>"+obj[i]['name']+"</option>");
                      }
                      userid= $("#userscmb").val();
                      $("#userscmb").change(function() {
                                                           userid= $("#userscmb").val();
                                                           console.log(userid);
                                                        });              
                      });
       }
       else
       {
         //****************************LASTORDER*************************************
        $.post("../Controllers/lastorder.php",
        function (data) {

                       //alert("lastorder"+data);
                       var obj = $.parseJSON(data);
                       // alert(obj[0].Itemes.length);
                        for (var i = 0; i < obj[0].Itemes.length; i++) 
                        {
                             var html="<div class='itemOrder' id='"+obj[0].Itemes[i].ItemId[0].id+"'>";
                            html+="<img src='"+obj[0].Itemes[i].ItemId[0].picture+"'><br>";
                            html+="<span class='itemname'>"+obj[0].Itemes[i].ItemId[0].name+"</span>";
                            html+="&nbsp;&nbsp; <span class='price'>"+obj[0].Itemes[i].ItemId[0].price+"</span>";
                            html+="</div>&nbsp;&nbsp;&nbsp;";
                            $('#latestOrder').append (html);
                        };
                       
                                         
            });
       }
      
        //**********************************************************************************
        //*****************************AllItems*********************************************
        $.post("../Controllers/allitems.php",
        function (data) {

                  //alert("all items"+data);
                      var obj = $.parseJSON(data);
                      //alert(obj.length);
                      for (var i = 0; i < obj.length; i++) 
                      {
                          html="<div class='item' id='"+obj[i].id+"'>";
                          html+="<img src='"+obj[i].picture+"'><br>";
                          html+="<span class='itemname'>"+obj[i].name+"</span>";
                          html+="&nbsp;&nbsp; <span class='price'>"+obj[i].price+"</span>";
                          html+="</div>&nbsp;&nbsp;&nbsp;";
                      
                          $('#AllItems').append (html);
                        };
        //**********************************************************************************
        //**************************ItemClickAction*****************************************
 
                        $('.item').click(function() {
                                          var id=this.id ;
                                          OrderItem.push(id);
                                          Quantity.push(1);
                                          //console.log($(this).children());
                                          //alert($(this).children().length);
                                          var itemprice=$(this).children()[3].innerHTML;
                                          Price.push(parseFloat(itemprice));
                                          $(this).removeClass("item").addClass("new"+inc);
                                          //alert(inc);
                                          $("#SelectedItems").append("<div id='Addeditem"+inc+"'></div")
                                          var x=$(this).children().length;
                                          $("#Addeditem"+inc).append($(this));
                                          $("#Addeditem"+inc)
                                          .append("<input type='number'name='count' id='price"+inc+"' min='1' value='1'>");
                                          $("#Addeditem"+inc)
                                          .append("<span class='tota' id='total"+inc+"'>"+itemprice+"</span> ");
                                          $("#Addeditem"+inc)
                                          .append("<span class='x' id='deletex"+inc+"'>"+"x"+"</span> ");
                                          $(this).off("click");
                                          
                                          $('#price'+inc).change(function(){
                                                               //alert(Quantity[inc]);
                                                                var getid=this.id.split("e");
                                                                //console.log(getid);
                                                                Quantity[getid[1]]=parseInt($(this).val());
                                                               // alert(Quantity[getid[1]]);
                                                                var total= Quantity[getid[1]]*Price[getid[1]];
                                                                $('#total'+getid[1]).html(total); 
                                                                 IncTotal();
                                                                            });
                                          $("#deletex"+inc).click(function ()
                                                                      {
                                                                        var getid=this.id.split("x");
                                                                        Quantity.splice(getid[1],1);
                                                                        Price.splice(getid[1],1);
                                                                        OrderItem.splice(getid[1],1);
                                                                        console.log(getid[1]);
                                                                       // console.log($(".new"+getid[1]));
                                                                        $('#AllItems').append($(".new"+getid[1]));
                                                                        $(".new"+getid[1]).attr("class", "item");                                                                      
                                                                        $("#Addeditem"+getid[1]).remove();
                                                                         inc--;
                                                                         IncTotal();

                                                                      });
                                          
                                           inc++;
                                            IncTotal();
                                        });
         //**********************************************************************************
            });

        //**********************************************************************************
        //*****************************ALLROOMS*********************************************

        $.post("../Controllers/returnallrooms.php",
    
        function(data)
        {
          //alert("RoomNo"+data);
            var obj = $.parseJSON(data);
            
            for(var i = 0 ; i < obj.length ; i++)
            {
                $("#RoomNo").append("<option value='"+obj[i]["id"]+"'>"
                                     +obj[i]['number']+"</option>");
            }
        });
      $('#Confirm').click(function() 
                                  {
                                   if(OrderItem.length!=0)
                                   {
                                     $.post("../Controllers/SaveOrder.php",
                                      {"Item_Order":OrderItem,"Quantity":Quantity,
                                      "notes":$("#Notes").val(),"RoomId":$("#RoomNo").val()
                                      ,"userid":userid,"totalbill":totalOfTotal}
                                      ,function(data)
                                      {
                                      
                                       
                                          alert(data);
                                        
                                       
                                       });
                                   }
                                  }); 
});