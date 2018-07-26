<?php
//session_start();
include("db.php"); //include db.php file to connect to DB
$pagename = "Login Page"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>" . $pagename . "</title>"; //display name of the page as window title
echo "<body>";
include("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>" . $pagename . "</h4>"; //display name of the page on the web page

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $exist = true;
} else {
    $exist = false;
}
if ($exist) {

    // Validate credentials
    // Prepare a select statement
    $sql = "SELECT userId , userType , userFName , userSName , userPassword FROM users WHERE userEmail = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set parameters
        $param_username = $email;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $userId, $userType, $userFName, $userSName, $userPassword);
                if (mysqli_stmt_fetch($stmt)) {
                    if ($password == $userPassword) {
                        // Store data in session variables
                        $_SESSION['userid'] = $userId;
                        $_SESSION['usertype'] = $userType;
                        $_SESSION['fname'] = $userFName;
                        $_SESSION['sname'] = $userSName;
                        echo "<h5 style='color: black'>Login Success!</h5>";
                        echo "</br>Hello, ".$_SESSION['fname']." ".$_SESSION['sname'];
                        echo "</br></br>You have successfully logged in as a hometeq Customer!";
                        echo "</br></br>Continue shopping for <a href='index.php'>Home Tech</a>";
                        echo "</br></br>View your <a href='basket.php'>Smart Basket</a>";
                        // Redirect user to welcome page
                        //     header("location: welcome.php");
                    } else {
                        // Display an error message if password is not valid
                        echo "The password you entered was not valid.";
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                echo "No account found with that Email.";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
//  mysqli_close($link);


include("footfile.html"); //include head layout
echo "</body>";
?>