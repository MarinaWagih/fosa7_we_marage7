$(document).ready(function(){


if($("#UserType").val()=="admin"){
        $(function () 
  {
    
    $.ajax({                                      
      url: '../Controllers/products.php',           
      data: "",                        
      dataType: 'json',                      
      
          success: function(data)          
          {
             var obj = $.parseJSON(data);

                 $(data).each(function(index , record) {

                  var av="";
                  if(record.isAvailable == "1"){
                 
                    av="Soon"
                 }else if(record.isAvailable == "0"){
                    av="Available";
                 }

                                 $('#output').append('<tr id ='+record.id+'><td>'+record.id+'</td><td>'+record.name+'</td><td>'+record.price+'</td><td><img width="50px" height="50px" src="'+record.picture+'"></td><td>'+record.isAvailable+'</td><td><button class="delete">Delete</button>&nbsp;&nbsp;<button class="edit">Edit</button>&nbsp;&nbsp;<button class="av">'+av+'</button></td></tr>');


                });

                                 
                 
                 $(".delete").click( function()
                         {
                           var id =$(this).closest('tr').attr('id');
                                 
                                 $.ajax({

                                          url:'../Controllers/delete.php?productid='+id+'',
                                          data:"",
                                          datatype:'text',
                                          success : function(test){


                                              window.location.replace('../html/products.php');


                                          }

                                 });
                         
                      });

                 $(".edit").click( function()
                         {
                           var id =$(this).closest('tr').attr('id');
                                 
                                 
                                             window.location.replace('../html/editproduct.php?productid='+id+'');


                                 
                      });

                 $(".av").click(function(){

                    var id =$(this).closest('tr').attr('id');

                    $(this).text($(this).text() == 'Available' ? 'Soon' : 'Available');   //change status
                    $('.av').attr("disabled", true);  // only 1 query / time 

                    $.ajax({
                        url:'../Controllers/availability.php?productid='+id+'',
                        data:'',
                        dataType:'text',
                        success:function(){
     
                                   window.location.replace('../html/products.php');         
                            } 



                    });






                            //window.location.replace('../html/products.php');    // redirect to refresh table 
                 });
            
          }

      });
    });


     

    }else{

      window.location.replace('../html/Error.php');

    }


    });