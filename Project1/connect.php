<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$sex=$_POST['sex'];
 if(!empty($fname) || !empty($lname) || !empty($email) || !empty($mobile) || !empty($sex)){
$conn = new mysqli('localhost','root','','my_db');
if (mysqli_connect_error()) {
  die('Conect error('.mysqli_connect_error().')'.mysqli_connect_error());
}else{

  $SELECT="SELECT email From my_db where email = ? Limit 1";
  $INSERT="INSERT into my_db (fname,lname,email,mobile,sex) values (?,?,?,?,?)";
  $st=$conn->prepare($SELECT);
  $st-> bind_param("s",$email);
  $st->execute();
  $st->bind_result($email);
  $st->store_result();
  $r_num=$st->num_rows;
if ($r_num==0) {

  $st->close();
  $st=$conn->prepare($INSERT);
  $st->bind_param("sssii",$fname,$lname,$email,$mobile,$sex);
  $st->execute();

  header("location:index.php");


  echo 'alert("successfully Added")';

}else {
  // code...
  echo '<script language="javascript">';
  echo 'alert("Use Another Email Address")';
  echo '</script>';

}
$conn->close();
$st->close();
}
}
else{
   echo "<b>All fields are required</b>";

 }



 ?>
