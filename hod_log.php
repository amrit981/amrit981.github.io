<html>
<head>
<meta charset="utf-8">
<title>Hod Login page</title>
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
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<form action="hod_logcode.php" method="post" >
<fieldset>
<p><input type="text"  name="email" required value="" placeholder="email"></p>
<p><input type="password" name="password" required value="" placeholder="password"  maxlength="10"></p>
<p><select name="branch" required value="">
<option name="cs">Computer science</option>
<option name="me">Mechanical engg</option>
<option name="sf">Safety and fire engg</option>
<option name="ee">Electrical and Electronics</option>
<option name="ec">Electronics and communication</option>
<option name="it">Information Techonology</option>
<option name="civil">Civil engg</option>
</p><br/>
<br/>
<br/>
<p><a class="new" href="security.php">Frgot Password?</a></p>
<br/><br/>
<p><input  type="submit" name="submit" value="Login"></p>
</fieldset>
</div>

</body>
</html>
