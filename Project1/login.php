
<?php
session_start();
$_SESSION["signin_error"] = "";
if (
  isset($_SESSION["loggedin"])
  && $_SESSION["loggedin"]
) {
  header("location: home.php"); // Redirecting To Other Page
}
// Starting Session
// Variable To Store Error Message
//

// $conn = mysqli_connect("HOST", "USERNAME", "PASSWORD","DATABASE" );
$conn = mysqli_connect("localhost", "root", "","my_db" );

if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $email=$_POST['email'];

$query = $conn -> prepare("select * from my_db where fname=? and email=?");
$query -> bind_param("ss", $fname, $email);
if (
  $query -> execute()
) {
  $query -> store_result();
  if (
    $query -> num_rows() > 0
  ) {
    $_SESSION["loggedin"] = TRUE;
    $_SESSION['fname'] = $fname;
    $_SESSION['email'] = $email;
    header("location: home.php"); // Redirecting To Other Page
  } else {
    $_SESSION["signin_error"] = "Incorrect credentials!";
  }
} else {
  $_SESSION["signin_error"] = "Failed to execute";
}
}
header("location: index.php"); // Redirecting To Other Page
$query->close();
$conn->close();
