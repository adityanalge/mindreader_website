<?php

$con=mysqli_connect("localhost","root","","questions");

echo '<html><head><title>question 2</title></head><link rel="stylesheet" href="mind.css"><body><div class="pageName"><center>Mind Reader</center></div><hr><div class="question"><form action="question3.php" method="POST"><br><br><br><br><br><center><table><tr><td>Q.2 Who Do You Think Is The Funniest?</td></tr><tr></tr><tr><td>Enter Roll Number Of That Person :</td><td><input type="number" name="2" required/></td></tr><tr></tr><tr><td><input type="submit" value="Submit"></td></tr><tr></tr><tr></tr><tr></tr><td>Keep Going<br>Just 13 More Questions To Go!</td><center></table></form></div><div class="footer"><br><br><br><br><br><br><br><hr><center><font color="red"><font size="5">We Assure You That No Living Soul Shall Know Your Answers!<br>(Except You Ofcourse)</font></font></center>
</div><div align="right">
<a href="namefile.html"><font color="red"><font size="5">Namelist</font></font></a>
</div></body></html>';

$user= $_COOKIE['miniuser'];
$answer1 = $_POST['1'];


$id1=$user.$answer1;


$sql = "SELECT * from questions where uid like '$id1'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$temp=$row['1'];
$temp=$temp+1;

mysqli_query($con,"UPDATE `questions` SET `1`=$temp WHERE uid like '$id1'");


mysqli_close($con);

?>