$(document).ready(function () {

  
       //alert("hhh");
        $.post("../Controllers/lastorder.php",
        function (data) {

                       //alert("lastorder"+data);
                       var obj = $.parseJSON(data);
                       // alert(obj[0].Itemes.length);
                        for (var i = 0; i < obj[0].Itemes.length; i++) 
                        {
                             var html="<div class='item' id='"+obj[0].Itemes[i].ItemId[0].id+"'>";
                            html+="<img src='"+obj[0].Itemes[i].ItemId[0].picture+"'><br>"
                            html+=obj[0].Itemes[i].ItemId[0].name+"</div>&nbsp;&nbsp;&nbsp;"
                            $('#latestOrder').append (html);
                        };

                     
            });
        $.post("../Controllers/allitems.php",
        function (data) {

                  //alert("all items"+data);
                      var obj = $.parseJSON(data);
                      alert(obj.length);
                      for (var i = 0; i < obj.length; i++) 
                      {
                          html="<div class='item' id='"+obj[i].id+"'>";
                          html+="<img src='"+obj[i].picture+"'><br>"
                          html+=obj[i].name+"</div>&nbsp;&nbsp;&nbsp;"
                         //alert(obj[i].id);
                          $('#AllItems').append (html);
                        };
                    
                     
            });

});