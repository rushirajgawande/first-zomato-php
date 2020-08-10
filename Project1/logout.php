<?php
if (isset($_SESSION['loggedin'])) {
   session_start();
   session_destroy();
   header("location:index.php");
}else {
   header("location:index.php");
}
?>
