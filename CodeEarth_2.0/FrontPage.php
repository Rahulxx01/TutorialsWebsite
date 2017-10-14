<html>
<head>
<title>Name of website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="FrontPage.css">
</head>
<body>
<div class="header">
    <h1>Code Earth</h1>
    <div class="login">
        <a class="button" href="loginpage.php">Login</a></li>
    </div>
</div>
<div class="container">
<h1 align="center" class="S1">Create your Learning Account</h1>
</div>
<div class="MainContainer">
	<div class="SignUpForm" >
		<form  name="SignUp" onsubmit="validateForm()">
		<h4>Name:<br>
			<input type="text" size="18" name="Firstname" placeholder="First Name"/>
			<input type="text" size="18" name="Lastname" placeholder="Last Name"/>
		</h4>
		<h4>Username:<br><input type="text" size="40" name="Username" placeholder="Username"/></h4>
		<h4>Password :<br><input type="password" size="40" name="Password" placeholder="Password"/></h4>

		<h4>Confirm Password :<br><input type="password" size="40" name="ConfirmPassword" placeholder="Renter password"/></h4>
		<h4>Email address:<br><input type="text" size="40" name="Email" placeholder="example@gmail.com"/></h4>
		<h4>Gender:<br><input type="radio" name="Gender" value="A" checked/>Male 
			<input type="radio" name="Gender" value="B"/>Female

			<input type="radio" name="Gender" value="C"/>other
		</h4>
		<h4>Birthday:<br>
		<select name="DOBMonth" >
			<option> - Month - </option>
			<option value="January">January</option>
			<option value="Febuary">Febuary</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>
		<input type="text" size="8" name="d1" maxlength="2" placeholder="Day" />	
		<input type="text" size="14" name="y1" maxlength="4" placeholder="Year" />
		
		</h4>
		<h4>Phone Number:<br>
			<input type="text" size="40" name="Phonenumber" placeholder="Phone number"/>
		</h4>
		<h4>College name:<br>
			<input type="text" size="40" name="CollegeName" placeholder="College name"/>
		</h4>
		
		<input class="submitButton" type="submit" value="Create an Account"/>
		
	</div>
	<div class="Side">
		<h2 class="S2" align="center">One account is all you need</h2>
		<h4 class="S2" align="center">One free account gets you to learn everything about Programming.</h4>
		
		
	</div>

</div>

<script type="text/javascript">
function validateForm(){
	if(document.SignUp.Firstname.value==""){
		alert("Firstname not written");
		
	}
	if(document.SignUp.Lastname.value==""){
		alert("Lastname not written");
		
	}
	if(document.SignUp.Username.value==""){
		alert("Username not written");
		
	}
	if(document.SignUp.Password.value==""){
		alert("password not written");
		
	}
	if(document.SignUp.Password.value.length<8 ){
		alert("password not strong enough");
		
	}
	if(document.SignUp.ConfirmPassword.value==""){
		alert("ConfirmPassword not rewritten");
		
	}
	if(document.SignUp.ConfirmPassword.value!=document.SignUp.Password.value){
		alert("Password not matched");
		
	}	
	if(document.SignUp.Email.value==""){
		alert("email id not written");
		
	}
	if(document.SignUp.Phonenumber.value.length !=  10 || isNaN(document.SignUp.Phonenumber.value) || document.SignUp.Phonenumber.value==""){
		alert("invalid phone number");
		
	}
	if(document.SignUp.CollegeName.value==""){
		alert("CollegeName not written");
		
	}
}
</script>
</body>

</html>