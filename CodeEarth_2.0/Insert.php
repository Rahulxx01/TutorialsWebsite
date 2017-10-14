<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$First_Name = $_POST["Firstname"];
$Last_Name = $_POST["Lastname"];
$User_Name = $_POST["Username"];
$Password = $_POST["Password"];
$Re_Password = $_POST["ConfirmPassword"];
$E_mail = $_POST["Email"];
$Gender = $_POST["Gender"];
$Month = $_POST["DOBMonth"];
$Day = $_POST["d1"];
$Year = $_POST["y1"];
$Phone_no = $_POST["Phonenumber"];
$College_Name = $_POST["CollegeName"];
$msg="null";

$sql = "INSERT INTO tutorialdetails (First_Name, Last_Name, User_Name, Password, Re_Password, E_mail, Month, Day, Year, Phone_no, College_Name, Gender)
VALUES ('$First_Name', '$Last_Name', '$User_Name','$Password','$Re_Password','$E_mail','$Month','$Day','$Year','$Phone_no','$College_Name','$Gender')";

if ($conn->query($sql) === TRUE) {
    //echo "New Record Created";
	header("location: FrontPage1.php");
	$msg = "Data is Inserted";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
