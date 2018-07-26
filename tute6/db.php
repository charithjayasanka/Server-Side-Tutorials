<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tutorials';
//create a DB connection
try {
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}
catch (exception $e) {
    //code to handle the exception
}
finally {
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
}



//select the database
mysqli_select_db($conn, $dbname);

/**
 * Created by PhpStorm.
 * User: Charith Jayasanka
 */

?>