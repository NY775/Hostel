<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<div class="intro">

				<img src="rm1.jpg" alt="Smiley face" height="100" width="330">
				


	<p > Hello <?php echo  $_SESSION['username'];?></p>
<form name="q" action="logout.php" method="post">
	<input type="submit" name="logout" value="logout " >  
</form>	

</div>

<div class="mid">
	<p>  Kindly answer the following questions.</p>
	
	
    <form name="q" action="kyu.php" method="post">
	<div class="first">
	

<p>What is your gender?<br>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
</p>



</div>
<div class="second">

	
<p>Which language do you like to communicate in ?<br>
<input type="radio" name="language" value="english"> English
<input type="radio" name="language" value="hindi"> Hindi
<input type="radio" name="language" value="kannada"> Kannada
<input type="radio" name="language" value="others"> Others
</p>
	


</div>
<div class="third">

<p>Your food preference is ?<br>
<input type="radio" name="food" value="veg"> Vegetarian 
<input type="radio" name="food" value="nonveg"> Non-Vegetarian

</p>

</div>



<div class ="four">

<p>You are from which region ?<br>
<input type="radio" name="region" value="north"> North
<input type="radio" name="region" value="South"> South
<input type="radio" name="region" value="East"> East
<input type="radio" name="region" value="West"> West
<input type="radio" name="region" value="Foreign"> Foreign

</p>

</div>

<div class="fifth">

<p>Which time do yo prefer for studying ?<br>
<input type="radio" name="time" value="Day"> Day Time 
<input type="radio" name="time" value="night"> Night Time

</p>

</div>
<div class="sixth">

<p>Do you like playing loud music at night ?<br>
<input type="radio" name="loud" value="Yes"> Yes 
<input type="radio" name="loud" value="No"> No

</p>
	


</div><div class="seven">


<p>How do you like to spend your leisure time ?<br>
<input type="radio" name="leisure" value="Playing"> Playing
<input type="radio" name="leisure" value="Chatting"> Chatting
<input type="radio" name="leisure" value="tv"> T.V
<input type="radio" name="leisure" value="Going"> Going Out
</p>
	
</div>
<div class="eight">


<p>What kind of relationship do you want with your roommate ?<br>
<input type="radio" name="relationship" value="Close"> Close friends
<input type="radio" name="relationship" value="get along"> Get Along friends
</p>

</div>
<div class="nine">

<!--	<form action="//www.html.am/html-codes/forms/html-form-tag-action.cfm" > -->
<p>Do you like to share your things with your roommate ?<br>
<input type="radio" name="share" value="Yes"> Yes 
<input type="radio" name="share" value="No"> No

</p>

</div>
<div class="ten">


<!--	<form action="" > -->
<p>Do you like to keep your room ?<br>
<input type="radio" name="clean" value="Messy"> Messy
<input type="radio" name="clean" value="Neat"> Neat

</p>

</div>


<div class="eleven">
<!--	<form action="//www.html.am/html-codes/forms/html-form-tag-action.cfm" > <-->
<p>Do you bring over your friends to your room ?<br>
<input type="radio" name="friends" value="Yes"> Yes 
<input type="radio" name="friends" value="No"> No

</p>
<!--</form>-->	
</div>
<div class="twelve">
<!--	<form action="//www.html.am/html-codes/forms/html-form-tag-action.cfm" > -->
<p>Are you an ?<br>
<input type="radio" name="person" value="Introvert"> Introvert 
<input type="radio" name="person" value="Extrovert"> Extrovert

</p>
<!--</form> -->	

</div><div class="thirteen">
<!-- <form action="//www.html.am/html-codes/forms/html-form-tag-action.cfm" > -->
<p>Do you snore while sleeping ?<br>
<input type="radio" name="snore" value="Yes"> Yes 
<input type="radio" name="snore" value="No"> No

</p>
</div>

<div class="zero">
            <p>Please enter your SRN

           <input type="text" name="srn" placeholder="Enter your srn ">
       </p>
           
    </div>

 <input type="submit" name="submit" value="Submit " >  
</form>	

</div>
</body>
</html>