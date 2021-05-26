<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>STUDENT MANAGEMENT SYSTEM</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="icon" href="http://4.b.com/-oVHSFHrpwIQ/VPAiCKG2BCOLLEGE,%2BTHIRVANNAMALAI.png" type="image/png" sizes="16x16">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
		<script>
			function myFunction()
			{
				alert("welcome");
			}
		</script>
	</head>
	<body>

	<div align="left" class="span2">
	<br><br><br><br><br><br><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <!--<img height="240" width="420" src="images/sastha.png">-->
	</div>

	<div align="left" class="span1">
	<br><br><br><br><br><br><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!--	<img height="240" width="420" src="images/gateway.png">-->
	</div>






			<!--start-login-form-->
			<div class="login-form">
					<h1>Admin login</h1>
						<form method="post" action="../pages/login.php">
							<span>
								<input type="text" name="username" class="user" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
							</span>
							<span>
					        	<input type="password" name="password" class="lock" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
					        </span>
							<div class="submit">
								<input type="submit" onclick="myFunction()" value="LOGIN" / >
							</div>
							<!--<div class="Remember-me">
								<span class="col_checkbox">
									<input id="10" class="css-checkbox10" type="checkbox">
									<a href="#">Remember me</a>
								</span>
								<span class="forget-pass">
									<a href="#">Forgot password?</a>
								</span>
									<div class="clear"> </div>
							</div>-->

						</form>
						<!---start-copy-right---->
						<div class="copy-right">
							<p>  <a href="">A Next Generation Student Information System</p>
						</div>
				<!---End-copy-right---->
			</div>
			<!--//End-login-form-->
<?php
session_start();
unset($_SESSION['deptname']);
?>

	</body>
</html>
