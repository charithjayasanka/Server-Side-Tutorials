<?php
include("db.php"); //include db.php file to connect to DB
$pagename = "Sign Up"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";
echo "<body>";
include("headfile.html");
echo "<h4>" . $pagename . "</h4>";
echo '
<form action="signup_process.php" method="post">
<table>
<tr>	<td>First Name</td>	<td><input type="text" name="fName" required></td></tr>
<tr>	<td>Last Name</td>	<td><input type="text" name="lName" required></td></tr>
<tr>	<td>Address</td>	<td><input type="text" name="address" required></td></tr>
<tr>	<td>Post Code</td>	<td><input type="number" name="post" required></td></tr>
<tr>	<td>Tel Number</td>	<td><input type="number" name="number" required></td></tr>
<tr>	<td>Email</td>		<td><input type="email" name="email" required></td></tr>
<tr>	<td>Password</td>	<td><input type="password" name="psw" required></td></tr>

<tr> <td><input type="Submit" value="Submit"></td>	<td><input type="reset" value="Clear"></td></tr>
</table>
</form>
';
include("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>
