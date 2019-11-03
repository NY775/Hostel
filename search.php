<?php 
session_start();



$con = mysqli_connect('localhost','root');
if($con)
{
	echo " <br>";
}
else
{
	echo "connction not established";
}

mysqli_select_db($con,'mini');

function getName($sr)
{
	global $con;
	$sql = mysqli_query($con,"select name, email from signup where srn = '$sr'");
	$srn_arr=mysqli_fetch_array($sql,MYSQLI_NUM);
	return ucfirst($srn_arr[0])." - ".$srn_arr[1];
}

$gender = $_SESSION['gender'];
$language =$_SESSION['language'];
$food =	$_SESSION['food'];
$region = $_SESSION['region'];
$time = $_SESSION['time'];
$loud = $_SESSION['loud'];
$leisure = $_SESSION['leisure'];
$relationship = $_SESSION['relationship'];
$share = $_SESSION['share'];
$clean = $_SESSION['clean'];
$friends = $_SESSION['friends'];
$person = $_SESSION['person'];
$snore = $_SESSION['snore'];

$q= "Select * from kyu where gender = '$gender' and language = '$language' and food = '$food' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore' " ;
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num > 1)
{
	echo "<br>" ;
	//echo "Congratulations! <br>";
	
?>
	<html>
	<body bgcolor="black" background="back3.jpg">
	
	<style>
		.four{background:transperent;
		border: solid grey 2px ;
		border-radius: 15px;
		height:350px;
		width:700px;
		margin-left:250px;
		margin-top:100px;
		padding:25px;
		     font-family:monospace;
			 font-size:25px;
			 color:#1d8ece;}
	</style>
	
	<tr>
		<th>
			
		<h1 class="four" align = "center" > Congratulations!<br></br> 	<?php echo $num-1?> students answered all <mark>13</mark> questions same as you   <br></br>
				<?php
				echo " matched srn and your srn  are  :  <br>";
				while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$asrn = $arr['srn'];
					echo getName($asrn)."(".$arr['srn'].")<br/>";
				}
				?>
</h1>				
		</th>
	</tr>
	
	</html>	
<?php	
}
else
{
$q1 = "Select * from kyu where (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends'  and snore='$snore')  OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean'  and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share'  and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship'  and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure'  and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud'  and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time'  and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region'  and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language'  and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and  region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore')" ;
$result = mysqli_query($con,$q1);

$num1 = mysqli_num_rows($result);

if($num1 > 1)
{
	echo "<br>" ;
	//echo "Congratulations! <br>" ;

?>
	<html>
	<body bgcolor="black" background="back3.jpg">
	
	<style>
		
		
		.one{background:transperent;
		border: solid grey 2px ;
		border-radius: 15px;
		height:350px;
		width:700px;
		margin-left:250px;
		margin-top:100px;
		padding:25px;
		     font-family:monospace;
			 font-size:25px;
			 color:#1d8ece;
			 }
	
			 
			
		</style>	
		
	
	<tr>
		<th>
			   
				<h1 class="one" align = "center" > Congratulations!<br></br>   <?php echo $num1-1?>     students answered all <mark>12</mark> questions same as you   <br></br>   
				<?php
				echo " matched srn and your srn  are :<br> ";
				while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$asrn = $arr['srn'];
					echo getName($asrn)."(".$arr['srn'].")<br/>";
				}
				?></h1>  <br></br> 
				
		</th>
	</tr>
	
	
</html>	
<?php		
	
}
else
{
	$q2 = "Select * from kyu where (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean'  and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and  person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship'  and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure'  and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region' and time = '$time' and loud = '$loud'  and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language' and region = '$region'  and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (gender = '$gender' and language = '$language'  and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore')  OR (gender = '$gender'  and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore') OR (  region = '$region' and time = '$time' and loud = '$loud' and leisure = '$leisure' and relationship='$relationship' and share='$share' and clean='$clean' and friends='$friends' and person='$person' and snore='$snore')  " ;
   $result = mysqli_query($con,$q2);

$num2 = mysqli_num_rows($result);

if($num2 > 1)
{
	echo "<br>" ;
	//echo "Congratulations! <br>";
	
	?>
	<html>
	<body bgcolor="black" background="back3.jpg">
	
	<style>
	.two{background:transperent;
		border: solid grey 2px ;
		border-radius: 15px;
		height:350px;
		width:700px;
		margin-left:250px;
		margin-top:100px;
		padding:25px;
		     font-family:monospace;
			 font-size:25px;
			 color:#1d8ece;};
	</style>
	
	<table>
	<tr>
		<th>
			   
				<h2 class="two" align = "center" > Congratulations!<br></br>   <?php echo $num2-1?>     students answered all 11 questions same as you <br></br>
				<?php
				echo " matched srn and your srn  are : ";
				while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$asrn = $arr['srn'];
					echo getName($asrn)."(".$arr['srn'].")<br/>";
				}
				?>	
				</h2>  <br></br> 
		</th>
	</tr>
	</table>
	
</html>	
<?php		

		
}
else
{
?> 
	<html>
	<body bgcolor="black" background="back3.jpg">
	
	<style>
	.three{background:transperent;
		border: solid grey 2px ;
		border-radius: 15px;
		height:200px;
		width:500px;
		margin-left:460px;
		margin-top:100px;
		padding:20px;
		     font-family:monospace;
			 font-size:30px;
			 color:#1d8ece};
	
	</style>
	<tr>
		<th>
			   
				<h3 class="three" align = "center" >  Sorry ! Currently you have no compatible matches  </h3>  <br></br> 
		</th>
	</tr>
	
	
</html>	

<?php	
}
}


}

?>
