function validateForm() {
  var x = document.forms["contactForm"]["cf_name"].value;
  if (x == "") {
    document.getElementById("emailInput").style.border = "2px solid red";
    return false;
  }
}