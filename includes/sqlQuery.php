<?php
include "database.php";

extract($_POST);


if (isset($_POST['registeruser'])) {


    if ($password === $cpassword) {


        $query = "SELECT * from user_tbl WHERE email='$email'";
        $check = mysqli_query($connection, $query);

        if (mysqli_num_rows($check) < 1) {

            $sql = "INSERT into user_tbl(firstName, lastName, address, city, state, mobile, email, gender, dob, username, password, station_name) VALUES('$firstName', '$lastName', '$address', '$city', '$state', '$phone', '$email', '$gender', '$dob', '$username', '$password', '$policestation')";

            $result1 = mysqli_query($connection, $sql);

            if ($result1) {
                echo "transferred successful";
            }
        } else {
            echo "email already exist";
        }
    } else {
        echo "password does not matched";
    }
}



if (isset($_POST['userfeedback'])) {

    $sql = "INSERT into feedback_tbl(name, email, mobile, feedback) VALUES('$name', '$email', '$phone', '$feedback')";

    $result1 = mysqli_query($connection, $sql);

    if ($result1) {
        echo "transferred successful";
    }
}



if (isset($_POST['loginform'])) {

    if ($_POST['userstate'] == 'User') {
        $sql = "SELECT * from user_tbl WHERE email='$registeredemail'";
        $check = mysqli_query($connection, $sql);
        if (mysqli_num_rows($check) > 0) {
            $row = mysqli_fetch_assoc($check);
            $_SESSION['ID'] = $row['User_Id'];
            $_SESSION['name'] = $row['username'];
            echo "user logged in";
        } else {
            echo "no user found";
        }
    } else {
        echo "another result";
    }
}



if (isset($_POST['editUserData'])) {

    $sql = "Update user_tbl set firstName='".$txtfname."', lastName='".$txtlname."', address='".$txtAdd."', city='".$txtCity."', mobile='".$txtMobile."', email='".$txtEmail."', gender='".$cmbGender."', dob='".$txtBirthDate."', username='".$txtUser."', password='".$txtPass."' where User_Id=".$userid."";

    $result1 = mysqli_query($connection, $sql);

    if ($result1) {
        echo "updated successful";
    }
}