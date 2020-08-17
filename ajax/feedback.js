$(document).ready(function () {
  // for registration form.....
console.log("i am ready");
  $("#userfeedback").validate({
    rules: {
      name: {
        required: true,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      feedback: {
        required: true,
      },
    },

    messages: {
      firstName: {
        required: "Please enter your first name",
        minlength: "Enter At Least 3 Char",
      },
      lastName: {
        required: "Please enter your last name",
        minlength: "Enter At Least 3 Char",
      },
      email: {
        required: "Please Enter email",
      },
      phone: {
        required: "Please Enter phone number",
      },
     feedback: {
        required: "Please give your feedback",
      },
     
    },

    submitHandler: function (form) {
      var formData = new FormData($("#userfeedback")[0]);

      $.ajax({
        url: "includes/sqlQuery.php",
        method: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          console.log(response);
        //   if (response == "email already exist") {
        //     $("#registration").html("email already exist");
        //   } else if (response == "transferred successful") {
        //     window.location.replace("login.php");
   
        //   } else {
        //     console.log("some error");
        //   }
        },

      });

      // $.ajax({
      //     url: "mysql_query.php",
      //     type: "POST",
      //     data: $("#myform").serialize(),
      //     success: function(response) {
      //        console.log(this.data);

      //         if(response == "email already exist"){
      //             $("#registration").html("email already exist");
      //         }
      //         else if(response == "transferred successful"){
      //             $("#registration").html("Successfully Registred");

      //             $("#firstname").val("");
      //             $("#lastname").val("");
      //             $("#age").val("");
      //             $("#city").val("");
      //             $("#email").val("");
      //             $("#phone").val("");
      //             $("#password").val("");
      //             $("#cpassword").val("");
      //         }
      //         else{
      //             console.log("some error")
      //         }
      //     },
      // })
    },
  });

  // for signin form....


});

///////////////////////////////////////////////////////////////////////////////////////////////
