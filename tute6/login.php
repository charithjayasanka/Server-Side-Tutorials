<?php
//session_start();
$pagename="Login Page"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
echo "<form action='login_process.php' method='post'>
<table>
<tr>
<td>Email Address :-</td>
<td><input type='email' name='email' required></td>
</tr>
<tr>
<td>Password :- </td>
<td><input type='password' name='password' required></br></td>
</tr>
<tr>
<td colspan='2'><input type='submit' value='Login'></td>
</tr>
</table>
 </form>


</form>";
include("footfile.html"); //include head layout
echo "</body>";
?>