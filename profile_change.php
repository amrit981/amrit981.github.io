<?php
session_start();

if(isset($_POST['submit']))
{

$mypic = $_FILES['newupload']['name'];
$temp = $_FILES['newupload']['tmp_name'];
$type = $_FILES['newupload']['type'];

$email = $_REQUEST['email'];
$newname = $_REQUEST['newname'];
	
if($newname)
{
	mysql_connect("localhost", "test", "test") or die("Problems with connection!");
	mysql_select_db("user");
	mysql_query("UPDATE cs_sign SET name='$newname' WHERE email='$email'");				
}
if($mypic)
{
	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp"))
	{
				
		$dir = "profiles/".$_SESSION['email']."/images";
		$files = 0;
		$handle = opendir($dir);
		while(($file = readdir($handle)) != FALSE)
		{
			if($file!="."&&$file!=".."&&$file!="Thumbs.db")
			{
			unlink($dir."/".$file);
			$files++;
			}
		}
		closedir($handle);
		sleep(1);
		move_uploaded_file($temp, "profiles/$email/images/$mypic");
		echo "You values have been updated succesfully!";
	}
	else
	{
		echo "The picture has to be a jpeg, jpg o bmp file and have less than 10kb!";
				
	}
}
}

else
{
	echo "Access not allowed!";
}

?>