<?php

session_start();

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

/*$srn=$_POST['srn'];*/
$gender=$_POST['gender'];
$language=$_POST['language'];
$food=$_POST['food'];
$region=$_POST['region'];
$time=$_POST['time'];
$loud=$_POST['loud'];
$leisure=$_POST['leisure'];
$relationship=$_POST['relationship'];
$share=$_POST['share'];
$clean=$_POST['clean'];
$friends=$_POST['friends'];
$person=$_POST['person'];
$snore=$_POST['snore'];


	$qy= "insert into question values('$gender','$language','$food','$region','$time','$loud','$leisure','$relationship','$share','$clean','$friends','$person','$snore')";
	mysqli_query($con,$qy);


?>