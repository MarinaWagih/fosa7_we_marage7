$(document).ready(function(){

	// $(function () 
 //  {
    
  if($("#UserType").val()=="admin"){

      $.ajax({                                      
      url: '../Controllers/users.php',           
      data: "",                        
      dataType: 'json',                      
      
          success: function(data)          
          {
             var obj = $.parseJSON(data);

            
                 $(data).each(function(index , record) {

       $('#output').append("<tr id='"+record.id+"'><td>"+record.id+"</td><td>"+record.name+"</td><td>"+record.RoomId[0].id+"</td><td>"+record.ext+"</td><td><img width='50px' height='50px' src='"+record.picture+"'</td><td><button class='delete'>Delete</button>&nbsp;&nbsp;<button class='edit'>Edit</button></td></tr>");
         
                    


                });
                   
                 $(".delete").click( function()
                         {
                           var id =$(this).closest('tr').attr('id');
                                 
                                 $.ajax({

                                          url:'../Controllers/delete.php?userid='+id+'',
                                          data:"",
                                          datatype:'text',
                                          success : function(test){

                                            window.location.replace('../html/users.php');


                                          }

                                 });
                         
                      }); 

                 $(".edit").click( function()
                         {
                           var id = $(this).closest('tr').attr('id');
                           
                          
                                 window.location.replace('../html/edituser.php?userid='+id+'');
                         
                      }); 
  
          }

      });
  

    }else{

      window.location.replace('../html/Error.php');

    }

});
