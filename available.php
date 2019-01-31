<?php include('db.php');
$q="select * from available";
$r=mysqli_query($con,$q) or die(mysqli_error($con));
?>
<html>
    <head>
  <title>Login</title>
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
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

        </div>
        <br/><br/><br/><br/><br/><br/>
         
     <table class="table table-condensed">
    <thead>
      <tr>
        <th>Screen</th>
        <th>Tickets Available</th>
        <th>Total Amount</th>

      </tr>
    </thead>
    <tbody>
      <?php
if (mysqli_num_rows($r) > 0) {
    while ($row = mysqli_fetch_array($r)) {
        ?>
        <tr>
            <td><?php echo $row[0]; ?></td> 
            <td><?php echo $row[1]; ?></td> 
            <td><?php echo (100-$row[1])*120; ?></td> 
        </tr>
        <?php
    }
}
?>
      </div>
  </div>
    </body>
</html>
