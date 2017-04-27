
		<!DOCTYPE html>
		<html>
		<style>
		/* Full-width input fields */
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

/* Set a style for all buttons */
button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
	padding: 14px 20px;
	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
	float: left;
	width: 50%;
}

/* Add padding to container elements */
.container {
	padding: 16px;
}

/* Clear floats */
.clearfix::after {
	content: "";
	clear: both;
	display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
	.cancelbtn, .signupbtn {
		width: 100%;
	}
}
</style>
<body>

<h2>Signup Form</h2>

 <form method="post" action="validate_login.php" >

<div class="container">
<label><b>User Name</b></label>
<input type="text" placeholder="Enter Name" name="username" required>

<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>

<label><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<input type="checkbox" checked="checked"> Remember me

<div class="clearfix">
<button type="button" class="cancelbtn">Cancel</button>
 <input name="action" type="hidden" value="signup" />
<button type="submit" class="signupbtn">Sign Up</button>
</div>
</div>
</form>

</body>
</html>