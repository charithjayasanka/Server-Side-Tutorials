<?php
include ("db.php"); //include db.php file to connect to DB
$pagename="Your Sign Up Results"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";
echo "<form action='signup_process.php' method='post'><table>";
echo "<tr><td>*First name </td><td><input type='text' name='firstname' ></td></tr>";
echo "<tr><td>*Last name </td><td><input type='text' name='lastname' ></td></tr>";
echo "<tr><td>*Address </td><td><input type='text' name='address' ></td></tr>";
echo "<tr><td>*Postcode </td><td><input type='text' name='postcode' ></td></tr>";
echo "<tr><td>*Tel No </td><td><input type='text' name='telNo' ></td></tr>";
echo "<tr><td>*Email Adress </td><td><input type='text' name='email' ></td></tr>";
echo "<tr><td>*Password </td><td><input type='text' name='password' ></td></tr>";
echo "<tr><td>*Confirm Password</td><td><input type='text' name='confpassword' ></td></tr>";
echo "<tr><td><button value='signup'>Sign up</button></td><td><input type='submit' value='Submit'></td></tr></table></form>";
include ("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>