<?php 
$con=mysqli_connect("localhost","root","","mindreader");

$name = $_POST['fname'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$division = $_POST['division'];
$rollno = $_POST['rollno'];
$email = $_POST['emailid'];
$password = $_POST['pwd'];
$confirmpwd = $_POST['confirmpwd'];

if($password==$confirmpwd)
{
$uid = $year.$dept.$division.$rollno;
$uid = strtolower($uid);
$sql = "INSERT INTO main VALUES('$name','$dept','$year','$division','$rollno','$email','$password','$uid')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));	
}

echo '<html><head><link rel="stylesheet" href="mindreader.css"><title>Mind Reader</title></head><body><div class="pageName"><center>Mind Reader</center></div><hr>';
echo "<center><br><br><br><br><font size='10'>Your Username Is <font color='red'><b>$uid</b><br></font>Your Password Is <font color='red'><b>$password</b></font><br></font><br><br><br><font size='5'><a href='home.html'>Click Here To Redirect To LOG IN</a></font></center></font><br><br><br><br><br><br><br><br><br><br><hr><div class='footer'><center><font color='red'>All The Data On This Site Is Completely Anonymous!</font></center></div>
<div class='footer2'><table align='right' cellspacing='10'><tr><td valign='top'><a href='aboutus.html'>About Us</a></td><td><a href='contact.html'>Contact</a></td><td><a href='feedback.html'>Feedback</a></td><td><a href='namefile.html'>Namelist</a></td></tr></div></body></html>";
}

else{
echo"Passwords Do Not Match<br>Enter The Same Password In Both Password Fields";
}


mysqli_close($con);

?>