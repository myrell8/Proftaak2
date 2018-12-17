$(document).ready(() =>{
    $("form").on("submit", () =>{
      var form = $("form").serialize();
      console.log(form);
      $.ajax({
        url: "includes/contactmail.php",
        method: "POST",
        data: form,
        success: (data) =>{
          alert(data);
          if(data === "mail has been sent"){
            window.location = "index.php"
          }
        } 
      });  
      return false;
    });
});



