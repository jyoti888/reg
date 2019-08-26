<?php 
include ('conn.php'); 
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="heading">
			<h2> Registration Form</h2>
		</div>

			<form method="post" action="">
				<div class="smile">
					Username:<input type="text" name="username" placeholder="Username"><br><br>
			   </div>

			   <div class="smile">
					Email id:<input type="email" name="emailid" placeholder="Email"><br><br>
			   </div>

			   <div class="smile">
					Password:<input type="password" name="password" placeholder="Password"><br><br>
			   </div>

			   <div class="smile">
					Confirm Password:<input type="password" name="confirmpass" placeholder="Confirm Password"><br><br>
			   </div>

	  			<div class="personal">
	  				<h3>Personal Details:</h3>
	  			</div>

	  			<div class="smile">
	  				First Name:<input type="text" name="firstname"><br><br>
	  			</div>

	  			<div class="smile">
	  				Last Name:<input type="text" name="lastname"><br><br>
	  			</div>

	  			<div class="smile">
	  				Address:<textarea name="address"></textarea>
	  			</div><br>

	  			<div class="smile">
	  				Phone NO:<input type="number" name="phoneno"><br><br>
	  			</div>
	  					
	  			<div class="smile">	
	  				Male:<input type="radio" name="gender" value="male">
 					Female:<input type="radio" name="gender" value="female"><br><br>
 				</div>

 				<div class="smile">
 				 	Birth Date:<input type="date" name="bday"><br><br>
 				 </div>

 				 <div class="smile">
 				 	Country:<select name="country" required>
					<option>India</option>
					<option>Pakistan</option>
					<option>USA</option>
					<option>France</option>
					<option>Brazil</option>
					<option>China</option>
					<option>Japan</option>
					</select></br></br>
				</div>

  				<div class="smile">
					<button type="submit" name="submit">Submit</button>
				</div>
	</form>
</body>
</html>