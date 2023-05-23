<?php
session_start();
if(empty($_SESSION['userdetails'])){
	header('location:login.php');
  }
?>

<nav>
	<div class="menu">
		<a href="program.php">Home</a>
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

	<div class="hero">
		<div class="blink"><h1>Empowering the Future through Financial Literacy</h1></div>
		
		<p>Airpeso provides free and premium programs for experts to teach kids about financial literacy. We also feature children who have made significant progress in developing their talents, gifts, or entrepreneurial spirit.</p>
		<a href="#" class="cta-button">Get Started</a>
	</div>
</header>

