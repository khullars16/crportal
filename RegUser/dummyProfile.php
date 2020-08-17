<?php include "../includes/database.php"; ?>
<?php


$sql = "select * from user_tbl where User_Id='" . $_SESSION['ID'] . "' ";

$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($result)) {
    $Id = $row['User_Id'];
    $fname = $row['firstName'];
    $lname = $row['lastName'];
    $Address = $row['address'];
    $City = $row['city'];
    $Email = $row['email'];
    $Mobile = $row['mobile'];
    $Gender = $row['gender'];
    $Birthdate = $row['dob'];
    $Station_Name = $row['station_name'];

    $UserName = $row['username'];
    $Password = $row['password'];
}
?>

<table class="table">

    <tr>
        <td>ID:</td>
        <td><?php echo $Id; ?></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><?php echo $fname; ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><?php echo $lname; ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $Address; ?></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><?php echo $City; ?></td>
    </tr>
    <tr>
        <td>Mobile:</td>
        <td><?php echo $Mobile; ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $Email; ?></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><?php echo $Gender; ?></td>
    </tr>
    <tr>
        <td>BirthDate:</td>
        <td><?php echo $Birthdate; ?></td>
    </tr>
    <tr>
        <td>Station Name:</td>
        <td><?php echo $Station_Name; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td><a href="EditProfile.php?Id=<?php echo $Id; ?>"><strong>Edit Profile</strong></a></td>
    </tr>

</table>
<?php

// Close the connection
// mysqli_close($con);
?>