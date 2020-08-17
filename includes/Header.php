<?php include "database.php";

?>

<style>
    .divbackground {
        background-color: white;
        border-radius: 0 0 50px 50px;
    }

    .divbackgroundlower {
        background-color: white;
        border-radius: 50px 50px 0 0;
    }

    .menubar {
        background-color: yellow; 
    }

    .menubarradius {
        border-radius: 50px;
    }

    .menudivradius {
        border-radius: 0 50px 0 0;
    }

    .menuitemscustom li a:hover {
        background: white;
    }
</style>

<div class="row text-center">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="row  divbackground">
            <div class="col-md-3">
                <img src="images/CID.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h1 class="display-4 mt-5">Crime Reporting System</h1>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<div class="row menubar menubarradius">
    <div class="col-md-2 text-center paddingClass my-auto">
        <ul class="nav flex-column menuitemscustom">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="News.php">News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Tips.php">Safety Tips</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Missing.php">Missing Persons</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Wanted.php">Most Wanted</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact Us</a>
            </li>


        </ul>
    </div>
    <div class="col-md-8" style="background: white;">


    <?php
     include "newsApiCall.php";
     crousalNews();
     ?>




    </div>
    <div class="col-md-2 text-center p-2">
        <h3>Member</h3>
        <form id="loginform">
        <input type="hidden" name="loginform">
            <div class="form-group">
                <label for="registeredemail">Email</label>
                <input type="email" class="form-control form-control-sm" id="registeredemail" name="registeredemail">
            </div>
            <div class="form-group">
                <label for="registeredpassword">Password</label>
                <input type="password" class="form-control form-control-sm" id="registeredpassword" name="registeredpassword">
            </div>

            <div class="form-group">
                <label for="userstate">Member</label>
                <select id="userstate" class="form-control form-control-sm" name="userstate">
                    <option disabled selected>Choose...</option>
                    <option>User</option>
                    <option>Police</option>
                    <option>Admin</option>
                </select>
            </div>

            <button type="submit" class="btn-sm btn-primary">Sign in</button>
        </form>
    </div>
</div>