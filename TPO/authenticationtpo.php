<?php
include('../connection.php');
$username = $_POST['tpo'];
$password = $_POST['pass'];
  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM TPO WHERE OFFICER_NAME = '$username' AND OFFICER_PASSWORD = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center> Login successful </center></h1>";
    header("refresh:2; url=home.php");
	exit();
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
    header("refresh:2; url=logintpo.php");
	exit();
}  
?>  