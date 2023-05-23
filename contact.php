<?php
session_start();
if(empty($_SESSION['userdetails'])){
	header('location:login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	
	
</head>
<nav>
	<div class="menu">
		<a href="index.php">Home</a>
	</div>
	<div class="menu">
		<a href="aboutus.php">About Us</a>
	</div>
	<div class="menu">
		<div class="dropdown"><a href="program.php">Programs</a><span class="dropdowntext">
			<table width:"100%">
  				<tr><td><a href="">Airpeso Mentorship Program</a></td></tr>
				<tr><td><a href="">Financial Interactive Activities</a></td></tr>
				<tr><td><a href="">Financial Games</a></td></tr>
				<tr><td><a href="">Airpeso Extra Magazine</a></td></tr>
				<tr><td><a href="">Budgeting</a></td></tr>
				<tr><td><a href="">Giving Back</a></td></tr>
				<tr><td><a href="">Financial terminology</a></td></tr>
				<tr><td><b>Premium Programs</b></td></tr>
				<tr><td><a href="">Financial Literacy Courses <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">Virtual Financial Coaching <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">MyGoals Tracker <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">MyKid's Store <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">Saving and Investing <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">Earning money <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
				<tr><td><a href="">Financial responsibilities <img src="images/lock.png" width="23" height="23" align="right"></a></td></tr>
			</table>
		</span></div>
		<!--<a href="program.php">Programs</a>
		<ul>
			<li>Program 1</li>
			<li>Program 2</li>
		</ul>-->
	</div>
	<div class="menu">
		<a href="blog.php">Blogs</a>
	</div>
	<div class="menu">
		<a href="contact.php">Contact Us</a>
	</div>
	<div style="float:right;"><?php echo $_SESSION['userdetails'] ?> <a href="logout.php">Logout</a></div>	
	
</nav>

<body>
<img src="images/contact.png" width="350" height="100%" align="left">
<img src="images/logo.png" width="350" height="100%" align="right">
	<div class="nn">

	<main>
		<form>
			
			<div class="card" style="margin-top:15%;width:50%;">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Your Name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Your Email" required>
			<label for="message">Message:</label>
			<textarea id="message" name="message" placeholder="Your Message" required></textarea>
			<button type="submit">Send</button>
			</div>
			
		</form>
	</main>
	<footer>
		<p>&copy; 2023 Felloh Tech. All Rights Reserved.</p>
	</footer>
</div>
</body>
</html>
<?php
include 'styles.html';
?>