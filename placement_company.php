<?php 

$filedel="images/".$file;
unlink($filedel);

?>
<html>
<head>
</head>
<body>
<form ENCTYPE="multipart/form-data" method="post"  action="pic_update.php">
<input type="hidden" name="max file size" value="10000" >
<input type="file" name="upload">
<input   type="submit" name="submit" value="REGISTER"></STRONG>
<p><STRONG><input   type="submit" name="submit" value="REGISTER"></STRONG></p>
<br/>
</body>
</html>

