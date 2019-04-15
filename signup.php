<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>myKitchen</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript">
function validateForm() {
  if (document.forms.signup.Name.value == "") {
    alert("Username must be filled out");
	document.forms.signup.Name.focus();
    return false;
  }
  atpos = document.forms.signup.mail.value.indexOf("@");
  dotpos = document.forms.signup.mail.value.lastIndexOf(".");
  if (document.forms.signup.mail.value == "" ) {
    alert("Email must be filled out");
    return false;
  }
  if (atpos<1||( dotpos - atpos < 2 ) ){
    alert("Email isn't correct!!");
    return false;
  }
  if (document.forms.signup.Password.value=="") {
    alert("Password must be filled out");
    return false;
  }
  if (document.forms.signup.Cpassword.value=="") {
    alert("Confirm Password must be filled out");
    return false;
  }
  if (document.forms.signup.Cpassword.value!=document.forms.signup.Password.value) {
    alert("Confirm Password dosen't match!!");
    return false;
  }
  return true;
}
</script>
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div class="Mykitchen">
		<h1>myKitchen</h1>
	</div>
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="signup.php" name="signup" onsubmit="return (validateForm());" method="post">
        

				<input placeholder="Username" name="Name" type="text" value="<?php echo $username; ?>" >
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
					
				<input placeholder="Email" name="mail" type="text"value="<?php echo $email; ?>" >
					<span class="icon2"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
					
				<input  placeholder="Password" name="Password" type="password" value="<?php echo $password_1; ?>">
					<span class="icon3"><i class="fa fa-lock" aria-hidden="true"></i></span><br>
					
				<input  placeholder="Confirm Password" name="Cpassword" type="password" value="<?php echo $password_2; ?>">
					<span class="icon4"><i class="fa fa-lock" aria-hidden="true"></i></span><br>	
				<input type="submit" value="sign up" name="signUp">
        <?php include('errors.php'); ?>
			</form>
      <a href="login.php">I have an account already</a>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer
<div class="footer-w3">
	<p></p>
</div>
<!--//footer-->

</body>
</html>

