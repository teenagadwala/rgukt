<?php
$con=mysqli_connect("localhost","root","","revanth",3305);
if($con)
	echo "connected";
else
	echo "not connected";
if(isset($_POST['submit']))
{
	$moviename=$_POST['moviename'];
	$moviedirector=$_POST['moviedirector'];
	$moviereleasedate=$_POST['moviereleasedate'];
	$moviereview=$_POST['moviereview'];
	echo $moviename,$moviedirector,$moviereleasedate,$moviereview;
	$sql="INSERT INTO `movies`(`moviename`, `moviedirector`, `moviereleasedate`, `moviereview`) VALUES ('$moviename', '$moviedirector', '$moviereleasedate', '$moviereview')";
	$r=mysqli_query($con,$sql);

}

?>
