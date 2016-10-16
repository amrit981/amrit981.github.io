


<?php
session_start();

error_reporting(E_ALL ^ E_DEPRECATED);
if($_POST)
{
	

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['branch'] = $_POST['branch'];



if($_SESSION['email'] && $_SESSION['password'] && $_SESSION['branch'] )
{
	if($_SESSION['branch']=="Mechanical engg")					//mechanical suru//
	{
	mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query = mysql_query("SELECT * FROM hodmech_sign where email='".$_SESSION['email']."'");
	$row = mysql_num_rows($query);
	
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
							echo "<br/><br/><br/><h1>
welcome : $dname<br/>
branch ibranch is : $dbranch</h1>
";
?>

	<html>
<body>
<a href="hodstud_search.php"><u> Individual Results:</u></a><br/><br/>
<a href="hodlist.php"><u>All Student Marks:</u></a>
</body>
</html>


			
							 
	<?php
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
	
	
	else if($_SESSION['branch']=="Computer science")			//cs suru//
	{
		mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query = mysql_query("SELECT * FROM hodcs_sign where email='".$_SESSION['email']."'");
	$row = mysql_num_rows($query);
	
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
							echo "

<br/><br/><br/>
welcome to placement cell<br/><body><h1>
branch is : $dbranch</h1>

";
?>
<html>
<body>
<a href="hodstud_search.php"><u> Individual Results:</u></a><br/><br/>
<a href="hod_list.php"><u>All Student Marks:</u></a>
</body>
</html>


<?php
			
							 
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
	
	else if($_SESSION['branch']=="Safety and fire engg")		//safety suru//
	{
		mysql_connect("localhost","test","test")or die("root not connected");
	mysql_select_db("user");

	$query = mysql_query("SELECT * FROM hodsf_sign where email='".$_SESSION['email']."'");
	$row = mysql_num_rows($query);
	
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
							echo "<html>
<head>
welcome to placement cell<br/><body><h1>
branch is : $dbranch<br/>
Hod is:$dname</h1>

</head></body></html>";
?>
<html>
<body>
<a href="hodstud_search.php"><u> Individual Results:</u></a><br/><br/>
<a href="hodlist.php"><u>All Student Marks:</u></a>
</body>
</html>


<?php
			
							 
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
}
else
{
	echo "Email is not filled";
	

	
	}			//safety khtm//
}
else{
	echo "Access DEnied";
	exit;
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



<CENTER>
</hr>

</body>
</html>








