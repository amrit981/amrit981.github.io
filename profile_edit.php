
<html>
<head>
</head>

<body>

<h3>Edit Student <?php echo base64_decode($_REQUEST['email']);?></h3>

<form ENCTYPE="multipart/form-data" method="POST" action="profile_change.php">
<table border="1" width="60%">

<tr><td width="30%">Name: </td><td><input type="text" name="newname" 
value="<?php echo base64_decode($_REQUEST['name']);?>"> </td></tr>

Change picture:<input type='file' name='newupload' /><p>

<input type="submit" name="submit" value="Save & Update" />
<input type="hidden" name="email" value="<?php echo base64_decode($_REQUEST['email']);?>">
</form>
</body>
</html>



