<script>
      function AllowEdit(xHow){
        TheForm=document.forms[0].elements;     
    for(i=0;i<TheForm.length;i++){
		
      if(TheForm[i].name != "EditButton")
      TheForm[i].disabled = xHow;
        }
      }
    </script>
	
	<body onload="AllowEdit(true)">
	
	<input type="button" name="EditButton" onclick="AllowEdit(false)" value="Edit Form"><br>