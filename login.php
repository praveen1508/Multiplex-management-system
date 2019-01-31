<?php
include('db.php');
session_start();
$uname=$_POST['em'];
$_SESSION['uname']=$uname;
$pwd=$_POST['pwd'];
$q1="SELECT Password,Admin FROM credential WHERE Email='$uname'";
$rs=mysqli_query($con,$q1) or die(mysqli_error($con));
$row = mysqli_fetch_row($rs); 
if($row[0]==$pwd)
{
	if($row[1]=="yes")
    {		
 	header("Location:admin.html");
    }
    else{
    		header("Location:Screen.php");

    }
}
else
{
	echo "Login failed";

}
?>