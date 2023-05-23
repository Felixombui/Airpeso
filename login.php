<?php
include 'config.php';
if(isset($_POST['login'])){
	$emailaddress=CleanData($_POST['emailaddress']);
	$password=CleanData($_POST['password']);
	$loginqry=mysqli_query($config,"SELECT * FROM users WHERE email='$emailaddress' AND `password`='$password'");
	if(mysqli_num_rows($loginqry)>0){
		$loginrow=mysqli_fetch_assoc($loginqry);
		session_start();
		$_SESSION['userdetails']=$loginrow['firstname'].' '.$loginrow['lastname'];
		$_SESSION['emailaddress']=$loginrow['emailaddress'];
		header('location:program.php');
	}else{
		echo 'Failed';
	}
}
?>
<div class="card" style="margin-top:15%;width:50%;">
<form method="post">
	<input type="email" name="emailaddress" placeholder="Enter your email address">
	<input type="password" name="password" placeholder="Enter your password">
	<input type="submit" name="login" value="Login">
	<a href="recover.php">Forgot Password?</a><p>
	<p>No account? <span class="fancybutton"><a href="signup.php" style="color:white;">Signup Now</a></span></p>
</p>
</form>
</div>
<?php
include 'styles.html';
?>