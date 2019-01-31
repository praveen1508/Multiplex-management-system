<?php include('db.php');
$a=array();
for($i=1;$i<=4;$i++)
{
 
$q="select Active from available where Screen='$i'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));	
 $row = mysqli_fetch_row($r);
 $a[$i]=$row[0];
}
?>