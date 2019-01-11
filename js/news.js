// the "() => {}" is the same as "function(){}"
$(document).ready(() => {
  obtainItems();
});
//function obtains all news articles from an API
function obtainItems(){
    //ajax call function is used to obtain the API information through an json object
    $.ajax({
        url: "https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=760b63cc0684418a92803cf3a0a500f6",
        method: "GET",
        dataType: "json",
        success: function(data){
        var articles = data.articles;
        //template will be used to create news articles
        var template = $("#nieuwsArtikel").html();
        //rendered templates will be used in mustache to create an foreach loop for each object in the array
        var renderTemplate = Mustache.render(template, articles);
        //with the .html() function the template will be created
        $(".templateContainer").html(renderTemplate);

    }
});
}   