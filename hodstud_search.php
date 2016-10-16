<html><html>
<head>
<title> sign in </title>
<style type="text/css">
body {
background-color: #4CAF50;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}

h1 { font-size: 1em; }
h1, p {
margin-bottom: 12px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }
#login {
margin: 50px auto;
width: 550px;
 
}
form fieldset input[type="text"], input[type="password"],input[type="text"],input[type="text"],input[type="number"],input[type="number"],input[type="text"],input[type="text"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;

color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;

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
a:visited{color:black;}
a:active{color:red;}



</style>
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

<body>
<div class="loader"></div>
<div id=null2></div>
<ul>
  <li><a class="home" href="#home">HOME</a></li>
  <li><a class="sellnow" href="#sellnow">EMPOLYES</a></li>
  <li><a class="whyus" href="#whyus">WHY US</a></li>
  <li><a class="ewaste" href="account.php">E-BANKING</a></li>
  <li><a class="about" href="#about">ABOUT</a></li>
  <li><a class="login" href="log.php" title="just click ">LOG IN</a></li>
  <li><a class="signup" href="signin.php" title="click to sign up">SIGN UP</a></li>
</ul><br><br><br>
<center><h1>hod</h1></center>
<form method="GET" action="hodstud_search.php">
<input type="text" name="search" placeholder="search by roll number" required value="">
<input type="submit" name="submit" value="search">
</form>
<CENTER>
</hr>
<u>Results:</u>&nbsp
<?php

session_start();
error_reporting(E_ALL ^ E_DEPRECATED);


if(isset($_REQUEST['submit']))
{

if($_SESSION['branch']=="Computer science")				//cs suru//
{

$search = $_GET['search'];
$term = explode(" ",$search);
$query = "SELECT * FROM cs_marks WHERE ";

$i=0;
foreach($term as $each)
{	
		$i++;
		if($i==1)
		{
			$query .= "email LIKE '%$each%' ";
		}else
		{
		$query .= "OR email LIKE '%$each%' ";
		
		}

}
mysql_connect("localhost","test","test");
mysql_select_db("user");

$query = mysql_query($query);
$num = mysql_num_rows($query);

if($num > 0 && $search!="")
{
	
	echo "$num results found for <b>$search<b>";
	
		while($row1 = mysql_fetch_assoc($query))
		{
			
				$demail = $row1['email'];
				$dm1=$row1['m1'];
				$dm2=$row1['m2'];
				$dm3=$row1['m3'];
				$dm4=$row1['m4'];
				$dm5=$row1['m5'];
				$dm6=$row1['m6'];
				$dm7=$row1['m7'];
				$dm8=$row1['m8'];
				$gpa1=$row1['gpa1'];
			?>
			<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
			<div id="toggleText" style="display: none">
			<?php
			echo"
			<b><h3> email:$demail</b><br/></h3>  Chemistry: $dm1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8	<br/><br/>
Gpa:$gpa1";
			
		?>
</div>
<?php		
		}
}
 else
{
echo "no such email is present here";
}

mysql_close();



}										//cs khtm//



else if($_SESSION['branch']=="Mechanical engg")			//mech suru//
{
	$search = $_GET['search'];
$term = explode(" ",$search);
$query = "SELECT * FROM mech_marks WHERE ";

$i=0;
foreach($term as $each)
{	
		$i++;
		if($i==1)
		{
			$query .= "email LIKE '%$each%' ";
		}else
		{
		$query .= "OR email LIKE '%$each%' ";
		
		}

}
mysql_connect("localhost","test","test");
mysql_select_db("user");

$query = mysql_query($query);
$num = mysql_num_rows($query);

if($num > 0 && $search!="")
{
	
	echo "$num results found for <b>$search<b>";
	
		while($row1 = mysql_fetch_assoc($query))
		{
			
				$demail = $row1['email'];
				$dm1=$row1['m1'];
				$dm2=$row1['m2'];
				$dm3=$row1['m3'];
				$dm4=$row1['m4'];
				$dm5=$row1['m5'];
				$dm6=$row1['m6'];
				$dm7=$row1['m7'];
				$dm8=$row1['m8'];
				
			?>
			<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
			<div id="toggleText" style="display: none">
			<?php
			echo"
			<b><h3> email:$demail</b><br/></h3>  Chemistry: $dm1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8	";
			
		?>
</div>
<?php		
		}
}
 else
{
echo "no such email is present here";
}

mysql_close();



}						//mech khtm//



		
else if($_SESSION['branch']=="Safety and fire engg")		//safety suru//
{
	$search = $_GET['search'];
$term = explode(" ",$search);
$query = "SELECT * FROM sf_marks WHERE ";

$i=0;
foreach($term as $each)
{	
		$i++;
		if($i==1)
		{
			$query .= "email LIKE '%$each%' ";
		}else
		{
		$query .= "OR email LIKE '%$each%' ";
		
		}

}
mysql_connect("localhost","test","test");
mysql_select_db("user");

$query = mysql_query($query);
$num = mysql_num_rows($query);

if($num > 0 && $search!="")
{
	
	echo "$num results found for <b>$search<b>";
	
		while($row1 = mysql_fetch_assoc($query))
		{
			
				$demail = $row1['email'];
				$dm1=$row1['m1'];
				$dm2=$row1['m2'];
				$dm3=$row1['m3'];
				$dm4=$row1['m4'];
				$dm5=$row1['m5'];
				$dm6=$row1['m6'];
				$dm7=$row1['m7'];
				$dm8=$row1['m8'];
				
			?>
			<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
			<div id="toggleText" style="display: none">
			<?php
			echo"
			<b><h3> email:$demail</b><br/></h3>  Chemistry: $dm1<br/><br/>
Electronics: $dm2<br/><br/>
Electrical: $dm3<br/><br/>
EVS: $dm4<br/><br/>
Computer sc.: $dm5<br/><br/>
Grafics: $dm6<br/><br/>
CP lab: $dm7<br/><br/>
Electrical lab:	$dm8	";
			
		?>
</div>
<?php		
		}
}
 else
{
echo "no such email is present here";
}

mysql_close();



}	//safety khtm//

}

 else
{
echo"please type any word";
}
?>



