function setError(id, error) {
    //handle input errors
    const element = document.getElementById(id);
    const showError = element.getElementsByClassName("form_error")[0];
    let showOutline = element.getElementsByClassName("input_field")[0];
  
      //showing error field
    showError.innerHTML = error;
  
    //if error lenght is zero changing input outline to green or red
    if(error.length == 0){
      showOutline.style.border = "2px solid green";
      showOutline.style.outline = "none";
  
    }else{
      showOutline.style.border = "2px solid red";
      showOutline.style.outline = "none";
    }
  }
  
  function validate_Form() {
    // handle form validation
  
    let submiteFrom = true;
  
    const username = document.forms["myForm"]["username"].value;
    const password = document.forms["myForm"]["password"].value;
    const confirm_password = document.forms["myForm"]["confirm_password"].value;
  
    // if usename length is smaller than 5 character form will not submite.
    if (username.length < 5) {
      setError(
        "username",
        "*username is too short (must be greater than 5 character)"
      );
      submiteFrom = false;
    } else {
      setError("username", "");
    }
  
    if (password.length < 8) {
      setError(
        "password",
        "*password is too short (must be greater than 8 character)"
      );
      submiteFrom = false;
    } else {
      setError("password", "");
    }
  
    if (password != confirm_password) {
      setError("confirm_password", "*password is not same");
      submiteFrom = false;
    } else {
      setError("confirm_password", "");
    }
  
    return submiteFrom;
  }
  