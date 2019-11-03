<!DOCTYPE html>
<html>
	<head>
		<title> login </title>
		<link rel="stylesheet" href="login.css">
		<style>
			nav ul {
					float:right;
					margin:15px;
					list-style-type:none;
					background-color:royalblue;
					padding:15px;
					
					border-radius:30px;
			}
			a:link{
					text-decoration:none;
					font-family:verdona;
					color:white;
					font-family: sans-serif;
			}
			 nav,ul:hover{
				cursor:pointer;
				background:#39dc79;
				
			}
					
			</style>
	</head>
		<body>
				<article>
	<nav>
		<ul>
			<li><a href="aboutus.html" target="_self" title="learn about our team"style="color:white;">ABOUT US</a></li>
		</ul>
	</nav>
</article>
			<div class="intro">

				<img src="rm1.jpg" alt="Smiley face" height="100" width="330">
				<p> find<br> great<br> roommates<br> to share<br> a room<br> with. </p>


			</div>

		<div class="login-box">
			<h1>LOGIN</h1>
			<img src="ava2.png" class="avatar">
        
            <form  name="ss" action="valid.php" method="post" >
            <p>Username</p>
            <input type="text" name="email" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input  type="submit" name="log in" value="Log in">
            
              
            </form>
            <form  name="ss" action="sup.php" method="post" >
            	<input  class="sign" type="submit" name="submit" value="Sign Up">
            </form>
            
        </div>

		</body>



</html>