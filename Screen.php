<?php require('check.php'); ?>
<html>
    <head>
  <title>Screen</title>
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
        <p style="font-size:30px">GP Cinemas</p></div>
        <br/><br/><br/><br/>
   
  <div class="row">
    <div class="col-xs-4"></div>      
         <p>Choose Your Screen</p></div></br>
     
  <div class="row">
    <div class="col-xs-4"></div>
     </div>       
     <form action="Screen1.php" method="post">
      <div class="row">
    <div class="col-xs-4"></div>
    
       
        <select class="selectpicker" name="adm">
    <option value="1" <?php echo"$a[1]";?> >Screen 1</option>
    <option value="2"<?php echo"$a[2]";?>>Screen 2</option>
    <option value="3"<?php echo"$a[3]";?>>Screen 3</option>
    <option value="4"<?php echo"$a[4]";?>>Screen 4</option>
  </optgroup>
</select>
</div>
      <br>
      <br>
        <div class="row">
        <div class="col-xs-4"> </div>
        <button class="btn btn-success btn-sx" type="submit">Submit</button>
        </div>
        </form>
  </div>
    </body>
</html>
