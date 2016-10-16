


<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);


if($_POST)
{
	

$_SESSION['branch'] = $_POST['branch'];
$_SESSION['session'] = $_POST['session'];



	if($_SESSION['branch'] && $_SESSION['session'] )
	{
		
	
		if($_SESSION['branch']=="Mechanical engg")
		{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM mech_marks where session='".$_SESSION['session']."'");
		$row = mysql_num_rows($query);
	
			if($row !=0)
			{
				
				while($row=mysql_fetch_assoc($query))
				{
				$demail=$row['email'];
				$dm1=$row['m1'];
				$dm2=$row['m2'];
				$dm3=$row['m3'];
				$dm4=$row['m4'];
				$dm5=$row['m5'];
				$dm6=$row['m6'];
				$dm7=$row['m7'];
				$dm8=$row['m8'];
				$dgpa1=$row['gpa1'];
				
		
		
							echo "<html>
									<head></head>
									<body>
									<h3>S1</h1>
									<p>
									email :$demail<br/>
									chemistry :$dm1<br/>
									electrical :$dm2<br/>
									electronics :$dm3<br/>
									graphics :$dm4<br/>
									cp :$dm5<br/>
									evs :$dm6<br/>
									cp lab:$dm7<br/>
									electrical lab :$dm8<br/>
									GPA:$dgpa1<br/>
									</body></html>";
				}
				
			}
			else
			{
			echo "Not regesterd yet";
			
			}
		}
		else if($_SESSION['branch']=="Computer science")
		{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM cs_marks where session='".$_SESSION['session']."'");
		$row = mysql_num_rows($query);
	
			if($row !=0)
			{
				
				while($row=mysql_fetch_assoc($query))
				{
				$demail=$row['email'];
				$dm1=$row['m1'];
				$dm2=$row['m2'];
				$dm3=$row['m3'];
				$dm4=$row['m4'];
				$dm5=$row['m5'];
				$dm6=$row['m6'];
				$dm7=$row['m7'];
				$dm8=$row['m8'];
				$dgpa1=$row['gpa1'];
				
		
		
							echo "<html>
								<head></head>
								<body>
								<h3>S1</h3>
								<p>
								email :$demail<br/>
								chemistry :$dm1<br/>
								electrical :$dm2<br/>
								electronics :$dm3<br/>
								graphics :$dm4<br/>
								cp :$dm5<br/>
								evs :$dm6<br/>
								cp lab::$dm7<br/>
								electrical lab ::$dm8<br/>
								GPA:$dgpa1<br/>
								
								</body></html>";

				}
				
			}
			else
			{
			
			echo "Not regesterd yet";
			}
		}
	}
}
else
{
	echo "Access DEnied";
	exit;
}
?>









	





