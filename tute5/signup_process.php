<?php
session_start();
include("db.php"); //include db.php file to connect to DB
$pagename = "Your Sign Up Results"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";

echo "<h4>Your Sign Up Results</h4>"; //display name of the page on the web page

//get pos data
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address'];
$post = $_POST['post'];
$number = $_POST['number'];
$email = $_POST['email'];
$psw = $_POST['psw'];

// database connection
$SQL="INSERT INTO `users` (`userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) 
VALUES ('USER', '" .$fName. "', '" .$lName. "', '" .$address. "', '" .$post. "', '" .$number. "', '" .$email. "', '" .$psw. "');";

//$SQL="select * from Product WHERE prodId = 1";	
//run SQL query for connected DB or exit and display error message
//mysqli_query($conn, $SQL) or die (mysqli_error());
if($conn -> query($SQL) === TRUE){
	echo '<b>Sign up Successful!</b>
		<p>To continue, Please <a href="login.php">Login</a></p>';
}


include("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>
