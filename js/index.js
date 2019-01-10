

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
            console.log(data.flights[0]);
            for (i = 0; i < data.flights.length - 1; i++) {
                var current = data.flights[i];     
                    $("#myUL").append("<li><a href='flights.php?cityName=" + current.route.destinations[0] + "'>" + current.route.destinations[0] + "</a></li>");
            }
        }
    });

});

function myfunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
}


