<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>myKitchen</title>
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<script type="text/javascript">
function validateForm() {
  if (document.forms.login.Name.value == "") {
    alert("Username must be filled out");
    return false;
  }
  if (document.forms.login.Password.value=="") {
    alert("Password must be filled out");
    return false;
  }
  return true;
}
</script>
<!-- css files -->
</head>

<body>
	<div class="Mykitchen">
		<h1>myKitchen</h1>
	</div>
<div class="main-agileits">
	<h2 class="sub-head">Login</h2>
		<div class="sub-main">
			
			<form name="login" action="login.php" onsubmit="return (validateForm());" method="post">
				<input placeholder="Username" name="Name" type="text" >
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
          
				<input  placeholder="Password" name="Password"  type="password" >
					<span class="icon2"><i class="fa fa-lock" aria-hidden="true"></i></span><br>
          
				 <input type="submit" value="Login" name="login">
         <input type="submit" value="Login as Admin" name="admin">
        <?php include('errors.php'); ?>
			</form>
			<a href="signup.php">Create Account</a>
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
