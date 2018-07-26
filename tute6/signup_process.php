<?php
//session_start();
include("db.php"); //include db.php file to connect to DB
$pagename = "Your Sign Up Results"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";
echo "<body>";
include("headfile.html");
include ("detectlogin.php");
echo "<h4>Your Sign Up Results</h4>"; //display name of the page on the web page

//if the mandatory fields are not empty
if (!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['address']) && !empty($_POST['post']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['psw'])) {
//if the 2 entered passwords do match
    if ($_POST['psw'] == $_POST['confPsw']) {

        $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/";

        if (preg_match($regex, $_POST['email'])) {
            //get pos data
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $address = $_POST['address'];
            $post = $_POST['post'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $psw = $_POST['psw'];
// database connection
            $SQL = "INSERT INTO `users` (`userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) 
VALUES ('USER', '" . $fName . "', '" . $lName . "', '" . $address . "', '" . $post . "', '" . $number . "', '" . $email . "', '" . $psw . "');";

//$SQL="select * from Product WHERE prodId = 1";
//run SQL query for connected DB or exit and display error message
//mysqli_query($conn, $SQL) or die (mysqli_error());
            
            if ($conn->query($SQL)) {
                echo '<b>Sign up Successful!</b>
		<p>To continue, Please <a href="login.php">Login</a></p>';
            }
        } else {
            echo "Email not in the right format</br>";
            echo "<p>Please try again</p> <a href='signup.php'>Go back to Sign up</a> ";
        }
    } else {
        echo "The fields Password and Confirm password should be the same</br>Please Try again </br> <a href='signup.php'>Go back to Sign up</a> ";
    }
} else {
    echo "Please fill in all the details in the form and try again </br>Please Try again </br> <a href='signup.php'>Go back to Sign up</a> ";
}
include("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>