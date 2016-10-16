
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

	$myfile = $_FILES['upload']['name'];
	$temp = $_FILES['upload']['tmp_name'];
	$type = $_FILES['upload']['type'];
	
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
/*--------------------------------------------Mechanical Suru-------------------------------------------------------*/
if($branch == "Mechanical engg")					
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
		echo "Only letters and white space allowed"; 
	}
	else
	{
		$a="me";
		$sql = "INSERT INTO mech_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a')";


		if(mysqli_query($link, $sql))
		{
						/* ----------------------------Profile Pic-----------------------------*/
			if(( $type == "image/jpeg") || ( $type == "image/jpg") || ( $type == "image/bmo"))
			{
				$directort = "./profile/$email/image";
				mkdir($directort,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
	
			}
			else
			{
				echo"wrong format";
			}
 
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
/*--------------------------------------------Computer Science Suru-------------------------------------------------------*/
else if($branch == "Computer science")		
{
	
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
		echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="cs";
		$sql1 = "INSERT INTO cs_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(myqli_query($link, $sql1))
		{
					/* -------------------Profile Pic--------------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmo"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}
			else
			{
				echo"wrong format";
			}
	
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
/*--------------------------------------------Safety suru-------------------------------------------------------*/

else if($branch =="Safety and fire engg")			
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
      echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="sf";
		$sql1 = "INSERT INTO sf_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(mysqli_query($link, $sql1))
		{
						/* ----------------------Profile Pic---------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmo"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}		
			else
			{
				echo"wrong format";
			}
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
/*--------------------------------------------Civil Suru-------------------------------------------------------*/

else if($branch =="Civil engg")			
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
      echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="civil";
		$sql1 = "INSERT INTO civil_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(mysqli_query($link, $sql1))
		{
						/* ------------------Profile Pic--------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmo"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}
			else
			{
				echo"wrong format";
			}
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
/*--------------------------------------------Electrical and Electronics Suru-------------------------------------------------------*/

else if($branch =="Electrical and Electronics")			
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
      echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="eee";
		$sql1 = "INSERT INTO eee_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(mysqli_query($link, $sql1))
		{
					/* ------------------Profile Pic---------------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmo"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}
			else
			{
				echo"wrong format";
			}
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
/*--------------------------------------------Electronics and communication Suru-------------------------------------------------------*/			
else if($branch == "Electronics and communication")			
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
      echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="ece";
		$sql1 = "INSERT INTO ece_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(mysqli_query($link, $sql1))
		{
						/* ----------------------Profile Pic----------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmp"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}	
			else
			{
				echo"wrong format";
			}
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
/*--------------------------------------------Information Techonology Suru-------------------------------------------------------*/
else if($branch =="Information Techonology")			
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
      echo "Only letters and white space allowed"; 
	}
	else
	{
		$a1="it";
		$sql1 = "INSERT INTO it_sign (name,email,password,branch) VALUES ('$name','$email','$password','$a1')";
	
		if(mysqli_query($link, $sql1))
		{
					/* -------------------Profile Pic-----------------------*/

			if(( $type== "image/jpeg") || ( $type== "image/jpg") || ( $type== "image/bmo"))
			{
				$directory = "./profile/$email/image";
				mkdir($directory,0777,true);
				move_uploaded_file($temp,"profile/$email/image/$myfile");
				echo"Your uloaded picture <p><img border='1' width='70' height='70' src='profile/$email/image/$myfile'><p>";
			}
			else
			{
				echo"wrong format";
			}
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

/*-------------------------------------------- End-------------------------------------------------------*/

}
else
{
    echo "ERROR:PLEASE CHECK PASSWORD AGAIN!!$sql. " . mysqli_error($link);
}
}
exit;

mysqli_close($link);

?>