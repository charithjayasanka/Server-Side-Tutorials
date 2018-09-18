<?php
session_start();
include ("db.php"); //include db.php file to connect to DB
$pagename="Your Sign Up Results"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";
//create a $SQL variable and populate it with a SQL statement that retrieves product details
-
include ("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>