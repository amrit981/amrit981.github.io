<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	session_start();
	

if($_POST)
{
	

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['branch'] = $_POST['branch'];



if($_SESSION['email'] && $_SESSION['password'] && $_SESSION['branch'] )
{
/*--------------------------------------------Mechanical Suru-------------------------------------------------------*/
	if($_SESSION['branch']=="Mechanical engg")			
		{
			mysql_connect("localhost","test","test")or die("root not connected");
			mysql_select_db("user");

			$query = mysql_query("SELECT * FROM mech_sign where email='".$_SESSION['email']."'");
			$row = mysql_num_rows($query);
			$dir = "profile/".$_SESSION['email']."/image";
			$open = opendir($dir);
			if($row !=0)
			{
				while($row=mysql_fetch_assoc($query))
				{
					$demail=$row['email'];
					$dpass=$row['password'];
					$dname=$row['name'];
					$dbranch=$row['branch'];
		
				}
					if($_SESSION['email']==$demail)
					{
						if($_SESSION['password']==$dpass)
						{
						/* ----------------------------------------------Profile Pic---------------------*/
	
							while(($file = readdir($open))!= FALSE)
							{
								if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
								{
								echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
								}	
/*------------------------------------------------------------------------------------------------------*/						
							}
							echo "<br/><br/><br/><h1>
									welcome : $dname<br/>
									branch is : $dbranch</h1>
									";
						}
						else
						{
						echo"Your password is incorrect";
						}
					}
					else
					{
					echo "your email is incorrect";
					}
			}
			else
			{
				echo "Not regesterd yet";
			}
		}
/*--------------------------------------------Computer Science Suru-------------------------------------------------------*/		
	else if($_SESSION['branch']=="Computer science")			//cs suru//
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM cs_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* ----------------------------------------------Profile Pic----------------------------------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
/*------------------------------------------------------------------------------------------------------*/						
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				}
				else
				{
					echo "your email is incorrect";
				}
		}
		else
		{
			echo "Not regesterd yet";
		}
	}
/*--------------------------------------------Safety Suru-------------------------------------------------------*/

	else if($_SESSION['branch']=="Safety and fire engg")			
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM sf_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* -----------------------Profile Pic----------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
					
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				`}
				else
				{
					echo "your email is incorrect";
				}
			}
			else
			{
				echo "Not regesterd yet";
			}
	}
/*--------------------------------------------EEE Suru-------------------------------------------------------*/
	else if($_SESSION['branch']=="Electrical and Electronics")			
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM eee_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* -----------------------Profile Pic----------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
/*------------------------------------------------------------------------------------------------------*/						
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				`}
				else
				{
					echo "your email is incorrect";
				}
			}
			else
			{
				echo "Not regesterd yet";
			}
	}
	
	/*--------------------------------------------ECE Suru-------------------------------------------------------*/

	else if($_SESSION['branch']=="Electronics and communication")			
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM ece_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* -----------------------Profile Pic----------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
						
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				`}
				else
				{
					echo "your email is incorrect";
				}
			}
			else
			{
				echo "Not regesterd yet";
			}
	}
	
	
	
/*--------------------------------------------Information Techonology Suru-------------------------------------------------------*/

	else if($_SESSION['branch']=="Information Techonology")			
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM it_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* -----------------------Profile Pic----------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
						
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				`}
				else
				{
					echo "your email is incorrect";
				}
			}
			else
			{
				echo "Not regesterd yet";
			}
	}
/*--------------------------------------------Civil engg-------------------------------------------------------*/

	else if($_SESSION['branch']=="Civil engg")			
	{
		mysql_connect("localhost","test","test")or die("root not connected");
		mysql_select_db("user");

		$query = mysql_query("SELECT * FROM civil_sign where email='".$_SESSION['email']."'");
		$row = mysql_num_rows($query);
		$dir = "profile/".$_SESSION['email']."/image";
		$open = opendir($dir);
	
		if($row !=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$demail=$row['email'];
				$dpass=$row['password'];
				$dname=$row['name'];
				$dbranch=$row['branch'];
		
			}
				if($_SESSION['email']==$demail)
				{
					if($_SESSION['password']==$dpass)
					{
						/* -----------------------Profile Pic----------------------*/
	
						while(($file = readdir($open))!= FALSE)
						{
							if(($file!=".")&&($file!="..")&&($file!="Thumbs.db"))
							{
							echo "<br/><br/><br/><br/><img border='1' width='150' height='150' src='$dir/$file'>";
							}	
						
						}
							echo "<br/><br/><br/><h1>
								welcome : $dname<br/>
								branch is : $dbranch</h1>
								";
					}
					else
					{
						echo"Your password is incorrect";
					}
				`}
				else
				{
					echo "your email is incorrect";
				}
			}
			else
			{
				echo "Not regesterd yet";
			}
	}
	
/*--------------------------------------- DAta END---------------------------------------------------------*/	
	
}
else
{
	echo "Email is not filled";
}
}
else{
	echo "Access DEnied";
	exit;
}


/*------------------------------ MARKS UPLOADATION-----------------------------*/


if($_SESSION['branch']=="Mechanical engg")					//mech suru//
{
mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query1  = mysql_query("SELECT * FROM mech_sign where email='".$_SESSION['email']."'");
	$row1 = mysql_num_rows($query1);
	
	if($row1 !=0)
	{
		
		while($row1=mysql_fetch_assoc($query1))
		{
				$demail=$row1['email'];
				$dpass=$row1['password'];
		}
		
		
			if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
					$query2  = mysql_query("SELECT * FROM mech_marks where email='".$_SESSION['email']."'");
	$row2 = mysql_num_rows($query2);
	
	if($row2 !=0)
	{
		while($row2=mysql_fetch_assoc($query2))
		{
			$dm1=$row2['m1'];
			$date1=$row2['date1'];
				$dm2=$row2['m2'];
				$dm3=$row2['m3'];
				$dm4=$row2['m4'];
				$dm5=$row['m5'];
				$dm6=$row2['m6'];
				$dm7=$row2['m7'];
				$dm8=$row2['m8'];
				$dgpa1=$row2['gpa1'];
				if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
				?>
				<script language="javascript"> 
function hideshow() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		
  	}
	else {
		ele.style.display = "block";
		
	}
} 
</script>
<html>
<body>
<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
<div id="toggleText" style="display: none">

<?php
		echo"
			
			Chemistry: $dm1&nbspdate:$date1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8<br/><br/>
GPA:$dgpa1
</div>
</body>
</html>			
				
				
				
				
				
				
				
				
				
			";		
			
		}
	}
		}
	}
					?></div>
				<form action="marks_updatemech.php" method="post" >

<p><input  type="submit" name="submit" value="marks updation"></p>
				<?php

				}
			}
			
		}
	
}



	else if($_SESSION['branch']=="Computer science")			//cs suru//
	{

mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query1  = mysql_query("SELECT * FROM cs_sign where email='".$_SESSION['email']."'");
	$row1 = mysql_num_rows($query1);
	
	if($row1 !=0)
	{
		
		while($row1=mysql_fetch_assoc($query1))
		{
				$demail=$row1['email'];
				$dpass=$row1['password'];
		}
		
		
			if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
					$query2  = mysql_query("SELECT * FROM cs_marks where email='".$_SESSION['email']."'");
	$row2 = mysql_num_rows($query2);
	
	if($row2 !=0)
	{
		while($row2=mysql_fetch_assoc($query2))
		{
			$dm1=$row2['m1'];
			$date1=$row2['date1'];
				$dm2=$row2['m2'];
				$dm3=$row2['m3'];
				$dm4=$row2['m4'];
				$dm5=$row['m5'];
				$dm6=$row2['m6'];
				$dm7=$row2['m7'];
				$dm8=$row2['m8'];
				$dgpa1=$row2['gpa1'];
				if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
				?>
				<script language="javascript"> 
function hideshow() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		
  	}
	else {
		ele.style.display = "block";
		
	}
} 
</script>
<html>
<body>
<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
<div id="toggleText" style="display: none">

<?php
		echo"
			<br/><br/><br/>
			Chemistry: $dm1&nbsp&nbsp&nbspdate:$date1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8<br/><br/>
GPA:$dgpa1</div>
</body>
</html>			
				
				
				
				
				
				
				
				
				
			";		
			
		}
	}
		}
	}
					?></div>
				<form action="marks_update.php" method="post" >

<p><input  type="submit" name="submit" value="marks updation"></p>
				<?php

				}
			}
			
		}
	

				
				
}


else if($_SESSION['branch']=="Safety and fire engg")				//sf started//
{
	mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query1  = mysql_query("SELECT * FROM sf_sign where email='".$_SESSION['email']."'");
	$row1 = mysql_num_rows($query1);
	
	if($row1 !=0)
	{
		
		while($row1=mysql_fetch_assoc($query1))
		{
				$demail=$row1['email'];
				$dpass=$row1['password'];
		}
		
		
			if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
					$query2  = mysql_query("SELECT * FROM sf_marks where email='".$_SESSION['email']."'");
	$row2 = mysql_num_rows($query2);
	
	if($row2 !=0)
	{
		while($row2=mysql_fetch_assoc($query2))
		{
			$dm1=$row2['m1'];
				$dm2=$row2['m2'];
				$dm3=$row2['m3'];
				$dm4=$row2['m4'];
				$dm5=$row['m5'];
				$dm6=$row2['m6'];
				$dm7=$row2['m7'];
				$dm8=$row2['m8'];
				if($_SESSION['email']==$demail)
			{
				if($_SESSION['password']==$dpass)
				{
				?>
				<script language="javascript"> 
function hideshow() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		
  	}
	else {
		ele.style.display = "block";
		
	}
} 
</script>
<html>
<body>
<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
<div id="toggleText" style="display: none">

<?php
		echo"
			
			Chemistry: $dm1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8</div>
</body>
</html>			
				
				
				
				
				
				
				
				
				
			";		
			
		}
	}
		}
	}
					?></div>
				<form action="marks_updatesf.php" method="post" >

<p><input  type="submit" name="submit" value="marks updation"></p>
				<?php

				}
			}
			
		}
	

				
				
}


	



?>















<html>
<head>
<meta charset="utf-8">
<title>Our Login page</title>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin:  auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
 
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}
body{background-color:rgba(255,255,255,0.3);}



#null2 {
    padding: 0;
    
    background-color:rgba(144,144,144,0.4);
    position: fixed;
    top:-15px;
    width: 500%;
	height:50px;
	left:-6px;
}
.home{position:fixed;
		left:520px; 
		top:;
		font-family:gorgia;
        text-decoration:none;
        }
		
		
		
		
.sellnow{position:fixed;
		left:600px;
		top:;
		font-family:gorgia;
		text-decoration:none;
		}
.whyus{position:fixed;
		left:713px;
		font-family:gorgia;
		text-decoration:none;
		top:;}
.ewaste{position:fixed;
		left:800px;
		top:;
		font-family:gorgia;
        text-decoration:none;}
.about{position:fixed;
		left:910px;
		top:;
		font-family:gorgia;
        text-decoration:none;
		a:hover {
    background-color:red ;
}}


.login{
		position:fixed;
		top:;
		left:1150px;
		padding:10px;
		
		font-family:gorgia;
		text-decoration:none;   
}
	
		
		
		
.signup{
		position:fixed;
		top:;
		left:1250px;
		padding:10px;
		font-family:gorgia;     
		text-decoration:none;
		}

ul {
    list-style-type:none;
	padding: 00px;
    overflow: hidden;
    background-color: rgba(15,15,15,0.6);
    position: fixed;
    top:-2.5%;
    width: 120%;
	height:35px;
	left:-6px;
}
#null1 {
    padding: 0;
    overflow: hidden;
    background-color:rgba(144,144,144,.4);
    position: fixed;
    top:36px;
    width: 101%;
	height:80px;
	left:-6px;
	font-family:algerian;
	color:green;
	font-size:70px;
	}
	
	

a:link{color:red;
    display: block;
    text-align: center;
    padding:8px 5px;
    text-decoration: none;
	font-family:gorgia;
}
a:hover:not(.active) {
    background-color: ;
}
a.new:visited{color:#f4f4f4;}
a:visited{color:black;}
a:active{color:red;}



</style>
</head>
<body >
<div class="loader"></div>
<div id=null2></div>
<ul>
  <li><a class="home" href="home.php">HOME</a></li>
  <li><a class="sellnow" href="#sellnow">EMPOLYES</a></li>
  <li><a class="whyus" href="#whyus">WHY US</a></li>
  <li><a class="ewaste" href="account.php">E-BANKING</a></li>
  <li><a class="about" href="#about">ABOUT</a></li>
  <li><a class="login" href="log.php" title="just click ">LOG IN</a></li>
  <li><a class="signup" href="signin.php" title="click to sign up">SIGN UP</a></li>
</ul><br><br><br>
<br><br>


</div>

</body>
</html>
