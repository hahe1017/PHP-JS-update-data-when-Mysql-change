var lastUpdate;

$(document).ready(function(){
    function getData(){
        $.ajax({
            type: 'GET',
            url: 'data.php',
            async: true,
            success: function(data){
                  if(lastUpdate != data ) {
                    console.log("Neue Daten");
                    $('#output').html(data);
                    lastUpdate = data; 
                    play_sound();
             
                  }
            }
        });
    }
    getData();
    setInterval(function () {
        getData(); 
    }, 10000);  //Refreshrate in millisec

});

