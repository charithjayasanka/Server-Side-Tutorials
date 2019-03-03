<?php
session_start();
include("db.php"); //include db.php file to connect to DB
$pagename = "Your Sign Up Results"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";


if ((empty($_POST['firstname'] && empty($_POST['lastname']) && empty($_POST['address']) && empty($_POST['postcode']) && empty($_POST['telNo']) && empty($_POST['email']) && empty($_POST['password'] && empty($_POST['confpassword']))))) {
    echo "Success1";
    if ($_POST['password'] == $_POST['confpassword']) {
        echo "Success2";
    }


} else {
    echo "Success3";
}


//
//$firstName=$_POST['firstname'];
//$lastName=$_POST['lastname'];
//$address=$_POST['address'];
//$postCode=$_POST['postcode'];
//$telNo=$_POST['telNo'];
//$email=$_POST['email'];
//$password=$_POST['password'];
//
//$sql="INSERT INTO users (userType,userFName, userSName, userAddress,userPostCode,userTelNo,userEmail,userPassword) VALUES ($firstName,$firstName,$lastName,$address,$postCode,$telNo,$email,$password)";
//
//$exeSQL1=mysqli_query($conn, $sql) or die (mysqli_error($conn));
//echo "<body>";
//include ("headfile.html");
//echo "<h4>".$pagename."</h4>";
////create a $SQL variable and populate it with a SQL statement that retrieves product details
////run SQL query for connected DB or exit and display error message
////$sql="INSERT INTO table_name (userType,userFName,userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword) VALUES ('hELLO',$userFName, $lastName, $address,$postCode,$telNo,$email,$password)";
////$exeSQL1=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
//echo $sql;
//echo "</br>";
//echo $firstName;
//echo "</br>";
//echo $lastName;
//echo "</br>";
//echo $address;
//echo "</br>";
//echo $postCode;
//echo "</br>";
//echo $telNo;
//echo "</br>";
//echo $email;
//echo "</br>";
//echo $password;
//echo "</br>";
include("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>