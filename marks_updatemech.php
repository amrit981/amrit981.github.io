
<html>
<head>
<title>
marks update</title>
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
<script>
      function AllowEdit(xHow)
	  {
        TheForm=document.forms[0].elements;  //get form elements list    
    for(i=0;i<TheForm.length;i++){
      if(TheForm[i].name != "EditButton")
      TheForm[i].disabled = xHow;
        }
      }
    </script>
</head>
<body onload="AllowEdit(true)">
<form method="post" action="marks.php" name="Test">
<a id="displayText" href="javascript:hideshow();"><h2>S1</h2></a> 
<input type="button" name="EditButton" onclick="AllowEdit(false)" value="Edit Form"><br>
<div id="toggleText" style="display: none">
<h4>Chemistry: <input type="text" name="m1" required value=""></h4><br/>
<h4>Electronics: <input type="text" name="m2" required value=""><br/>
<h4>Electrical: <input type="text" name="m3" required value=""></h4><br/>
<h4>EVS: <input type="text" name="m4" required value=""></h4><br/>
<h4>Computer sc.: <input type="text" name="m5" required value=""></h4><br/>
<h4>Grafics: <input type="text" name="m6" required value=""></h4><br/>
<h4>CP lab: <input type="text" name="m7" required value=""></h4><br/>
<h4>Electrical lab: <input type="text" name="m8" required value=""></h4><br/>
<h4>GPA  :  <input type="text" name="gpa1" requried value=""></h4><br/>
<h4><p>Session<select name="session" required value="">
<option name="2016">2016</option>
<option name="2015">2015</option>
<option name="2014">2014</option>
<option name="2013">2013</option>
<option name="2012">2012</option>
<option name="2011">2011</option>
<option name="2010">2010</option>
</select>
<br/></p></h4>
<input type="submit" name="click" value="click">
</form>
</div>

	<form  method="post" action="marks_mech.php">
    <input value="Logout" type="submit" name="logo"></form>
	

</body>

</html>