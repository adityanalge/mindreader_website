<?php

$dept = $_POST['dept'];
$year = $_POST['year'];
$division = $_POST['division'];

$uid = $year.$dept.$division;
$uid = strtolower($uid);
setcookie("miniuser", $uid, time()+360000);

echo '<html><head><title>question 1</title></head><link rel="stylesheet" href="mind.css"><body><div class="pageName"><center>Mind Reader</center></div><hr><div class="question"><form action="question2.php" method="POST"><center><br><font size="5">You Can Click On The <b>NAMELIST</b> Option At The Bottom Of The Page To See The Name List While Answering Questions<br>This Will Help You In Answering The Questions As The Answers Have To Be <b>"Roll Nos."</b><br></font><br><br><br><table><tr><td>Q.1 Who Do You Think Is The Friendliest?</td></tr><tr></tr><tr><td>Enter Roll Number Of That Person :</td><td><input type="number" name="1" required/></td></tr><tr></tr><tr><td><input type="submit" value="Submit"></td></tr><tr></tr><tr></tr><tr></tr><td>It is Really Simple<br>Just 14 More Questions To Go!</td><center></table></form></div><div class="footer"><br><br><br><br><br><br><br><hr><center><font color="red"><font size="5">We Assure You That No Living Soul Shall Know Your Answers!<br>(Except You Ofcourse)</font></font></center>
</div>
<div align="right">
<a href="namefile.html"><font color="red"><font size="5">Namelist</font></font></a>
</div>
</body></html>';

?>