
$(document).ready(function () {
//    var Data;
     // alert("data");
    $('#login').click(function () {
        var email = $('#usermail').val();
        var password = $('#password').val();
        //alert(email+" "+password)
       
        $.post("../Controllers/login.php",
            {'email':email,'password':password},
// <<<<<<< HEAD
        function (data) {   //alert(data);
                            data=data.split(':');
                            alert(data[1]);    
                        if (data[0]==="Done" && data[1]==='admin')
// =======
//         function (data) {
// 							alert(data);
//                         if (data==="Done")
// >>>>>>> 8e7b6f31e9e741723f6891f9d089d9240b19377f
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
