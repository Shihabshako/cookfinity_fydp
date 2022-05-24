// validate signup form
function matchPassword(value) {
  let errorSection = $("#passwordMatch");
  if (value.length > 0) {
    let password = $("#password").val();
    if (password == value) {
      errorSection.text("Password matched");
      errorSection.css("color", "green");
    } else {
      errorSection.text("Please match your password ");
      errorSection.css("color", "red");
    }
  }
}

function gotoPage(pageName) {
  window.location.href = pageName + ".php";
}
