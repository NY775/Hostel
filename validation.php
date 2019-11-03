<?php

session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con)
{
	echo "connection successful";
}
else
{
	echo "connction not established";
}

mysqli_select_db($con,'mini');

$name=$_POST['name'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$pass=$_POST['password'];

$q = "select * from signup where email='$email' && password='$pass' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $email;
	header('location:home.php');

}
else
{
	header('location:signup.php');
}

?>