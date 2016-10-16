<?php
error_reporting(E_ALL ^ E_DEPRECATED);

if($_POST)
{
	$link = mysqli_connect("localhost", "test", "test", "user");
 

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_POST['name']);
$email= mysqli_real_escape_string($link, $_POST['email']);
$password= mysqli_real_escape_string($link, $_POST['password']);
$confirm= mysqli_real_escape_string($link, $_POST['confirm']);
$branch=$_POST['branch'];



	
if($password==$confirm)
{

if($branch == "Mechanical engg")
{
	$a="me";
$sql = "INSERT INTO mech_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a')";


if(mysqli_query($link, $sql))
{
    echo "<b>Records added successfully.</b>";
	mysql_close();
	header("Refresh:1; url=hod_log.php");
}
else
{
	echo"This email has all ready been register";
	
}
}
else if($branch == "Computer science")
{
	$a1="cs";
$sql1 = "INSERT INTO hodcs_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
if(mysqli_query($link, $sql1))
{
    echo "<b>Records added successfully.</b>";
	mysql_close();
	header("Refresh:1; url=log.php");
}
else
{
	echo"This email has all ready been register";
	
}
}

else if($branch=="Safety and fire engg")
{
	$a1="sf";
$sql1 = "INSERT INTO hodsf_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
if(mysqli_query($link, $sql1))
{
    echo "<b>Records added successfully.</b>";
	mysql_close();
	header("Refresh:1; url=log.php");
}
else
{
	echo"This email has all ready been register";
	
}
}

}
else
{
    echo "ERROR:PLEASE CHECK PASSWORD AGAIN!!$sql. " . mysqli_error($link);
}
}
exit;

mysqli_close($link);

?>