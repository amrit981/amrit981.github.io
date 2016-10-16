
<html>
<head>

<title>marks update</title>
<script language="javascript"> 
function hideshow()
{
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow1()
{
	var ele = document.getElementById("toggleText1");
	var text = document.getElementById("displayText1");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow2()
{
	var ele = document.getElementById("toggleText2");
	var text = document.getElementById("displayText2");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow3()
{
	var ele = document.getElementById("toggleText3");
	var text = document.getElementById("displayText3");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow4()
{
	var ele = document.getElementById("toggleText4");
	var text = document.getElementById("displayText4");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow5()
{
	var ele = document.getElementById("toggleText5");
	var text = document.getElementById("displayText5");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow6()
{
	var ele = document.getElementById("toggleText6");
	var text = document.getElementById("displayText6");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
function hideshow7()
{
	var ele = document.getElementById("toggleText7");
	var text = document.getElementById("displayText7");
	
	if(ele.style.display == "block")
	{
    		ele.style.display = "none";
	}
	else 
	{
		ele.style.display = "block";
	}
} 
</script>

</head>
<body>
<form method="post" action="marks.php" name="Test">
<p>Session<select name="session" required value="">
<option name="2016">2016</option>
<option name="2015">2015</option>
<option name="2014">2014</option>
<option name="2013">2013</option>
<option name="2012">2012</option>
<option name="2011">2011</option>
<option name="2010">2010</option>
</select>
<br/></p>
<!---------------------------------------S1----------------------------------------------------------------->
<a  id="displayText" href="javascript:hideshow();"><h3>S1</h3></a> 
<div id="toggleText" style="display: none">
<table border="0" width="20%">
<tr><td width="70%">Chemistry:</td><td><input type="text" size="4"  name="m1" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date1" placeholder="YYYY-MM" required value="">
<tr><td width="70%">Electronics:</td><td><input type="text" size="4" name="m2" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date2" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Electrical:</td><td><input type="text" size="4" name="m3" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date3" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">EVS:</td><td><input type="text" size="4" name="m4" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date4" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Computer_sc:</td><td><input type="text" size="4" placeholder="marks"name="m5" required value=""><td>Date:</td><td><input type="date" name="date5" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Graphics:</td><td><input type="text" size="4"  name="m6" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date6" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">CP lab:</td><td><input type="text" size="4"name="m7"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date7" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Electrical_lab:</td><td><input type="text" size="4" name="m8" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date8" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa1" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">

<!---------------------------------------S2----------------------------------------------------------------->
<a  id="displayText1" href="javascript:hideshow1();"><h3>S2</h3></a> 
<div id="toggleText1" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">Mathematics:</td><td><input type="text" size="4"  name="m9" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date9" placeholder="YYYY-MM" required value="">
<tr><td width="70%">Civil engineering:</td><td><input type="text" size="4" name="m10" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date10" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Mechanics:</td><td><input type="text" size="4" name="m11" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date11" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">BME:</td><td><input type="text" size="4" name="m12" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date12" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Physics:</td><td><input type="text" size="4" placeholder="marks"name="m13" required value=""><td>Date:</td><td><input type="date" name="date13" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">TCP:</td><td><input type="text" size="4"  name="m14" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date14" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Civil lab:</td><td><input type="text" size="4"name="m15"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date15" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Mechanical_lab:</td><td><input type="text" size="4" name="m16" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date16" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa2" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">


<!---------------------------------------S3----------------------------------------------------------------->
<a  id="displayText2" href="javascript:hideshow2();"><h3>S3</h3></a> 
<div id="toggleText2" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">LATT:</td><td><input type="text" size="4"  name="m17" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date17" placeholder="YYYY-MM" required value="">
<tr><td width="70%">DCS:</td><td><input type="text" size="4" name="m18" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date18" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">DCC:</td><td><input type="text" size="4" name="m19" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date19" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Logic Design:</td><td><input type="text" size="4" name="m20" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date20" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">OOPs:</td><td><input type="text" size="4" placeholder="marks"name="m21" required value=""><td>Date:</td><td><input type="date" name="date21" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">PPL:</td><td><input type="text" size="4"  name="m22" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date22" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">OOPs lab:</td><td><input type="text" size="4"name="m23"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date23" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">lab:</td><td><input type="text" size="4" name="m24" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date24" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa3" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">



<!---------------------------------------S4----------------------------------------------------------------->
<a  id="displayText3" href="javascript:hideshow3();"><h3>S4</h3></a> 
<div id="toggleText3" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">CVPDE(Maths):</td><td><input type="text" size="4"  name="m25" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date25" placeholder="YYYY-MM" required value="">
<tr><td width="70%">Microprocessor:</td><td><input type="text" size="4" name="m26" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date26" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">CO:</td><td><input type="text" size="4" name="m27" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date27" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">ALC:</td><td><input type="text" size="4" name="m28" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date28" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Data Structure:</td><td><input type="text" size="4" placeholder="marks"name="m29" required value=""><td>Date:</td><td><input type="date" name="date29" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">DMS:</td><td><input type="text" size="4"  name="m30" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date30" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">DMS_Lab:</td><td><input type="text" size="4"name="m31"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date31" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Data Structure_lab:</td><td><input type="text" size="4" name="m32" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date32" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa4" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">



<!---------------------------------------S5----------------------------------------------------------------->
<a  id="displayText4" href="javascript:hideshow4();"><h3>S5</h3></a> 
<div id="toggleText4" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">NSM(Maths):</td><td><input type="text" size="4"  name="m33" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date33" placeholder="YYYY-MM" required value="">
<tr><td width="70%">System Programming:</td><td><input type="text" size="4" name="m34" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date34" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">OOSE:</td><td><input type="text" size="4" name="m35" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date35" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Operating System:</td><td><input type="text" size="4" name="m36" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date36" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">AMM:</td><td><input type="text" size="4" placeholder="marks"name="m37" required value=""><td>Date:</td><td><input type="date" name="date37" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Computer Graphics:</td><td><input type="text" size="4"  name="m38" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date38" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Computer Graphics_lab:</td><td><input type="text" size="4"name="m39"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date39" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Microprocdessor_lab:</td><td><input type="text" size="4" name="m40" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date40" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa5" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">



<!---------------------------------------S6----------------------------------------------------------------->
<a  id="displayText5" href="javascript:hideshow5();"><h3>S6</h3></a> 
<div id="toggleText5" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">Computer Networs:</td><td><input type="text" size="4"  name="m41" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date41" placeholder="YYYY-MM" required value="">
<tr><td width="70%">Compiler Constructor:</td><td><input type="text" size="4" name="m42" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date42" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">CNS:</td><td><input type="text" size="4" name="m43" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date43" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Data Mining:</td><td><input type="text" size="4" name="m44" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date44" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">ESD:</td><td><input type="text" size="4" placeholder="marks"name="m45" required value=""><td>Date:</td><td><input type="date" name="date45" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Elective Design:</td><td><input type="text" size="4"  name="m46" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date46" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">OS Lab:</td><td><input type="text" size="4"name="m47"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date47" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Mini Project:</td><td><input type="text" size="4" name="m48" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date48" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa6" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">



<!---------------------------------------S7----------------------------------------------------------------->
<a  id="displayText6" href="javascript:hideshow6();"><h3>S7</h3></a> 
<div id="toggleText6" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">Principal Of managemet:</td><td><input type="text" size="4"  name="m49" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date49" placeholder="YYYY-MM" required value="">
<tr><td width="70%">ACS:</td><td><input type="text" size="4" name="m50" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date50" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">ADA:</td><td><input type="text" size="4" name="m51" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date51" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">web Technology:</td><td><input type="text" size="4" name="m52" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date52" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">LPL:</td><td><input type="text" size="4" placeholder="marks"name="m53" required value=""><td>Date:</td><td><input type="date" name="date53" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Network lab:</td><td><input type="text" size="4"  name="m54" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date54" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Entrepreneurship Development:</td><td><input type="text" size="4"name="m55"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date55" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Project Phase I:</td><td><input type="text" size="4" name="m56" placeholder="marks"required value=""><td>Date:</td><td><input type="date" name="date56" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa1" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">



<!---------------------------------------S8----------------------------------------------------------------->
<a  id="displayText7" href="javascript:hideshow7();"><h3>S8</h3></a> 
<div id="toggleText7" style="display: none">
<table border="0" width="20%">

<tr><td width="70%">AAPP</td><td><input type="text" size="4"  name="m57" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date57" placeholder="YYYY-MM" required value="">
<tr><td width="70%">Artifical Intelligence:</td><td><input type="text" size="4" name="m58" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date58" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Distributed Computing:</td><td><input type="text" size="4" name="m59" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date59" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Elective III:</td><td><input type="text" size="4" name="m60" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date60" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Seminar:</td><td><input type="text" size="4" placeholder="marks"name="m61" required value=""><td>Date:</td><td><input type="date" name="date61" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Phase Project II:</td><td><input type="text" size="4"  name="m62" placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date62" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">Viva:</td><td><input type="text" size="4"name="m63"  placeholder="marks" required value=""><td>Date:</td><td><input type="date" name="date63" placeholder="YYYY-MM" required value=""><br/>
<tr><td width="70%">GPA  :</td><td><input type="text" size="4" name="gpa1" placeholder="GPA" requried value=""><br/>
</table></div>
<input type="submit" name="click" value="click">
</form>








	<form  method="post" action="marks.php">
    <input value="Logout" type="submit" name="logout"></form>

</body>

</html>