
$(document).ready(function () {
//    var Data;
     // alert("data");
    $('#login').click(function () {
        var email = $('#usermail').val();
        var password = $('#password').val();
        //alert(email+" "+password)
       
        $.post("../Controllers/login.php",
            {'email':email,'password':password},
        function (data) {
							alert(data);
                        if (data==="Done")
                         {
                            $('#myDiv').html("Welcome");
                            
                         }
                        else
                        {
                         
                                $('#myDiv').html("invalid email or password");
                            
                        };
        });


    });
});
