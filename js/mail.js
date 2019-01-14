$(document).ready(() =>{
    $("form").on("submit", () =>{
      var form = $("form").serialize();

      var name = $("input[name=cf_name]").val().length;
      var email = checkEmail($("input[name=cf_email]").val());
      var subject = $("input[name=cf_subject]").val().length;  
      var message = $("textarea[name=cf_message]").val().length;
      if(email == true && name > 5 &&
        subject > 3 && message > 5)
      {
      sendMail(form);
      }else{
       if(name < 5)  $("input[name=cf_name").css("border","2px solid red");     
       if (email == false) $("input[name=cf_email]").css("border","2px solid red");
       if(subject < 5) $("input[name=cf_subject]").css("border", "2px solid red");
       if(message < 5) $("textarea[name=cf_message]").css("border","2px solid red");
      }
      return false;
    });

    $("input, textarea").blur( (m) => {
        $(m.currentTarget).css("border", "1px solid #ced4da");
    });
});



function sendMail(form) {
  $.ajax({
    url: "includes/contactmail.php",
    method: "POST",
    data: form,
    success: (data) => {
      alert(data);
      if (data === "mail has been sent") {
        window.location = "index.php";
      }
    }
  });
}

function checkEmail(email){
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}