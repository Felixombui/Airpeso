
<?php
//session_start();
if(isset($_POST['submit'])) {
    // Handle email subscription form submission here
//
}

?>
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
<!DOCTYPE html>
<html>
<head>
	<title>About Us | Airpeso</title>
	
</head>
<body>

    <div class="container">
    <img src="images/about.png" width="350" height="100%" align="left">
	
	
        <div class ="card">
		<p>Airpeso is an organization focused on achieving the unexpected in fields that are often neglected, causing suffering to businesses and individuals due to a lack of dependable expertise.</p>
		<h2>What Solutions Are We Bringing?</h2>
		<p>We work as a team and brainstorm the best solutions that deliver the highest level of quality expected by our clients. For now, we are particularly focusing on kids' financial literacy. Why kids first? Because that is where the future is, and kids aged from 8-17 will benefit best from our programs. By empowering young people, we are empowering our future.</p>
		<h2>Join Our Waitlist</h2>
		<p>Be the first to know when we get started by joining our waitlist below:</p>
		<form method="post">
			<input type="email" name="email" placeholder="Enter your email address" required>
			<input type="submit" name="submit" value="Join Waitlist">
		</form>
	</div>
	<div class="container">
            <h2>At Airpeso;</h2>
            <p>At Airpeso, we offer free and premium programs designed to teach kids about financial literacy. Our programs are created by experts and provide interactive learning experiences for kids of all ages.</p>
            <div class="program-cards">
                <div class="card">
                <img src="images/program1.png" alt="Program 1">
                    <h3>Basic Financial Literacy</h3>
                    <p>Our basic financial literacy program covers key financial concepts and skills that every kid should know. The program is designed for kids aged 8-10 and is free to access.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
                <div class="card">
                    <img src="images/program2.png" alt="Program 2">
                    <h3>Advanced Financial Literacy</h3>
                    <p>Our advanced financial literacy program covers more advanced financial concepts and skills. The program is designed for kids aged 11-14 and is available for a small fee.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
                <div class="card">
                    <img src="images/program3.png" alt="Program 3">
                    <h3>Entrepreneurship</h3>
                    <p>Our entrepreneurship program teaches kids how to start and run their own businesses. The program is designed for kids aged 15-17 and is available for a small fee.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
        </div>
    
    
    
        <div class="card">
        <div class="container">
            <h2>Featured Kids</h2>
            <p>We believe in showcasing kids who have made significant progress in developing their talents, gifts, or entrepreneurial spirit. Here are some of the kids we've featured:</p>
</div>
    <footer>
		<p>&copy; 2023 Felloh Tech. All Rights Reserved.</p>
	</footer>
</body>
</html>
<?php
include 'styles.html';
?>
