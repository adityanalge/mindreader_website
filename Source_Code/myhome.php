<div align =center>
<?php
$con=mysqli_connect("localhost","root","","questions");
$user= $_COOKIE['user'];

$sql1 = "SELECT * from questions where uid like '$user'";
$result=mysqli_query($con,$sql1);
$row = mysqli_fetch_array($result);

echo '<html><head><link rel="stylesheet" href="mindreader.css"><title>My Home</title></head><body><div class="pageName"><center>Mind Reader</center></div><hr></body></html>';

if($row['1']==0 && $row['2']==0 && $row['3']==0 && $row['4']==0 && $row['5']==0 && $row['6']==0 && $row['7']==0 && $row['8']==0 && $row['9']==0 && $row['10']==0 && $row['11']==0 && $row['12']==0 && $row['13']==0 && $row['14']==0 && $row['15']==0)
echo "<br><br><br><br><br><br><br><font size='10'><center>We Are Extremely Sorry!<br>It Seems No Question Has Been Answered Related To You</center></font><br><br><br><br><br>";

if($row['1']!=0)
{
if($row['1']!=1)
{
echo $row['1'];
echo " Of Your Classmates Think You Are The Friendliest Person In Your Class<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are The Friendliest Person In Your Class<br><br>";
};

if($row['2']!=0)
{
if($row['2']!=1)
{
echo $row['2'];
echo " Of Your Classmates Think You Are The Funniest Person In Your Class<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are The Funniest Person In Your Class<br><br>";
};

if($row['3']!=0)
{
if($row['3']!=1)
{
echo $row['3'];
echo " Of Your Classmates Think You Are The Most Helpful Person In Your Class<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are The Most Helpful Person In Your CLass<br><br>";
};



if($row['4']!=0)
{
if($row['4']!=1)
{
echo $row['4'];
echo " Of Your Classmates Think You Have The Best Fashion Sense<br><br>";
}
else
echo "One Of Your Classmates Thinks You Have The Best Fashion Sense<br><br>";
};

if($row['5']!=0)
{
if($row['5']!=1)
{
echo $row['5'];
echo " Of Your Classmates Think You Are Short Tempered<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are Short Tempered<br><br>";
};

if($row['6']!=0)
{
if($row['6']!=1)
{
echo $row['6'];
echo " Of Your Classmates Think You Are Always Late For Everything<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are Always Late For Everything<br><br>";
};

if($row['7']!=0)
{
if($row['7']!=1)
{
echo $row['7'];
echo " Of Your Classmates Think You Talk The Most<br><br>";
}
else
echo "One Of Your Classmates Thinks You Talk The Most<br><br>";
};

if($row['8']!=0)
{
if($row['8']!=1)
{
echo $row['8'];
echo " Of Your Classmates Think You Are The Most Good Looking Person In The Class<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are The Most Good Looking Person In The Class<br><br>";
};

if($row['9']!=0)
{
if($row['9']!=1)
{
echo $row['9'];
echo " Of Your Classmates Think You Secretly Have A Crush On Someone<br><br>";
}
else
echo "One Of Your Classmates Thinks You Secretly Have A Crush On Someone<br><br>";
};

if($row['10']!=0)
{
if($row['10']!=1)
{
echo $row['10'];
echo " Of Your Classmates Think You Are A Complete Cell Phone Addict<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are A Complete Cell Phone Addict<br><br>";
};

if($row['11']!=0)
{
if($row['11']!=1)
{
echo $row['11'];
echo " Of Your Classmates Think You Eat A Lot<br><br>";
}
else
echo "One Of Your Classmates Thinks You Eat A Lot<br><br>";
};

if($row['12']!=0)
{
if($row['12']!=1)
{
echo $row['12'];
echo " Of Your Classmates Think It Is Fun To Be With You<br><br>";
}
echo "One Of Your Classmates Thinks You Are Fun To Be With<br><br>";
};

if($row['13']!=0)
{
if($row['13']!=1)
{
echo $row['13'];
echo " Of Your Classmates Would Want To Be Stuck On An Island With You For A Month<br><br>";
}
else
echo "One Of Your Classmates Would Want To Be Stuck On An Island With You For A Month<br><br>";
};


if($row['14']!=0)
{
if($row['14']!=1)
{
echo $row['14'];
echo " Of Your Classmates Would Like To Swap Their Lives With You<br><br>";
}
else
echo "One Of Your Classmates Would Like To Swap Their Lives With You<br><br>";
};


if($row['15']!=0)
{
if($row['15']!=1)
{
echo $row['15'];
echo " Of Your Classmates Think You Are Simply Awesome<br><br>";
}
else
echo "One Of Your Classmates Thinks You Are Simply Awesome<br><br>";
};

echo '
<html>
<head>
<link rel="stylesheet" href="reader".css">
<title></title>
<body>
<center>
<font size="5"><br><br><br><br><br><br><br><br>Thank You For Using Mind Reader<br>Please Provide Us Your <a href="feedback.html"><font color="red">FEEDBACK</font></a><br><br>Click Here To <a href="home.html"><font color="red">LOG OUT</font></a></font><br>
</center>
<hr>
<div class="tag">
<center><font color="red">THE LESS YOU KNOW...THE MORE YOU LEARN</font></center>
</div>
<div class="footer2">
<table align="right" cellspacing="10">
<tr>
<td valign="top">
<a href="aboutus.html"><font color="red">About Us</font></a>
</td>
<td>
<a href="contact.html"><font color="red">Contact</font></a>
</td>
<td>
<a href="feedback.html"><font color="red">Feedback</font></a>
</td>
<td>
<a href="home.html"><font color="red">LOG OUT</font></a>
</td>
</div>
</body>
</html>';

mysqli_close($con);
?>
</div>