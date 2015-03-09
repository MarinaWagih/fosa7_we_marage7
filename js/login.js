
$(document).ready(function () {

    $('#login').click(function () {
        var email = $('#usermail').val();
        var password = $('#password').val();
        
       
        $.post("../Controllers/login.php",
            {'email':email,'password':password},
        function (data) {   //alert(data);
                            data=data.split(':');
                            alert(data[1]);    
                        if (data[0]==="Done" && data[1]==='admin')

                         {
                            $('#myDiv').html("Welcome");
                            window.location.replace('../html/home.php');

                         }else if(data[0]==="Done" && data[1]==='user'){

                            $('#myDiv').html("Welcome");
                            window.location.replace('../html/orders.php');
                        
                        }else{
                            $('#myDiv').html("invalid email or password");
                        }
                                
                            
                        
        });


    });
});
