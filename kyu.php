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
$srn=$_POST['srn'];



	$qy= "insert into kyu values('$gender','$language','$food','$region','$time','$loud','$leisure','$relationship','$share','$clean','$friends','$person','$snore','$srn')";
	mysqli_query($con,$qy);
	
	$_SESSION['gender'] = $gender;
	$_SESSION['language'] = $language;
	$_SESSION['food'] = $food;
	$_SESSION['region'] = $region;
	$_SESSION['time'] = $time;
	$_SESSION['loud'] = $loud;
	$_SESSION['leisure'] = $leisure;
	$_SESSION['relationship'] = $relationship;
	$_SESSION['share'] = $share;
	$_SESSION['clean'] = $clean;
	$_SESSION['friends'] = $friends;
	$_SESSION['person'] = $person;
	$_SESSION['snore'] = $snore;
	header('location:search.php');

?>