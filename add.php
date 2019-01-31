<?php
include('db.php');
session_start();
$_SESSION['$K']='enabled';
$_SESSION['$K']='enabled';
$_SESSION['$K']='enabled';
$_SESSION['$K']='enabled';
if (isset($_POST['chk']))
{
	foreach($_POST['chk'] as $k)
    {
    	$q="update available set Active='enabled' where Screen='$k'";
    	$rs=mysqli_query($con,$q) or die(mysqli_error($con));
    	$_SESSION['$K']='disabled';

    }
    header("Location:admin.html");
}

?>