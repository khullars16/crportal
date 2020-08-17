$(document).ready(function () {
    // for registration form.....
  console.log("i am ready");
    $("#editUserProfile").validate({
      rules: {
        txtfname: {
          required: true,
          minlength: 3,
        },
        txtlname: {
          required: true,
          minlength: 3,
        },
        txtAdd: {
          required: true,
        },
        txtCity: {
          required: true,
        },
        // state: {
        //   required: true,
        // },
        cmbGender: {
          required: true,
        },
        txtBirthDate: {
          required: true,
        },
        // policestation: {
        //   required: true,
        // },
        txtUser: {
          required: true,
        },
        txtEmail: {
          required: true,
          email: true,
        },
        txtMobile: {
          required: true,
          minlength: 10,
          maxlength: 10,
        },
  
        txtPass: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },

      },
  
      messages: {
        txtfname: {
          required: "Please enter your first name",
          minlength: "Enter At Least 3 Char",
        },
        txtlname: {
          required: "Please enter your last name",
          minlength: "Enter At Least 3 Char",
        },
        txtEmail: {
          required: "Please Enter email",
        },
        txtMobile: {
          required: "Please Enter phone number",
        },
        txtAdd: {
          required: "Please enter your address",
        },
        txtCity: {
          required: "Please enter your city",
        },
        // state: {
        //   required: "Please enter your state",
        // },
        txtBirthDate: {
          required: "Please enter your date of birth",
        },
        cmbGender: {
          required: "Please select your gender",
        },
        // policestation: {
        //   required: "Please select nearby police station",
        // },
        txtUser: {
          required: "Please enter a username",
        },
        txtPass: {
          required: "Please Enter password",
        },
      
      },
  
      submitHandler: function (form) {
        var formData = new FormData($("#editUserProfile")[0]);
  
        $.ajax({
          url: "../includes/sqlQuery.php",
          method: "POST",
          data: formData,
          contentType: false,
          cache: false,
          processData: false,
          success: function (response) {
            console.log(response);

          },
  
        });
  

      },
    });
  
  
  
  
  });
  
  ///////////////////////////////////////////////////////////////////////////////////////////////
  