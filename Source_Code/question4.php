<?php

$con=mysqli_connect("localhost","root","","questions");

echo '<html><head><title>question 4</title></head><link rel="stylesheet" href="mind.css"><body><div class="pageName"><center>Mind Reader</center></div><hr><div class="question"><form action="question5.php" method="POST"><br><br><br><br><br><center><table><tr><td>Q.4 Who Do You Think Has The Best Fashion Sense?</td></tr><tr></tr><tr><td>Enter Roll Number Of That Person :</td><td><input type="number" name="4" required/></td></tr><tr></tr><tr><td><input type="submit" value="Submit"></td></tr><tr></tr><tr></tr><tr></tr><td>Now Thats What We Call Speedy Answers<br>Just 11 More Questions To Go!</td><center></table></form></div><div class="footer"><br><br><br><br><br><br><br><hr><center><font color="red"><font size="5">We Assure You That No Living Soul Shall Know Your Answers!<br>(Except You Ofcourse)</font></font></center>
</div><div align="right">
<a href="namefile.html"><font color="red"><font size="5">Namelist</font></font></a>
</div></body></html>';

$user= $_COOKIE['miniuser'];
$answer=$_POST['3'];

$id=$user.$answer;

$sql = "SELECT * from questions where uid like '$id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$temp=$row['3'];
$temp=$temp+1;

mysqli_query($con,"UPDATE `questions` SET `3`=$temp WHERE uid like '$id'");

mysqli_close($con);
?>