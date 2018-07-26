<?php
session_start();
include("db.php"); //include db.php file to connect to DB
$pagename = "Clear Smart Basket"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";
echo "<body>";
include("headfile.html");
include ("detectlogin.php");
echo "<h4>" . $pagename . "</h4>";
unset($_SESSION['basket']);
echo "Your basket has been cleared";
//create a $SQL variable and populate it with a SQL statement that retrieves product details

$SQL = "select prodId, prodName, prodPicNameSmall, prodDescripShort,prodPrice,prodQuantity from product";


//run SQL query for connected DB or exit and display error message
$exeSQL = mysqli_query($conn, $SQL) or die (mysqli_error($conn));
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp = mysqli_fetch_array($exeSQL)) {
    echo "<tr>";
    echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
    echo "<a href=prodbuy.php?u_prod_id=" . $arrayp['prodId'] . ">";
    echo "<img src=images/" . $arrayp['prodPicNameSmall'] . " height=200 width=200></a>";
    echo "</td>";
    echo "<td style='border: 0px'>";
    echo "<p><h5>" . $arrayp['prodName'] . "</h5>"; //display product name as contained in the array
    echo "<p>" . $arrayp['prodDescripShort'] . "</p>";
    echo "<b>£ " . $arrayp['prodPrice'] . "</b>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
include("footfile.html");
echo "</body>";
/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */
?>