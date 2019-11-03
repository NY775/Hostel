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
$srn=$_POST['srn'];

$q = "select * from signup where name='$name' && branch='$branch' && year='$year' && email='$email' && password='$pass' && srn='$srn' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo " <br> Sorry! This User already exists";

}
else
{
	$qy= "insert into signup (name,branch,year,email,password,srn)values('$name','$branch','$year','$email','$pass','$srn')";
	mysqli_query($con,$qy);
}

?>