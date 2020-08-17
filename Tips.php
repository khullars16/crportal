<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crime Investigation Department</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

</head>

<body style="background: grey;">

  <div class="container">
    <?php
    include "includes/Header.php"
    ?>



    <div class="row mb-3">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="row divbackgroundlower">
          <div class="col-md-12 text-center mt-5 mb-5">
            <h2>Safety Tips</h2>
          </div>

          <?php include "includes/tipsModals.php"; ?>

          <div class="cleaner"></div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>


  </div>

  <!-- end of templatemo_content -->

  <?php
  include "includes/Footer.php";
  ?>

  </div> <!-- end of templatemo_wrapper -->
</body>

</html>