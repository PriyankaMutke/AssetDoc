<?php
include_once "connection.php";

$fname=$_POST["fnm"];
$lname=$_POST["lnm"];
$mail=$_POST["em"];
$phn=$_POST["phn"];
$rel=$_POST["rl"];
$msg=$_POST["msg"];


$sql="insert into ContactDetails values ('".$fname."','".$lname."','".$mail."',".$phn.",'".$rel."','".$msg."')";

if($result=mysqli_query($conn,$sql))
{
	echo "Contact Details Saved Successfully";
}
else
{
	echo "Error: " . $sql . " ". mysqli_error($conn);
}
?>