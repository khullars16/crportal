$(document).ready(function () {

  $("#loginform").validate({
    
    rules: {
      registeredemail: {
        required: true,
        email: true,
      },
      registeredpassword: {
        required: true,
        minlength: 6,
        maxlength: 15,
      },
      userstate: {
        required: true,
      },
    },
    
    messages: {
      registeredemail: {
        required: "Please Enter email",
      },
      registeredpassword: {
        required: "Please Enter password",
      },
      userstate: {
        required: "Choose one",
      },
    },


    submitHandler: function (form) {
      var formData = new FormData($("#loginform")[0]);
    
      $.ajax({
        url: "includes/sqlQuery.php",
        method: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          console.log(response);
          if(response == "user logged in"){
            window.location.replace("RegUser/index.php");
          }
        },
    });
  }
  })
})







    

/////////// validate //////////////////










/////////// submit ////////////
