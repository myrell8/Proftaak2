// $(document).ready(function(){

$.ajax({
    url: "https://api.schiphol.nl/public-flights/flights?app_id=304ec262&app_key=3389ddecd55c28d1cda173ecd8caef83&includedelays=false&page=0&sort=%2Bscheduletime",
    dataType: "json",
    headers:{"Accept": "application/json", "ResourceVersion": "v3"},
    type: "GET",
    contentType: "application/json",
    success: function(data){
        console.log(data);
    }
})