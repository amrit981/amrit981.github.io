<?php
session_start();

if(isset($_POST['click']))
{
	$link = mysqli_connect("localhost", "test", "test", "user");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$_SESSION['m1'] = mysqli_real_escape_string($link, $_POST['m1']);
$_SESSION['m2']= mysqli_real_escape_string($link, $_POST['m2']);
$_SESSION['m3']= mysqli_real_escape_string($link, $_POST['m3']);
$_SESSION['m4']= mysqli_real_escape_string($link, $_POST['m4']);
$_SESSION['m5']= mysqli_real_escape_string($link, $_POST['m5']);
$_SESSION['m6']= mysqli_real_escape_string($link, $_POST['m6']);
$_SESSION['m7']= mysqli_real_escape_string($link, $_POST['m7']);
$_SESSION['m8']= mysqli_real_escape_string($link, $_POST['m8']);





	


$sql = "INSERT INTO mech_marks (m1,m2,m3,m4,m5,m6,m7,m8,email,password) VALUES ('".$_SESSION['m1']."','".$_SESSION['m2']."','".$_SESSION['m3']."','".$_SESSION['m4']."','".$_SESSION['m5']."','".$_SESSION['m6']."','".$_SESSION['m7']."','".$_SESSION['m8']."','".$_SESSION['email']."','".$_SESSION['password']."')";

if(mysqli_query($link, $sql)){
	
    echo "<b>Records updated successfully.</b>";
	
	header("Refresh:1; url=marks_update.php");

	mysql_close();
	
}
	
else{
	echo"This email has all ready been register";
	
}


	}
else
{
	echo"acess denied";
}
exit;

mysqli_close($link);

?>
<?php if (isset($_POST["logout"]))
	{
	session_destroy();} ?>