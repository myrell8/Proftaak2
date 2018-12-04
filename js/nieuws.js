$(document).ready(() => {
  obtainItems();
});

function obtainItems(){
    $.ajax({
        url: "https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=760b63cc0684418a92803cf3a0a500f6",
        method: "GET",
        dataType: "json",
        success: function(data){
            console.log(data.articles);
        var articles = data.articles;
        var template = $("#nieuwsArtikel").html();
        var renderTemplate = Mustache.render(template, articles);
        $(".templateContainer").html(renderTemplate);

    }
});
}   