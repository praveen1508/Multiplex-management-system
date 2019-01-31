<?php include('db.php');
session_start();
$c=$_SESSION['screen'];
$_SESSION['qty']=$_POST['qty'];
$q="select Avail from available where Screen='$c'";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
$row = mysqli_fetch_row($r);
?>;
<html>
    <head>
  <title>Screen </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><i>GP CINEMAS<i></a>A> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home</a></li>
    <li><a href="#">Book</a></li>
        <li><a href="#">Payment</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

        </div>
        <br/><br/>
        <div class="row">
        <div class="col-xs-4"></div>
        <p style="font-size:30px">SCREEN  <?php echo "$c";?> </p></div>
        <br/><br/><br/><br/>
  <form action="confirm.php" method="POST">
   <div class="row">
    <div class="col-xs-4"></div> 
     Ticket Price : <?php $d=$_POST['qty']*120 ;echo"$d";?></div>
  <br> 
   <div class="row">
    <div class="col-xs-4"></div> 
     Tax :     <?php $k=$d*0.15 ;echo "$k";?>
      <br> 
      <br>
      <div class="row">
    <div class="col-xs-4"></div> 
    Total Amount :     <?php $h=$k+$d;echo "$h";$_SESSION['am']=$h?>
      <br> 
      <br>
        <div class="row">
        <div class="col-xs-4"> </div>
        <button class="btn btn-success btn-sx" type="submit">Book</button>
        </div>
          
          </div>
      </form>
    </body>
</html>
