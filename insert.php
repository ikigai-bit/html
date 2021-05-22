<?php
$conn=$mysqli_connect("sql6.freemysqlhosting.net","sql6413889","KzHb8YQ2fA","User_Management");
$fname=$_REQUEST['First Name'];
$lname=$_REQUEST['Last Name'];
$email=$_REQUEST['E-Mail'];
$sql="INSERT INTO examniee VALUES('$fname','$lname','$email')";
if(mysqli_query($conn,$sql)){
    echo"Store";
}

?>