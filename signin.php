<html>
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



<div id="login">

<br><br><h1><strong>REGSTRATION </strong></h1>
<fieldset>

<form ENCTYPE="multipart/form-data" method="post"  action="sign.php" >

<table border="0" width="75%">
<tr><td width="70%">Name: </td><td> <input type="text" placeholder="name" name="name"required value=""></p>

<tr><td width="70%">Roll number:</td><td> <input type="text" placeholder="roll number"  name="email"  required value=""></p>
<tr><td width="70%">Password:</td><td> <input type="password" size="4"  placeholder="password" minlength="6" maxlength="12" name="password" required value=""></p>
<tr><td width="70%">Confirm Password:</td><td><p><input type="password" placeholder="confirm" minlength="6" name="confirm" maxlength="12" required value=""></p><br>
<tr><td width="70%">Profile picture:</td><td>
<input type="hidden" name="max file size" value="10000" >
<input type="file" name="upload">
<input   type="submit" name="submit" value="REGISTER"></STRONG>

<p>
<tr><td width="70%">Branch:</td><td><p><select name="branch" required value="">
<option name="cs">Computer science</option>
<option name="me">Mechanical engg</option>
<option name="sf">Safety and fire engg</option>
<option name="ee">Electrical and Electronics</option>
<option name="ec">Electronics and communication</option>
<option name="it">Information Techonology</option>
<option name="civil">Civil engg</option>
</p>

</table>



<br>
<br><br>
<p>
<p><STRONG><input   type="submit" name="submit" value="REGISTER"></STRONG></p>
<br/>
<br/>
<br/>


</p>

</form>
</fieldset>


</center>


<br><br>

<p><strong><a href="log.php" >OLD customer login in</a></strong></p>


</body>

</html>