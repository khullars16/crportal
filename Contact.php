<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crime Investigation Department</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/customStyle.css" rel="stylesheet" type="text/css" />

</head>

<body style="background: grey;">

  <div class="container">
    <?php
    include "includes/Header.php";
    ?>


    <div class="row mb-3">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="row divbackgroundlower">
          <div class="col-md-12 text-center mt-5 mb-5">
            <h2>Contact Us</h2>
          </div>

          <table class="table">
            <tr>
              <td><img src="images/booknow.png" /></td>
              <td>
                <p class="style1"><strong>Head Police Station</strong></p>
                <p class="style1"><strong>Near R.k University</strong></p>
                <p class="style1"><strong>Kasturbadham(Tramba)</strong></p>
              </td>
            </tr>
            <tr>
              <td><img src="images/call.png" /></td>
              <td>
                <p class="style1"><strong>0 79 9999777788</strong></p>
                <p class="style2">0 79 88888888</p>
              </td>
            </tr>
            <tr>
              <td><img src="images/mail.png" /></td>
              <td><span class="style1"><strong>info@cid.com</strong></span></td>
            </tr>
          </table>

          <div class="col-md-12 text-center mt-5 mb-5">
            <h2>Feedback</h2>
          </div>


          <div class="p-5">


            <form id="userfeedback">
              <input type="hidden" name="userfeedback">
              <div class="row form-group">
                <div class="col-md-4">
                  <label for="name">Name</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4">
                  <label for="email">Email</label>
                </div>
                <div class="col-md-8">
                  <input type="email" class="form-control" name="email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4">
                  <label for="name">Mobile</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" name="phone">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4">
                  <label for="name">Feedback</label>
                </div>
                <div class="col-md-8">
                  <textarea id="" cols="30" rows="4" class="form-control" name="feedback"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <input type="submit" name="button" id="button" value="Submit" class="btn btn-primary mx-auto" />
              </div>
            </form>

          </div>

          <div class="cleaner"></div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!-- end of templatemo_content -->
    <?php
    include "includes/Footer.php";
    ?>

  </div> <!-- end of templatemo_wrapper -->

  <script src="ajax/feedback.js"></script>
</body>

</html>