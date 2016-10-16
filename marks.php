<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);

if(isset($_POST['click']))
{
	$link = mysqli_connect("localhost", "test", "test", "user");
	if($link === false)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
$_SESSION['m1'] = mysqli_real_escape_string($link, $_POST['m1']);
$date1=$_POST['date1'];
$_SESSION['m2']= mysqli_real_escape_string($link, $_POST['m2']);
$_SESSION['m3']= mysqli_real_escape_string($link, $_POST['m3']);
$_SESSION['m4']= mysqli_real_escape_string($link, $_POST['m4']);
$_SESSION['m5']= mysqli_real_escape_string($link, $_POST['m5']);
$_SESSION['m6']= mysqli_real_escape_string($link, $_POST['m6']);
$_SESSION['m7']= mysqli_real_escape_string($link, $_POST['m7']);
$_SESSION['m8']= mysqli_real_escape_string($link, $_POST['m8']);
$gpa1=$_POST['gpa1'];
$session = $_POST['session'];
/*------------------------------------Mechanical Suru-----------------------------------*/

if($_SESSION['branch']=="Mechanical engg")				
{
	$sql = "INSERT INTO mech_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,session,gpa1) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$session','$gpa1')";
		if(mysqli_query($link, $sql))
		{
			echo "<b>Records updated successfully.</b>";
			header("Refresh:1; url=marks_updatemech.php");
			mysql_close();
		}
		else
		{	
			echo"This roll number has all ready been register";
		}
}
/*-----------------------------------------CS Suru------------------------------------*/
else if($_SESSION['branch']=="Computer science")		
{
	$sql = "INSERT INTO cs_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,session,gpa1,date1) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$session','$gpa1','$date1')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_update.php");
		mysql_close();
	}
}
/*---------------------------------------Safety Suru-----------------------------------*/
else if($_SESSION['branch']=="Safety and fire engg")
{
	$sql = "INSERT INTO sf_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,gpa1,session) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$gpa1','$session')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_updatesf.php");
		mysql_close();
	}
}
/*--------------------------------------Electrical and Electronics--------------------------*/
else if($_SESSION['branch']=="Electrical and Electronics")
{
	$sql = "INSERT INTO eee_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,gpa1,session) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$gpa1','$session')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_updateeee.php");
		mysql_close();
	}
}
/*--------------------------------------Electronics and communication--------------------------*/
else if($_SESSION['branch']=="Electronics and communication")
{
	$sql = "INSERT INTO ece_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,gpa1,session) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$gpa1','$session')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_updateece.php");
		mysql_close();
	}
}
/*--------------------------------------Information Techonology--------------------------*/
else if($_SESSION['branch']=="Information Techonology")
{
	$sql = "INSERT INTO it_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,gpa1,session) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$gpa1','$session')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_updateit.php");
		mysql_close();
	}
}
/*--------------------------------------Civil engg--------------------------*/
else if($_SESSION['branch']=="Civil engg")
{
	$sql = "INSERT INTO civil_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password,gpa1,session) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."','$gpa1','$session')";
	if(mysqli_query($link, $sql))
	{
		echo "<b>Records updated successfully.</b>";
		header("Refresh:1; url=marks_updatecivil.php");
		mysql_close();
	}
}
}
else
{
	echo"acess denied";
}
exit;
mysqli_close($link);
?>
