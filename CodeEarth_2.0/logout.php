<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: P_FirstPage.php"); // Redirecting To Home Page
}
?>