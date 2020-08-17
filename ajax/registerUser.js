$(document).ready(function () {
  // for registration form.....
console.log("i am ready");
  $("#register-user").validate({
    rules: {
      firstName: {
        required: true,
        minlength: 3,
      },
      lastName: {
        required: true,
        minlength: 3,
      },
      address: {
        required: true,
      },
      city: {
        required: true,
      },
      state: {
        required: true,
      },
      gender: {
        required: true,
      },
      dob: {
        required: true,
      },
      policestation: {
        required: true,
      },
      username: {
        required: true,
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

      password: {
        required: true,
        minlength: 6,
        maxlength: 15,
      },
      cpassword: {
        required: true,
        equalTo: "#password",
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
      address: {
        required: "Please enter your address",
      },
      city: {
        required: "Please enter your city",
      },
      state: {
        required: "Please enter your state",
      },
      dob: {
        required: "Please enter your date of birth",
      },
      gender: {
        required: "Please select your gender",
      },
      policestation: {
        required: "Please select nearby police station",
      },
      username: {
        required: "Please enter a username",
      },
      password: {
        required: "Please Enter password",
      },
      cpassword: {
        required: "Re-Type your password",
        equalTo: "Password Does Not Match",
      },
    },

    submitHandler: function (form) {
      var formData = new FormData($("#register-user")[0]);

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




});

///////////////////////////////////////////////////////////////////////////////////////////////
