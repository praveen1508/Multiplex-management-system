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
        <p style="font-size:30px">Admin Portal</p></div>
        <br/><br/><br/><br/>
   
  <div class="row">
    <div class="col-xs-4"></div>      
         <p>Choose Screens to be removed</p></div></br>
     
  <div class="row">
    <div class="col-xs-4"></div>
     </div>       
     <form action="remove.php" method="post">
      <div class="row">
    <div class="col-xs-4"></div>
    <div class="checkbox">
    <div class="col-xs-4"></div> 
  <label><input type="checkbox" name="chk[]" value="1">Screen 1</label>
    <label><input type="checkbox" name="chk[]" value="2">Screen 2</label>
      <label><input type="checkbox" name="chk[]" value="3">Screen 3</label>
        <label><input type="checkbox" name="chk[]" value="4">Screen4</label>
</div>
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
