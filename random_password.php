<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
function RandomString()
{
    $characters = '0123456789ABC';
    $randstring = '';
    for ($i = 0; $i <8 ; $i++)
	{
        $randstring .= $characters[rand(0, strlen($characters))];
		
    }
    return $randstring;
}
$a=RandomString();
echo $a;
?>