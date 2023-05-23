<?php
//include 'header.php';
include 'config.php';

if(isset($_POST['subscribe'])){
  //CHECK WHETHER EMAIL IS SUBSCRIBED
  $emailaddress=CleanData($_POST['email']);
  $sqry=mysqli_query($config,"SELECT * FROM subscription WHERE emailaddress='$emailaddress'");
  if(mysqli_num_rows($sqry)>0){
    $info='<div style="border:1px solid orange;background-color:cyan;padding:6px;margin-top:6px;">You are already subscribed!</div>';
  }else{
    mysqli_query($config,"INSERT INTO subscription(emailaddress) VALUES('$emailaddress')");
    $info='<div style="border:1px solid orange;background-color:cyan;padding:6px;margin-top:6px;">Thank you for subscribing to our Newsletter!</div>';
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airpeso - Financial Literacy for Kids</title>

    <nav>
	<div class ="pop">
<button name ="Become our Sponsor"style="background-color: blue; color: white;font-weight: bold; font-size:200px border: none; padding: 10px 20px; border-radius: 5px;"
	onmouseover="this.style.backgroundColor='green'; this.innerText='Help us achieve our mission by sponsoring us!';"
	onmouseout="this.style.backgroundColor='red'; this.innerText='Become our Sponsor!';"
	onclick="showPopup();">
	Become our Sponsor!
</button>

<script>
	var timeOnPage = 0;
	setInterval(function() {
		timeOnPage += 6;
		if (timeOnPage % 360 == 0) {
			showPopup();
		}
	}, 1000);

	function showPopup() {
		var popup = confirm("Join us in making a difference. Become a sponsor today.");
		if (popup == true) {
			displaySponsorshipInfo();
		}
	}

	function displaySponsorshipInfo() {
		alert("Support Airpeso and Empower the Future\n\nAt Airpeso, we believe in the power of financial literacy and nurturing talents in children to shape a brighter tomorrow. We are proud to offer a wide range of both free and premium services, ensuring that every child has access to the resources they need, regardless of their background or financial means. To continue our mission, we are seeking support from generous individuals and organizations who share our vision.\n\nWhy Support Airpeso?\nBy becoming a sponsor, you'll play a vital role in helping us:\n\n1. Expand our free services: Your support will allow us to offer more free programs to children who cannot afford premium services, giving them an equal opportunity to learn and grow.\n2. Enhance our offerings: We are dedicated to providing the best resources for children. Your contributions will help us improve and innovate our existing services to better cater to their needs.\n3. Reach more communities: With your help, we can extend our reach to underprivileged communities, empowering more children with the knowledge and skills they need for a successful future.\n\nSponsorship Tiers\nWe are currently looking to raise $20,000 in sponsorship, and we offer multiple tiers to suit your preferred level of support:\n\n1. Bronze Sponsor ($500): Receive recognition on our website and in our annual report.\n2. Silver Sponsor ($1,000): All Bronze benefits, plus your logo displayed on our promotional materials.\n3. Gold Sponsor ($2,500): All Silver benefits, plus a spotlight feature on our website and social media channels.\n4. Platinum Sponsor ($5,000): All Gold benefits, plus an invitation to exclusive Airpeso events and the opportunity to co-create custom programs.\n5. Flexible Support: We also welcome contributions of any amount, and every dollar makes a difference in helping us achieve our mission.\n\nHow to Become a Sponsor\nReady to join our mission? Follow these easy steps:\n\n1. Click the 'Become Our Sponsor' button.\n2. Select your desired sponsorship tier or enter a custom amount.\n3. Complete the secure payment process.\n\nYour generous contribution will have a lasting impact on the lives of countless children. We thank you for your support in helping us create a brighter future for all.\n\nAirpeso - Empowering the Next Generation, One Child at a Time.");
	}
</script>
</div>

	<div class="hero">
		<div class="blink"><h1>Empowering the Future through Financial Literacy</h1></div>
    <img src="images/logo.png" width="350" height="100%" align="right">
		<p>Airpeso provides free and premium programs for experts to teach kids about financial literacy. We also feature children who have made significant progress in developing their talents, gifts, or entrepreneurial spirit.</p>
		<a href="login.php" class="cta-button">Sign in to Get Started</a>
	</div>
</header>

       <main>
      <div class ="card">
      <sectionone class="features" style="float:left;">
        <h2>What We Offer At Airpeso:</h2>
        <ul>
          <li>
            <h3>Financial Education</h3>
            <p>
              Our website is packed with articles, guides, and resources that
              will help you learn about personal finance, investing, and more.
            </p>
          </li>
          <li>
            <h3>Community Support</h3>
            <p>
              Join our community of like-minded individuals who are on the same
              financial journey as you. Ask questions, share your successes,
              and get support when you need it.
            </p>
          </li>
          <li>
            <h3>Financial Tools</h3>
            <p>
              Use our financial calculators, budgeting tools, and other
              resources to help you make informed financial decisions and stay
              on track.
            </p>
          </li>
        </ul>
      </section>
      <sectionone class="newsletter">
        <h2>Join Our Newsletter</h2>
        <p>
          Sign up for our newsletter to get the latest financial tips, news,
          and resources delivered straight to your inbox.
        </p>
        <form method="post">
          <input type="email" name="email" placeholder="Enter Your Email address" required="required" />
          <button type="submit" name="subscribe">Subscribe</button>
          <?php echo $info ?>
        </form>
      </section>
    
<?php

?>
</main>
       
         
</boby>

</html>
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

<?php
include 'styles.html';
?>
                    