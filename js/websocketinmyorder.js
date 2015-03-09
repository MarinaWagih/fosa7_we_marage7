window.onLoad=function ()
{
		var source = new EventSource("../Controllers/changestatus.php");
		alert('in'); 
		source.onmessage = function (event) 
            {
                console.log(event);
                var id=event.data.split(':');
                var x=getElementById("#status-"+id[0]);
                if(x)
                {
                	x.innerHTML=id[1];
                }
            };
}