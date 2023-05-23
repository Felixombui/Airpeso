<?php

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
	
	<nav>
        <ul>
		<div class="menu">
		<a href="index.php">Home</a>
	</div>
	<div class="menu">
            <li><a href="#section1">About us</a></li>
</div>
<div class="menu">
            <li><a href="#section2">Blogs</a></li>
</div>
<div class="menu">
            <li><a href="#section3">Contact Us</a></li>
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
		
</div>
	</div>
        </ul>
    </nav>
	
	
		
	
	
	<div style="float:right;"><?php echo $_SESSION['userdetails'] ?> <a href="logout.php">Logout</a></div>	
	
</nav>
<main>
	

    <section id="About us">
        <h2><a href="program.php">About Us</a></h2>
        <p>
<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	
	
</head>

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
    
    
    
        
            <h2>Featured Kids</h2>
			<div class = "card">
				            <p>We believe in showcasing kids who have made significant progress in developing their talents, gifts, or entrepreneurial spirit. Here are some of the kids we've featured:</p>
</div>
    
</body>
</html>

</p>
    </section>

    <sectionone id="section2">
        <h2><a href="program.php">Blogs</a></h2>
        <p>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 
  <div class ="card">
 
 
  <body>
    <h1>Child Financial Literacy</h1>
    <h2>Budgeting</h2>
    <p>Teaching children about creating a budget and tracking their spending is an important part of financial literacy. A blog post could cover topics like setting financial goals, creating a budget, and tracking expenses.</p>
    
    <h2>Saving and Investing</h2>
    <p>Children can be taught the importance of saving money and investing for the future. A blog post could explain different types of savings accounts, such as a piggy bank or a savings account at a bank, as well as introduce them to basic investment concepts like compound interest and diversification.</p>
    
    <h2>Earning Money</h2>
    <p>Another aspect of financial literacy is teaching children about how to earn money. A blog post could cover topics such as how to start a small business, how to earn money through chores or odd jobs, and how to manage earnings responsibly.</p>
    
    <h2>Financial Responsibility</h2>
    <p>Children can be taught about the importance of being financially responsible. A blog post could cover topics like the consequences of not paying bills on time, the benefits of good credit, and how to avoid debt.</p>
    
    <h2>Giving Back</h2>
    <p>Financial literacy can also include teaching children about the importance of giving back to their community. A blog post could highlight the different ways children can give back, such as donating money or volunteering their time.</p>
    
    <h2>Financial Terminology</h2>
    <p>Children can be taught the basic terminology associated with money management, such as interest rates, credit scores, mortgages, loans, etc.</p>
    
    <h2>Online Safety</h2>
    <p>Online safety is an important topic for children to understand when dealing with money. A blog post could cover topics like the importance of keeping personal information secure, how to identify phishing scams, and how to protect against identity theft.</p>
 

</div>

  
</body>
</html>



    </section>

   
</div>

<sectionone id="section3">
        <h2><a href="program.php">Contact Us</a></h2>
        <p>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	
	
</head>


<body>
<img src="images/contact.png" width="350" height="100%" align="left">
<img src="images/logo.png" width="350" height="100%" align="right">
	<div class="nn">

	
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
	
	
    </section>
	<footer>
		<p>&copy; 2023 Felloh Tech. All Rights Reserved.</p>
	</footer>
	
</main> 

<script>
        // Smooth scrolling effect
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</html>

		<?php
include 'styles.html';
?>