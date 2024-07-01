<?php
$connect = mysqli_connect("localhost","root","","fees") or die($connect);
if($connect)
{
	//echo "sucess";
}
else
{
	echo "error";
}
?>