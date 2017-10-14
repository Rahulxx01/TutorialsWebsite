<?php
//include('Insert.php'); // Includes Login Script

?>
<html>
<head>
<title>Code Earth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="FrontPage.css">
</head>
<body>
<div class="header">
    <h1>Code Earth</h1>
    <div class="login">
		<a class="button" href="P_FirstPage.php">Home</a></li>
        <a class="button" href="loginpage.php">Login</a></li>
    </div>
</div>
<div class="container">
<h1 align="center" class="S1">Create your Learning Account</h1>
</div>

<!--<h2 class="w3-center">Manual Slideshow</h2>-->


<div class="MainContainer">
	<div class="SignUpForm" >
		<form  name="SignUp" onsubmit="validateForm()" method="post" action="Insert.php">
		<h4>Name<br>
			<input type="text" size="18" name="Firstname" placeholder="First Name"/>
			<input type="text" size="18" name="Lastname" placeholder="Last Name"/>
		</h4>
		<h4>Username<br><input type="text" size="40" name="Username" placeholder="Username"/></h4>
		<h4>Password <br><input type="password" size="40" name="Password" placeholder="Password"/></h4>

		<h4>Confirm Password <br><input type="password" size="40" name="ConfirmPassword" placeholder="Renter password"/></h4>
		<h4>Email address<br><input type="text" size="40" name="Email" placeholder="example@gmail.com"/></h4>
		<h4>Gender<br><input type="radio" name="Gender" value="A" checked/>Male 
			<input type="radio" name="Gender" value="B"/>Female

			<input type="radio" name="Gender" value="C"/>other
		</h4>
		<h4>Birthday<br>
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
		<h4>Phone Number<br>
			<input type="text" size="40" name="Phonenumber" placeholder="Phone number"/>
		</h4>
		<h4>College name<br>
			<input type="text" size="40" name="CollegeName" placeholder="College name"/>
		</h4>
		
		<input class="submitButton" type="submit" value="Create an Account"/>
		
	</div>
	<div class="Side" align="left">
		<h2 class="S2" align="center">One account is all you need</h2>
		<h4 class="S2" align="center">One free account gets you to learn everything about Programming.</h4>
		
 
	</div>


</div>
<!--<div class="w3-content w3-display-container" align="left">
  <img class="mySlides" src="C++page.png" style="width:100%">
  <img class="mySlides" src="bmslogo.jpg"style="width:100%">
  <img class="mySlides" src="tcs-23.jpg"style="width:100%">
 

  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
  
</div>-->

<script type="text/javascript">
function validateForm(){
	flag=true;
	if(document.SignUp.Firstname.value==""){
		alert("Firstname not written");
		flag=false;
	}
	if(document.SignUp.Lastname.value==""){
		alert("Lastname not written");
		flag=false;
	}
	if(document.SignUp.Username.value==""){
		alert("Username not written");
		flag=false;
	}
	if(document.SignUp.Password.value==""){
		alert("password not written");
		flag=false;
	}
	if(document.SignUp.Password.value.length<8 ){
		alert("password not strong enough");
		flag=false;
	}
	if(document.SignUp.ConfirmPassword.value==""){
		alert("ConfirmPassword not rewritten");
		flag=false;
	}
	if(document.SignUp.ConfirmPassword.value!=document.SignUp.Password.value){
		alert("Password not matched");
		flag=false;
	}	
	if(document.SignUp.Email.value==""){
		alert("email id not written");
		flag=false;
	}
	if(document.SignUp.Phonenumber.value.length !=  10 || isNaN(document.SignUp.Phonenumber.value) || document.SignUp.Phonenumber.value==""){
		alert("invalid phone number");
		flag=false;
	}
	if(document.SignUp.CollegeName.value==""){
		alert("CollegeName not written");
		flag=false;
	}
	if(flag){
		alert("User created successfully.....Go to login page");
	}else{
		alert("Re-Enter the details.");
	}
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>

</html>