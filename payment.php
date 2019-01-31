<?php 
require('db.php');
session_start();
$u=$_SESSION['uname'];
$qty=$_SESSION['qty'];
$am=$_SESSION['am'];
$s=$_SESSION['screen'];
$dt=date("Y/m/d");
$q="select Avail from available where Screen='$s'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
$row = mysqli_fetch_row($r);
$avk=$row[0]-$qty;
$se=($row[0]-$qty)+1;
$af="$se".'-';
$af=$af."$row[0]";
$q2="update available set Avail='$avk' where Screen='$s' ";
$r=mysqli_query($con,$q2) or die(mysqli_error($con));
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("H:i:s");
$q3="insert into booking values('$u','$s','$af','$am','$dt','$timestamp')";
$rk=mysqli_query($con,$q3) or die(mysqli_error($con));
?>