<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_SESSION['ID'];
$Name=$_POST['txtName'];
$txtAdd=$_POST['txtAdd'];
$txtCity = $_POST['txtCity'];
$txtMobile=$_POST['txtMobile'];
$txtEmail=$_POST['txtEmail'];
$Gender=$_POST['cmbGender'];
$BirthDate=$_POST['txtBirthDate'];
$txtUser=$_POST['txtUser'];
$txtPass=$_POST['txtPass'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to Update Record
$sql = "Update user_tbl set Name='".$Name."',Address='".$txtAdd."',City='".$txtCity."',Mobile='".$txtMobile."',Email='".$txtEmail."',Gender='".$Gender."',BirthDate='".$BirthDate."',UserName='".$txtUser."',Password='".$txtPass."' where User_Id=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
