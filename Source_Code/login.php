<?php
$con=mysqli_connect("localhost","root","","mindreader");
$uid = $_POST['loginuid'];
$pwd = $_POST['loginpwd'];
$sql = "SELECT password,name FROM main WHERE uid like '$uid'";


$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);


if($row['password']==NULL){
echo "Either Username or Password is incorrect";
}

else if($row['password'] == $pwd )
{
setcookie("user", $uid, time()+360000);
//echo $_COOKIE['user'];

echo '<html><head><link href="http://fonts.googleapis.com/css?family=Gilda+Display|Freckle+Face" rel="stylesheet" type="text/css"><link rel="stylesheet" href="mind.css"><title>Home Page</title></head><body><div class="pageName"><center>Mind Reader</center></div><hr>
<div class="first"><form action="secondvisit.html" method="post"><center>Hello ';
echo $row['name'];
echo ', Welcome to Mind Reader. <br>Here you can easily find out what your classmates think about you.  <br>But first, you will have to answer a few questions about your classmates. <br>Don\'t worry! The site is totally anonymous :D <br>Your details Won\'t be published anywhere! <br>So go ahead and feel free to express your opinion.<br>Are you ready?<br><br><input type="submit"   value="Begin!" class="letsgo"></center></div><br><hr><div class="footer"><center><font color="red">All The Data On This Site Is Completely Anonymous!</font></center></div><div class="footer2"><table align="right" cellspacing="10"><tr><td valign="top"><a href="aboutus.html">About Us</a></td><td><a href="contact.html">Contact</a></td><td><a href="feedback.html">Feedback</a></td><td>
<a href="namefile.html">Namelist</a>
</td></div></body></html></body></html>';
}

else{
echo "Either Username or Password is incorrect";
}

mysqli_close($con);
?>