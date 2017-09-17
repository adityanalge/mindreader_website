 <?php

$con=mysqli_connect("localhost","root","","feedback");

$dept = $_POST['dept'];
$year = $_POST['year'];
$division = $_POST['division'];
$rollno = $_POST['rollno'];
$user=$year.$dept.$division.$rollno; 
$name= $_POST['name'];
$email= $_POST['email'];
$likes = $_POST['likes'];
$detailsoffensive = $_POST['detailsoffensive'];
$suggestions = $_POST['suggestions'];
$featurequestions = $_POST['featurequestions'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback VALUE ('$user','$name','$email','$likes','$detailsoffensive','$suggestions','$featurequestions','$message')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));	
  }

echo "<html></head><title>Feedback Received</title><body><center><font size='10'><font color='red'>MIND READER</font></font><hr><br><br><br><br><br><br><br><br><br><font size='10'>We Have Successfully Received Your Feedback</font><br><br><font size='5'><a href='home.html'>Click Here To Redirect To LOG IN</a></font><br><br><br><br><br><br><br><br><br><br><hr><div class='foo ter'><center><font color='red'>All The Data On This Site Is Completely Anonymous!</center></font></div><div class='footer2'><table align='right' cellspacing='10'><tr><td><a href='home.html'>Go Back</a></td><td valign='top'><a href='aboutus.html'>About Us</a></td><td><a href='contact.html'>Contact</a></td><td>
<a href='namefile.html'>Namelist</a>
</td></div></body></html>";

mysqli_close($con);


?>