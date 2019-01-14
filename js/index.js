

$(document).ready(() => {
    var items = [];
    $.ajax({
        url: "https://api.schiphol.nl/public-flights/flights?app_id=4a4a192f&app_key=32ec374a8485f67d0a7b8d362bb4228e&includedelays=false&page=0&sort=%2Bscheduletime",
        dataType: "json",
        contentType: "application/json",
        headers: {
            "Accept": "application/json",
            "ResourceVersion": "v3"
        },
        success: function (data) {
            for (i = 0; i < data.flights.length - 1; i++) {
                var current = data.flights[i];     
                    $("#myUL").append("<li onclick='myRead(this)'>" + current.route.destinations[0] + "</li>");
            }
        }
    });
});

function myRead(data){
    var cityToken = $(data).text();
    $("#myInput").val(cityToken);
    return false;
}

function myfunction() {
    var input, filter, ul, li, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        txtValue = li[i].textContent;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
}


